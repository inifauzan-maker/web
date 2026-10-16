<?php

namespace App\Http\Requests;

use App\Models\PageContent;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;

class ArticleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('access-admin') ?? false;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:200'], 'slug' => ['required', 'string', 'max:180', 'regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/', Rule::unique('articles')->ignore($this->route('article'))],
            'category' => ['required', 'string', 'max:80'], 'excerpt' => ['required', 'string', 'max:500'], 'summary' => ['nullable', 'string', 'max:1500'],
            'body' => ['required', 'string', 'max:100000', 'not_regex:/^#\s/m'], 'key_points' => ['nullable', 'string', 'max:5000'],
            'author_name' => ['required', 'string', 'max:120'], 'author_type' => ['required', Rule::in(['Person', 'Organization'])], 'image' => ['required', Rule::in(array_keys(PageContent::images()))], 'image_alt' => ['required', 'string', 'max:200'],
            'meta_title' => ['nullable', 'string', 'max:160'], 'meta_description' => ['nullable', 'string', 'max:320'], 'is_indexable' => ['required', 'boolean'],
            'status' => ['required', Rule::in(['draft', 'published'])], 'published_at' => ['nullable', 'required_if:status,published', 'date_format:Y-m-d\TH:i'],
            'faqs' => ['nullable', 'array', 'max:15'], 'faqs.*' => ['array:question,answer'], 'faqs.*.question' => ['required', 'string', 'max:300'], 'faqs.*.answer' => ['required', 'string', 'max:2000'],
            'sources' => ['nullable', 'array', 'max:15'], 'sources.*' => ['array:label,url'], 'sources.*.label' => ['required', 'string', 'max:200'], 'sources.*.url' => ['required', 'url:http,https', 'max:2000'],
        ];
    }

    public function after(): array
    {
        return [function (Validator $validator): void {
            $article = $this->route('article');
            if ($article && $article->isPublished() && $this->input('slug') !== $article->slug) {
                $validator->errors()->add('slug', 'Slug artikel yang sudah terbit tidak dapat diubah agar tautan publik tetap berlaku.');
            }
        }];
    }

    public function messages(): array
    {
        return ['slug.regex' => 'Slug hanya boleh berisi huruf kecil, angka, dan tanda hubung.', 'slug.unique' => 'Slug sudah digunakan artikel lain.', 'body.not_regex' => 'Gunakan ## atau ### untuk subjudul. Judul utama sudah menjadi H1 halaman.', 'published_at.required_if' => 'Isi tanggal terbit saat status artikel Terbit / terjadwal.', 'sources.*.url.url' => 'Tautan referensi harus menggunakan http atau https.'];
    }
}
