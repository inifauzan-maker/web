<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\StreamedResponse;

class RegistrationController extends Controller
{
    public function index(Request $request): View
    {
        return view('admin.registrations', ['registrations' => $this->filtered($request)->paginate(12)->withQueryString(), 'counts' => Registration::selectRaw('status, count(*) as total')->groupBy('status')->pluck('total', 'status')]);
    }

    public function show(Registration $registration): View
    {
        $registration->load('program');

        return view('admin.registration', compact('registration'));
    }

    public function update(Request $request, Registration $registration): RedirectResponse
    {
        $registration->update($request->validate(['status' => ['required', Rule::in(array_keys(Registration::STATUSES))], 'admin_notes' => ['nullable', 'string', 'max:3000']]));

        return back()->with('success', 'Status dan catatan pendaftaran berhasil disimpan.');
    }

    public function export(Request $request): StreamedResponse
    {
        $query = $this->filtered($request);

        return response()->streamDownload(function () use ($query): void {
            $file = fopen('php://output', 'w');
            fwrite($file, "\xEF\xBB\xBF");
            fputcsv($file, ['ID', 'Nama', 'WhatsApp', 'Email', 'Sekolah', 'Program', 'Lokasi', 'Status', 'Tanggal'], escape: '');
            foreach ($query->lazy(200) as $r) {
                $values = [$r->id, $r->name, $r->phone, $r->email, $r->school, $r->program->name, $r->location, $r->status, $r->created_at->toDateString()];
                $values = array_map(fn ($v): string => preg_match('/^[\s]*[=+@\-]/u', (string) $v) ? "'".$v : (string) $v, $values);
                fputcsv($file, $values, escape: '');
            }
            fclose($file);
        }, 'pendaftaran-'.now()->format('Y-m-d').'.csv', ['Content-Type' => 'text/csv; charset=UTF-8']);
    }

    private function filtered(Request $request): Builder
    {
        $request->validate(['q' => ['nullable', 'string', 'max:100'], 'status' => ['nullable', Rule::in(array_keys(Registration::STATUSES))], 'location' => ['nullable', Rule::in(Registration::LOCATIONS)]]);

        return Registration::with('program')->when($request->filled('q'), function (Builder $q) use ($request): void {
            $q->where(function (Builder $q) use ($request): void {
                $q->where('name', 'like', '%'.$request->input('q').'%')->orWhere('school', 'like', '%'.$request->input('q').'%')->orWhere('phone', 'like', '%'.$request->input('q').'%');
            });
        })->when($request->filled('status'), fn (Builder $q): Builder => $q->where('status', $request->input('status')))->when($request->filled('location'), fn (Builder $q): Builder => $q->where('location',$request->input('location')))->latest();
    }
}
