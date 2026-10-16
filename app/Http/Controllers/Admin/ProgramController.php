<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class ProgramController extends Controller
{
    public function index(Request $request): View
    {
        $request->validate(['q' => ['nullable', 'string', 'max:100']]);

        return view('admin.programs', ['programs' => Program::withCount('registrations')->when($request->filled('q'), fn ($q) => $q->where('name', 'like', '%'.$request->input('q').'%'))->latest()->paginate(9)->withQueryString()]);
    }

    public function create(): View
    {
        return view('admin.program-form', ['program' => new Program(['is_active' => true])]);
    }

    public function store(Request $request): RedirectResponse
    {
        Program::create($this->validated($request));

        return redirect()->route('admin.programs.index')->with('success', 'Program berhasil ditambahkan.');
    }

    public function edit(Program $program): View
    {
        return view('admin.program-form', compact('program'));
    }

    public function update(Request $request, Program $program): RedirectResponse
    {
        $program->update($this->validated($request));

        return redirect()->route('admin.programs.index')->with('success', 'Perubahan program berhasil disimpan.');
    }

    private function validated(Request $request): array
    {
        return $request->validate([
            'name' => ['required', 'string', 'max:150'], 'category' => ['required', Rule::in(['Seni Rupa & Desain', 'Arsitektur', 'SD & SMP'])],
            'mode' => ['required', Rule::in(['Offline / Online', 'Online', 'Blended'])], 'price' => ['required', 'integer', 'min:0', 'max:1000000000'],
            'description' => ['required', 'string', 'max:3000'], 'is_active' => ['required', 'boolean'],
        ]);
    }
}
