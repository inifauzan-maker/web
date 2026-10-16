<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;

class SettingController extends Controller
{
    public function edit(): View
    {
        return view('admin.settings');
    }

    public function update(Request $request): RedirectResponse
    {
        $data = $request->validate(['name' => ['required', 'string', 'max:100'], 'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($request->user()->id)], 'current_password' => ['required', 'current_password'], 'password' => ['nullable', 'confirmed', Password::min(12)->mixedCase()->numbers()]]);
        $request->user()->update(collect($data)->only(['name', 'email', 'password'])->filter(fn ($v): bool => $v !== null && $v !== '')->all());
        $request->session()->regenerate();

        return back()->with('success', 'Pengaturan akun berhasil disimpan.');
    }
}
