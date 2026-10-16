<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageContent;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class PageContentController extends Controller
{
    public function index(): View
    {
        return view('admin.content.index', ['pages' => PageContent::orderBy('id')->get()]);
    }

    public function edit(PageContent $pageContent): View
    {
        return view('admin.content.form', ['page' => $pageContent, 'images' => PageContent::images()]);
    }

    public function update(Request $request, PageContent $pageContent): RedirectResponse
    {
        $data = $request->validate(['heading' => ['nullable', 'string', 'max:250'], 'intro' => ['nullable', 'string', 'max:2000'], 'body' => ['nullable', 'string', 'max:50000', 'not_regex:/^#\s/m'], 'meta_title' => ['required', 'string', 'max:160'], 'meta_description' => ['required', 'string', 'max:320'], 'image' => ['required', Rule::in(array_keys(PageContent::images()))], 'is_indexable' => ['required', 'boolean']]);
        $pageContent->update($data);

        return back()->with('success', 'Konten dan SEO halaman berhasil diperbarui.');
    }
}
