<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\PageContent;
use App\Models\User;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer(['site.home', 'site.program-index', 'site.program', 'site.galeri', 'site.blog', 'site.tentang', 'site.daftar'], function (\Illuminate\View\View $view): void {
            $key = request()->route()?->getName();
            $defaults = config('content.pages.'.$key);
            $view->with('pageContent', $defaults ? PageContent::firstOrNew(['key' => $key], [...$defaults, 'is_indexable' => $key !== 'daftar']) : null);
            if ($key === 'home') {
                $view->with('latestArticles', Article::published()->orderByDesc('published_at')->take(3)->get());
            }
        });
        Gate::define('access-admin', fn (User $user): bool => (bool) $user->is_admin);
        RateLimiter::for('admin-login', fn (Request $request) => Limit::perMinute(5)->by(Str::lower((string) $request->input('email')).'|'.$request->ip()));
    }
}
