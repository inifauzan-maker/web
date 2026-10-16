<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PageContentController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\SessionController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'site.home')->name('home');
Route::view('/program-index', 'site.program-index')->name('program-index');
Route::view('/program', 'site.program')->name('program');
Route::view('/galeri', 'site.galeri')->name('galeri');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('articles.show');
Route::view('/tentang', 'site.tentang')->name('tentang');
Route::get('/daftar', [RegistrationController::class, 'create'])->name('daftar');
Route::post('/daftar', [RegistrationController::class, 'store'])->middleware('throttle:10,1')->name('registrations.store');
Route::get('/blog-post', [BlogController::class, 'legacy'])->name('blog-post');
Route::get('/sitemap.xml', SitemapController::class)->name('sitemap');
Route::get('/robots.txt', [SitemapController::class, 'robots'])->name('robots');

Route::get('/admin/login', [SessionController::class, 'create'])->name('login');
Route::post('/admin/login', [SessionController::class, 'store'])->middleware('throttle:admin-login')->name('admin.login.store');
Route::prefix('admin')->name('admin.')->middleware(['auth', 'can:access-admin'])->group(function (): void {
    Route::get('/', DashboardController::class)->name('dashboard');
    Route::get('/artikel/{article}/preview', [ArticleController::class, 'preview'])->name('articles.preview');
    Route::resource('/artikel', ArticleController::class)->parameters(['artikel' => 'article'])->names('articles')->except(['show', 'destroy']);
    Route::get('/konten', [PageContentController::class, 'index'])->name('content.index');
    Route::get('/konten/{pageContent}/edit', [PageContentController::class, 'edit'])->name('content.edit');
    Route::put('/konten/{pageContent}', [PageContentController::class, 'update'])->name('content.update');
    Route::post('/logout', [SessionController::class, 'destroy'])->name('logout');
    Route::get('/pendaftaran/export', [App\Http\Controllers\Admin\RegistrationController::class, 'export'])->name('registrations.export');
    Route::get('/pendaftaran', [App\Http\Controllers\Admin\RegistrationController::class, 'index'])->name('registrations.index');
    Route::get('/pendaftaran/{registration}', [App\Http\Controllers\Admin\RegistrationController::class, 'show'])->name('registrations.show');
    Route::patch('/pendaftaran/{registration}', [App\Http\Controllers\Admin\RegistrationController::class, 'update'])->name('registrations.update');
    Route::resource('/program', ProgramController::class)->parameters(['program' => 'program'])->names('programs')->except(['show', 'destroy']);
    Route::get('/pengaturan', [SettingController::class, 'edit'])->name('settings.edit');
    Route::patch('/pengaturan', [SettingController::class, 'update'])->name('settings.update');
});
