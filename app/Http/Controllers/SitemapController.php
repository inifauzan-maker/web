<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\PageContent;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function __invoke(): Response
    {
        $savedPages = PageContent::get()->keyBy('key');
        $pages = collect(config('content.pages'))->keys()->filter(fn (string $key): bool => ($savedPages->get($key)?->is_indexable ?? $key !== 'daftar'))->map(fn (string $key): array => ['url' => route($key), 'updated' => $savedPages->get($key)?->updated_at?->toAtomString()]);
        $articles = Article::published()->where('is_indexable', true)->get()->map(fn (Article $article): array => ['url' => route('articles.show', $article->slug), 'updated' => $article->updated_at->toAtomString()]);

        return response()->view('site.sitemap', ['urls' => $pages->concat($articles)], 200)->header('Content-Type', 'application/xml; charset=UTF-8');
    }

    public function robots(): Response
    {
        return response("User-agent: *\nAllow: /\nDisallow: /admin\n\nSitemap: ".route('sitemap')."\n", 200, ['Content-Type' => 'text/plain; charset=UTF-8']);
    }
}
