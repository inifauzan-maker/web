<?php

namespace Tests\Feature;

use App\Models\Article;
use App\Models\PageContent;
use App\Models\User;
use Carbon\Carbon;
use Database\Seeders\ContentSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContentTest extends TestCase
{
    use RefreshDatabase;

    private function admin(): User
    {
        $user = User::factory()->create();
        $user->is_admin = true;
        $user->save();

        return $user;
    }

    private function payload(array $overrides = []): array
    {
        return [...Article::factory()->make()->toArray(), 'published_at' => null, ...$overrides];
    }

    public function test_cms_endpoints_require_admin_access(): void
    {
        $article = Article::factory()->create();
        $page = PageContent::factory()->create(['key' => 'home']);
        foreach (['/admin/artikel', '/admin/artikel/create', '/admin/artikel/'.$article->id.'/edit', '/admin/artikel/'.$article->id.'/preview', '/admin/konten', '/admin/konten/'.$page->id.'/edit'] as $path) {
            $this->get($path)->assertRedirect(route('login'));
        }
        $this->actingAs(User::factory()->create())->post('/admin/artikel', $this->payload())->assertForbidden();
        $this->put(route('admin.content.update', $page), [])->assertForbidden();
    }

    public function test_admin_cms_pages_and_preview_render(): void
    {
        $article = Article::factory()->create();
        $page = PageContent::factory()->create(['key' => 'home']);
        $this->actingAs($this->admin());
        foreach (['/admin/artikel', '/admin/artikel/create', '/admin/artikel/'.$article->id.'/edit', '/admin/konten', '/admin/konten/'.$page->id.'/edit'] as $path) {
            $this->get($path)->assertOk();
        }
        $this->get(route('admin.articles.preview', $article))->assertOk()->assertHeader('X-Robots-Tag', 'noindex, nofollow')->assertSee('noindex, follow', false)->assertSee($article->title);
    }

    public function test_admin_can_create_a_draft_with_metadata_and_answer_fields(): void
    {
        $data = $this->payload(['title' => 'Persiapan Portofolio', 'slug' => 'persiapan-portofolio', 'meta_title' => 'Portofolio untuk Pemula', 'meta_description' => 'Langkah menyusun portofolio.', 'summary' => 'Mulai dari pengamatan bentuk.', 'key_points' => "Latihan rutin\nKurasi karya", 'faqs' => [['question' => 'Mulai dari mana?', 'answer' => 'Latihan bentuk.']], 'sources' => [['label' => 'Sumber kampus', 'url' => 'https://www.itb.ac.id/']]]);
        $this->actingAs($this->admin())->post('/admin/artikel', $data)->assertRedirect();
        $this->assertDatabaseHas('articles', ['slug' => 'persiapan-portofolio', 'status' => 'draft', 'meta_title' => 'Portofolio untuk Pemula', 'summary' => 'Mulai dari pengamatan bentuk.']);
        $this->assertSame('Mulai dari mana?', Article::firstOrFail()->faqs[0]['question']);
        $this->get('/blog/persiapan-portofolio')->assertNotFound();
    }

    public function test_article_input_validation_rejects_invalid_slug_source_and_heading(): void
    {
        $this->actingAs($this->admin())->post('/admin/artikel', [])->assertSessionHasErrors(['title', 'slug', 'body', 'excerpt', 'author_name', 'image', 'image_alt']);
        $this->post('/admin/artikel', $this->payload(['slug' => 'Invalid Slug', 'body' => '# Duplicate H1', 'image' => '/unknown.png', 'sources' => [['label' => 'Unsafe', 'url' => 'javascript:alert(1)']]]))->assertSessionHasErrors(['slug', 'body', 'image', 'sources.0.url']);
        $this->assertDatabaseCount('articles', 0);
    }

    public function test_slug_must_be_unique_and_published_slugs_are_locked(): void
    {
        $article = Article::factory()->create(['status' => 'published', 'published_at' => now()->subDay()]);
        $this->actingAs($this->admin())->post('/admin/artikel', $this->payload(['slug' => $article->slug]))->assertSessionHasErrors('slug');
        $this->put(route('admin.articles.update', $article), $this->payload(['slug' => 'changed-slug']))->assertSessionHasErrors('slug');
        $this->assertSame($article->slug, $article->fresh()->slug);
    }

    public function test_repeater_rows_can_be_removed_and_article_unpublished(): void
    {
        $article = Article::factory()->create(['status' => 'published', 'published_at' => now()->subDay(), 'faqs' => [['question' => 'Question', 'answer' => 'Answer']], 'sources' => [['label' => 'ITB', 'url' => 'https://www.itb.ac.id']]]);
        $data = $this->payload(['slug' => $article->slug, 'status' => 'draft']);
        unset($data['faqs'],$data['sources']);
        $this->actingAs($this->admin())->put(route('admin.articles.update', $article), $data)->assertSessionHasNoErrors()->assertSessionHas('success');
        $this->assertSame([], $article->fresh()->faqs);
        $this->assertSame([], $article->fresh()->sources);
        $this->get(route('articles.show', $article->slug))->assertNotFound();
    }

    public function test_scheduled_articles_follow_wib_and_do_not_leak_before_publication(): void
    {
        $this->travelTo(Carbon::parse('2026-10-16 10:00:00', 'UTC'));
        $data = $this->payload(['slug' => 'artikel-terjadwal', 'title' => 'Judul Terjadwal Rahasia', 'status' => 'published', 'published_at' => '2026-10-16T19:00']);
        $this->actingAs($this->admin())->post('/admin/artikel', $data)->assertSessionHasNoErrors();
        $article = Article::firstOrFail();
        $this->assertSame('2026-10-16 12:00:00', $article->published_at->format('Y-m-d H:i:s'));
        $this->get('/blog')->assertDontSee('Judul Terjadwal Rahasia');
        $this->get('/')->assertDontSee('Judul Terjadwal Rahasia');
        $this->get('/sitemap.xml')->assertDontSee('artikel-terjadwal');
        $this->get('/blog/artikel-terjadwal')->assertNotFound();
        $this->travelTo(Carbon::parse('2026-10-16 12:00:00', 'UTC'));
        $this->get('/blog/artikel-terjadwal')->assertOk();
        $this->get('/blog')->assertSee('Judul Terjadwal Rahasia');
    }

    public function test_public_article_renders_seo_answers_sources_and_valid_schema(): void
    {
        $article = Article::factory()->create(['status' => 'published', 'published_at' => now()->subDay(), 'meta_title' => 'Judul SEO Khusus', 'meta_description' => 'Deskripsi SEO Khusus', 'key_points' => "Poin satu\nPoin dua", 'faqs' => [['question' => 'Apa langkahnya?', 'answer' => 'Berlatih setiap hari.']], 'sources' => [['label' => 'Referensi ITB', 'url' => 'https://www.itb.ac.id/']]]);
        $response = $this->get(route('articles.show', $article->slug))->assertOk()->assertSee('<title>Judul SEO Khusus</title>', false)->assertSee('Deskripsi SEO Khusus')->assertSee('Poin satu')->assertSee('Apa langkahnya?')->assertSee('Referensi ITB')->assertSee('<h2>Langkah pertama</h2>', false);
        preg_match('/<script type="application\/ld\+json">(.*?)<\/script>/s', $response->getContent(), $matches);
        $schema = json_decode($matches[1], true, 512, JSON_THROW_ON_ERROR);
        $posting = collect($schema['@graph'])->firstWhere('@type', 'BlogPosting');
        $this->assertSame($article->title, $posting['headline']);
        $this->assertSame('Organization', $posting['author']['@type']);
        $this->assertSame(route('articles.show', $article->slug), $posting['mainEntityOfPage']['@id']);
        $this->assertSame(['https://www.itb.ac.id/'], $posting['citation']);
        $this->assertSame(1, substr_count($response->getContent(), '<title>'));
    }

    public function test_rendering_escapes_html_json_and_unsafe_markdown_links(): void
    {
        $article = Article::factory()->create(['status' => 'published', 'published_at' => now()->subDay(), 'title' => '</script><script>alert(1)</script>', 'body' => "## Safe heading\n\n<script>alert(2)</script>\n\n[bad](javascript:alert(3))", 'summary' => '<img src=x onerror=alert(4)>']);
        $response = $this->get(route('articles.show', $article->slug))->assertOk()->assertDontSee('<script>alert(1)</script>', false)->assertDontSee('<script>alert(2)</script>', false)->assertDontSee('href="javascript:', false)->assertDontSee('<img src=x onerror=', false);
        preg_match('/<script type="application\/ld\+json">(.*?)<\/script>/s', $response->getContent(), $matches);
        $this->assertIsArray(json_decode($matches[1], true, 512, JSON_THROW_ON_ERROR));
    }

    public function test_page_edits_update_visible_content_metadata_and_indexing(): void
    {
        $page = PageContent::factory()->create(['key' => 'home']);
        $this->actingAs($this->admin())->put(route('admin.content.update', $page), ['heading' => 'Judul Beranda Baru', 'intro' => 'Pengantar yang baru.', 'body' => "## Info tambahan\n\nInformasi bermanfaat.", 'meta_title' => 'Judul SEO Beranda', 'meta_description' => 'Deskripsi baru.', 'image' => '/assets/img/karya-2.webp', 'is_indexable' => 0])->assertSessionHas('success');
        $this->assertDatabaseHas('page_contents', ['key' => 'home', 'heading' => 'Judul Beranda Baru', 'is_indexable' => 0]);
        $this->get('/')->assertOk()->assertSee('Judul Beranda Baru')->assertSee('Pengantar yang baru.')->assertSee('<h2>Info tambahan</h2>', false)->assertSee('<title>Judul SEO Beranda</title>', false)->assertSee('noindex, follow', false);
        $this->get('/sitemap.xml')->assertDontSee('<loc>'.route('home').'</loc>', false);
    }

    public function test_page_updates_cannot_change_the_route_key_and_reject_unknown_images(): void
    {
        $page = PageContent::factory()->create(['key' => 'home']);
        $data = ['meta_title' => 'Valid title', 'meta_description' => 'Valid description', 'image' => '/invalid.png', 'is_indexable' => 1, 'key' => 'admin.dashboard'];
        $this->actingAs($this->admin())->put(route('admin.content.update', $page), $data)->assertSessionHasErrors('image');
        $this->put(route('admin.content.update', $page), [...$data, 'image' => '/assets/img/karya-1.webp'])->assertSessionHasNoErrors();
        $this->assertSame('home', $page->fresh()->key);
    }

    public function test_sitemap_is_valid_xml_and_only_contains_indexable_public_articles(): void
    {
        $visible = Article::factory()->create(['status' => 'published', 'published_at' => now()->subDay()]);
        $draft = Article::factory()->create();
        $hidden = Article::factory()->create(['status' => 'published', 'published_at' => now()->subDay(), 'is_indexable' => false]);
        $response = $this->get('/sitemap.xml')->assertOk()->assertHeader('Content-Type', 'application/xml; charset=UTF-8')->assertSee(route('articles.show', $visible->slug), false)->assertDontSee($draft->slug)->assertDontSee($hidden->slug);
        $this->assertNotFalse(simplexml_load_string($response->getContent()));
        $this->get(route('articles.show', $hidden->slug))->assertOk()->assertSee('noindex, follow', false);
        $this->get('/robots.txt')->assertOk()->assertSee('Disallow: /admin', false)->assertSee('Sitemap: '.route('sitemap'), false);
    }

    public function test_blog_search_and_filters_only_return_matching_published_articles(): void
    {
        Article::factory()->create(['title' => 'Latihan Perspektif', 'category' => 'Menggambar', 'status' => 'published', 'published_at' => now()->subDay()]);
        Article::factory()->create(['title' => 'Latihan Warna', 'category' => 'Warna', 'status' => 'published', 'published_at' => now()->subDay()]);
        Article::factory()->create(['title' => 'Latihan Rahasia', 'category' => 'Menggambar']);
        $this->get('/blog?q=Latihan&category=Menggambar')->assertOk()->assertSee('Latihan Perspektif')->assertDontSee('Latihan Warna')->assertDontSee('Latihan Rahasia')->assertSee('noindex, follow', false);
    }

    public function test_content_seeding_is_idempotent_and_does_not_overwrite_edits(): void
    {
        $this->seed(ContentSeeder::class);
        $page = PageContent::where('key', 'home')->firstOrFail();
        $page->update(['heading' => 'Heading pilihan admin']);
        $this->seed(ContentSeeder::class);
        $this->assertDatabaseCount('page_contents',7);
        $this->assertDatabaseCount('articles',1);
        $this->assertSame('Heading pilihan admin',$page->fresh()->heading);
        $this->get('/blog-post')->assertRedirect(route('articles.show','mengenal-jurusan-desain-produk'));
    }
}
