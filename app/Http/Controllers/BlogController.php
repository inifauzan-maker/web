<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(Request $request): View
    {
        $request->validate(['q' => ['nullable', 'string', 'max:100'], 'category' => ['nullable', 'string', 'max:80']]);

        return view('site.blog', [
            'articles' => Article::published()->when($request->filled('q'), fn (Builder $query): Builder => $query->where(function (Builder $query) use ($request): void {
                $query->where('title', 'like', '%'.$request->input('q').'%')->orWhere('excerpt', 'like', '%'.$request->input('q').'%');
            }))->when($request->filled('category'), fn (Builder $query): Builder => $query->where('category', $request->input('category')))->orderByDesc('published_at')->paginate(9)->withQueryString(),
            'categories' => Article::published()->distinct()->orderBy('category')->pluck('category'),
        ]);
    }

    public function show(string $slug): View
    {
        return view('site.article', ['article' => Article::published()->where('slug', $slug)->firstOrFail(), 'preview' => false]);
    }

    public function legacy(): RedirectResponse
    {
        $article = Article::published()->where('slug', 'mengenal-jurusan-desain-produk')->first();

        return $article ? redirect()->route('articles.show', $article->slug, 301) : redirect()->route('blog', [], 301);
    }
}
