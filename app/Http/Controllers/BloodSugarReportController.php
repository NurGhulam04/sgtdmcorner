<?php

namespace App\Http\Controllers;

use App\Models\BloodSugarReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BloodSugarReportController extends Controller
{
    /**
     * Menampilkan halaman utama laporan gula darah.
     */
    public function index()
    {
        $bloodSugarReports = BloodSugarReport::with('user')
                                            ->where('user_id', Auth::id())
                                            ->orderBy('tanggal_pemeriksaan', 'desc')
                                            ->orderBy('jam_pemeriksaan', 'desc')
                                            ->paginate(5);
        $chartLabels = $bloodSugarReports->pluck('tanggal_pemeriksaan')->map(function ($date) {
            return $date->format('d M Y');
        });

        $chartReports = BloodSugarReport::where('user_id', Auth::id())
                                        ->orderBy('tanggal_pemeriksaan', 'asc')
                                        ->orderBy('jam_pemeriksaan', 'asc')
                                        ->get();

        $chartLabels = $chartReports->pluck('tanggal_pemeriksaan')->map(function ($date) {
            return $date->format('d M Y');
        });
        $chartData = $chartReports->pluck('hasil_gula_darah');

        return view('laporan-gula-darah.index', compact('bloodSugarReports', 'chartLabels', 'chartData'));
    }

    /**
     * Menyimpan data laporan baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'hasil_gula_darah' => 'required|integer|min:0',
            'tanggal_pemeriksaan' => 'required|date',
            'jam_pemeriksaan' => 'required',
        ]);

        BloodSugarReport::create([
            'user_id' => Auth::id(),
            'hasil_gula_darah' => $request->hasil_gula_darah,
            'tanggal_pemeriksaan' => $request->tanggal_pemeriksaan,
            'jam_pemeriksaan' => $request->jam_pemeriksaan,
        ]);

        return redirect()->route('laporan-gula-darah.index')
                         ->with('success', 'Laporan gula darah berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit laporan.
     */
    public function edit(BloodSugarReport $laporan_gula_darah)
    {
        if ($laporan_gula_darah->user_id !== Auth::id()) {
            abort(403);
        }

        return view('laporan-gula-darah.edit', compact('laporan_gula_darah'));
    }


    public function update(Request $request, BloodSugarReport $laporan_gula_darah)
    {
        if ($laporan_gula_darah->user_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'hasil_gula_darah' => 'required|integer|min:0',
            'tanggal_pemeriksaan' => 'required|date',
            'jam_pemeriksaan' => 'required',
        ]);

        $laporan_gula_darah->update($request->all());

        return redirect()->route('laporan-gula-darah.index')
                         ->with('success', 'Laporan gula darah berhasil diperbarui.');
    }


    public function destroy(BloodSugarReport $laporan_gula_darah)
    {
        if ($laporan_gula_darah->user_id !== Auth::id()) {
            abort(403);
        }

        $laporan_gula_darah->delete();

        return redirect()->route('laporan-gula-darah.index')
                         ->with('success', 'Laporan gula darah berhasil dihapus.');
    }
}
