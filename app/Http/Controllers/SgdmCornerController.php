<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActivityReport;
use App\Models\BloodSugarReport;
use App\Models\Article;

class SgdmCornerController extends Controller
{
    /**
     * Menampilkan halaman utama dengan form pencarian
     * atau menampilkan dashboard berdasarkan nama yang dicari.
     */
    public function index(Request $request)
    {
        $articles = Article::all();
        $searchName = $request->query('nama');

        $activities = collect(); // Defaultnya koleksi kosong
        $bloodSugars = collect(); // Defaultnya koleksi kosong

        if ($searchName) {
            // Jika ada nama yang dicari, ambil data berdasarkan nama tersebut
            $activities = ActivityReport::where('nama', $searchName)->orderBy('tanggal', 'desc')->get();
            $bloodSugars = BloodSugarReport::where('nama', $searchName)->orderBy('waktu_cek', 'desc')->get();
        }

        // Tampilkan view dan kirim semua data yang diperlukan
        return view('welcome', compact('articles', 'searchName', 'activities', 'bloodSugars'));
    }

    /**
     * Menyimpan laporan aktivitas baru.
     */
    public function storeActivity(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'aktivitas' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        ActivityReport::create($request->all());

        // Redirect kembali ke halaman dashboard nama yang sama
        return redirect()->route('home', ['nama' => $request->nama])
                         ->with('success', 'Laporan aktivitas berhasil disimpan!');
    }

    /**
     * Menyimpan laporan gula darah baru.
     */
    public function storeBloodSugar(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kadar_gula' => 'required|integer',
            'keterangan' => 'required|string',
            'waktu_cek' => 'required|date',
        ]);

        BloodSugarReport::create($request->all());

        // Redirect kembali ke halaman dashboard nama yang sama
        return redirect()->route('home', ['nama' => $request->nama])
                         ->with('success', 'Laporan gula darah berhasil disimpan!');
    }
}
