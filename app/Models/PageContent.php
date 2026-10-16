<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;
use Symfony\Component\Finder\SplFileInfo;

#[Fillable(['key', 'label', 'heading', 'intro', 'body', 'meta_title', 'meta_description', 'image', 'is_indexable'])]
class PageContent extends Model
{
    use HasFactory;

    protected function casts(): array
    {
        return ['is_indexable' => 'boolean'];
    }

    public static function images(): array
    {
        return collect(File::files(public_path('assets/img')))->filter(fn (SplFileInfo $file): bool => in_array(strtolower($file->getExtension()), ['png', 'jpg', 'jpeg', 'webp'], true) && ! str_contains($file->getFilename(), '-sm.'))->mapWithKeys(fn (SplFileInfo $file): array => ['/assets/img/'.$file->getFilename() => Str::headline($file->getBasename('.'.$file->getExtension()))])->all();
    }

    public function renderedBody(): HtmlString
    {
        return new HtmlString(Str::markdown($this->body ?? '', ['html_input' => 'strip', 'allow_unsafe_links' => false, 'max_nesting_level' => 20]));
    }
}
