<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\PageContent;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function index(Request $request): View
    {
        $request->validate(['q' => ['nullable', 'string', 'max:100'], 'status' => ['nullable', Rule::in(['draft', 'published', 'scheduled'])]]);
        $articles = Article::when($request->filled('q'), fn (Builder $query): Builder => $query->where('title', 'like', '%'.$request->input('q').'%'))
            ->when($request->input('status') === 'draft', fn (Builder $query): Builder => $query->where('status', 'draft'))
            ->when($request->input('status') === 'published', fn (Builder $query): Builder => $query->published())
            ->when($request->input('status') === 'scheduled', fn (Builder $query): Builder => $query->where('status', 'published')->where('published_at', '>', now()))
            ->latest()->paginate(12)->withQueryString();

        return view('admin.articles.index', compact('articles'));
    }

    public function create(): View
    {
        return view('admin.articles.form', ['article' => new Article(['status' => 'draft', 'is_indexable' => true, 'author_name' => auth()->user()->name]), 'images' => PageContent::images()]);
    }

    public function store(ArticleRequest $request): RedirectResponse
    {
        $article = Article::create($this->data($request));

        return redirect()->route('admin.articles.edit', $article)->with('success', 'Artikel berhasil disimpan.');
    }

    public function edit(Article $article): View
    {
        return view('admin.articles.form', ['article' => $article, 'images' => PageContent::images()]);
    }

    public function update(ArticleRequest $request, Article $article): RedirectResponse
    {
        $article->update($this->data($request));

        return back()->with('success', 'Perubahan artikel berhasil disimpan.');
    }

    public function preview(Article $article): Response
    {
        return response()->view('site.article', ['article' => $article, 'preview' => true])->header('X-Robots-Tag', 'noindex, nofollow')->header('Cache-Control', 'private, no-store');
    }

    private function data(ArticleRequest $request): array
    {
        $data = $request->validated();
        $data['faqs'] = $data['faqs'] ?? [];
        $data['sources'] = $data['sources'] ?? [];
        $data['published_at'] = filled($data['published_at'] ?? null) ? Carbon::createFromFormat('Y-m-d\TH:i', $data['published_at'], 'Asia/Jakarta')->second(0)->utc() : null;

        return $data;
    }
}
