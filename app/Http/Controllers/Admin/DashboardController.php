<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Program;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(Request $request): View
    {
        $days = in_array($request->integer('days'), [7, 30, 90], true) ? $request->integer('days') : 30;
        $start = now()->startOfDay()->subDays($days - 1);
        $current = Registration::where('created_at', '>=', $start)->get(['created_at', 'status']);
        $chart = collect(range(0, $days - 1))->map(function (int $offset) use ($current, $start): array {
            $day = $start->copy()->addDays($offset);

            return ['label' => $day->format('d M'), 'count' => $current->filter(fn (Registration $r): bool => $r->created_at->isSameDay($day))->count()];
        });
        $locationCounts = Registration::selectRaw('location, count(*) as total')->groupBy('location')->pluck('total', 'location');

        return view('admin.dashboard', [
            'days' => $days, 'chart' => $chart, 'total' => Registration::count(), 'periodCount' => $current->count(),
            'pending' => Registration::where('status', 'baru')->count(), 'enrolled' => Registration::where('status', 'terdaftar')->count(),
            'activePrograms' => Program::where('is_active', true)->count(),
            'registrations' => Registration::with('program')->latest()->take(5)->get(),
            'popularPrograms' => Program::withCount('registrations')->orderByDesc('registrations_count')->take(4)->get(),
            'locations' => collect(Registration::LOCATIONS)->mapWithKeys(fn (string $location): array => [$location => $locationCounts[$location] ?? 0]),
        ]);
    }
}
