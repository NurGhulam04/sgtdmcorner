<?php

namespace App\Http\Controllers;

use App\Models\ActivityReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityReportController extends Controller
{

    public function index()
    {

        $activityReports = ActivityReport::with('user')
                                        ->where('user_id', Auth::id())
                                        ->orderBy('tanggal', 'desc')
                                        ->paginate(5);

        return view('laporan-aktivitas.index', compact('activityReports'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_exercise' => 'required|string|max:255',
            'durasi' => 'required|string|max:255',
            'tanggal' => 'required|date',
        ]);

        ActivityReport::create([
            'user_id' => Auth::id(),
            'jenis_exercise' => $request->jenis_exercise,
            'durasi' => $request->durasi,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('laporan-aktivitas.index')
                         ->with('success', 'Laporan aktivitas berhasil ditambahkan.');
    }


    public function edit(ActivityReport $laporan_aktivita)
    {
        if ($laporan_aktivita->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        return view('laporan-aktivitas.edit', compact('laporan_aktivita'));
    }

    public function update(Request $request, ActivityReport $laporan_aktivita)
    {
        if ($laporan_aktivita->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'jenis_exercise' => 'required|string|max:255',
            'durasi' => 'required|string|max:255',
            'tanggal' => 'required|date',
        ]);

        $laporan_aktivita->update($request->all());

        return redirect()->route('laporan-aktivitas.index')
                         ->with('success', 'Laporan aktivitas berhasil diperbarui.');
    }


    public function destroy(ActivityReport $laporan_aktivita)
    {
        if ($laporan_aktivita->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $laporan_aktivita->delete();

        return redirect()->route('laporan-aktivitas.index')
                         ->with('success', 'Laporan aktivitas berhasil dihapus.');
    }
}
