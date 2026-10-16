<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Registration;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class RegistrationController extends Controller
{
    public function create(): View
    {
        return view('site.daftar', ['programs' => Program::where('is_active', true)->orderBy('name')->get()]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'program_id' => ['required', Rule::exists('programs', 'id')->where('is_active', true)],
            'nama' => ['required', 'string', 'max:150'], 'hp' => ['required', 'regex:/^\+?[0-9]{9,15}$/'],
            'email' => ['nullable', 'email', 'max:255'], 'sekolah' => ['required', 'string', 'max:150'],
            'kelas' => ['required', Rule::in(['SD', 'SMP', 'X', 'XI', 'XII', 'Gap year / alumni'])],
            'kota' => ['nullable', 'string', 'max:100'], 'lokasi' => ['required', Rule::in(Registration::LOCATIONS)],
            'catatan' => ['nullable', 'string', 'max:3000'], 'consent' => ['accepted'], 'website' => ['nullable', 'max:0'],
        ]);
        Registration::create(['program_id' => $data['program_id'], 'name' => $data['nama'], 'phone' => $data['hp'], 'email' => $data['email'] ?? null, 'school' => $data['sekolah'], 'grade' => $data['kelas'], 'city' => $data['kota'] ?? null, 'location' => $data['lokasi'], 'notes' => $data['catatan'] ?? null, 'status' => 'baru']);

        return redirect()->route('daftar')->with('registration_success', true);
    }
}
