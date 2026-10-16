<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;

#[Fillable(['title', 'slug', 'category', 'excerpt', 'summary', 'body', 'key_points', 'faqs', 'sources', 'author_name', 'author_type', 'image', 'image_alt', 'meta_title', 'meta_description', 'is_indexable', 'status', 'published_at'])]
class Article extends Model
{
    use HasFactory;

    protected function casts(): array
    {
        return ['faqs' => 'array', 'sources' => 'array', 'published_at' => 'datetime', 'is_indexable' => 'boolean'];
    }

    #[Scope]
    protected function published(Builder $query): Builder
    {
        return $query->where('status', 'published')->whereNotNull('published_at')->where('published_at', '<=', now());
    }

    public function isPublished(): bool
    {
        return $this->status === 'published' && $this->published_at !== null && $this->published_at->lte(now());
    }

    public function renderedBody(): HtmlString
    {
        return new HtmlString(Str::markdown($this->body, ['html_input' => 'strip', 'allow_unsafe_links' => false, 'max_nesting_level' => 20]));
    }

    public function readingMinutes(): int
    {
        return max(1, (int) ceil(str_word_count(strip_tags($this->renderedBody()->toHtml())) / 200));
    }

    public function publicationLabel(): string
    {
        return $this->status === 'draft' ? 'Draft' : ($this->isPublished() ? 'Terbit' : 'Terjadwal');
    }
}
