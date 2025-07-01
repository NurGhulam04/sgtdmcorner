<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    /**
     * Menampilkan halaman Pendahuluan.
     */
    public function dashboard()
    {

        return view('dashboard');
    }
    public function pendahuluan()
    {
        // View ini hanya akan menampilkan konten statis.
        return view('pendahuluan');
    }


    public function video()
    {

        $videos = [
            [
                'judul' => 'Pengetahuan tentang DM',
                'url' => 'https://www.youtube.com/embed/videoseries?list=PLm2915h3a_Rix9O9i4l22Kw_26gScumJd' // Ganti dengan URL embed asli
            ],
            [
                'judul' => 'Spiritual Group Therapy',
                'url' => 'https://www.youtube.com/embed/videoseries?list=PLm2915h3a_Rix9O9i4l22Kw_26gScumJd' // Ganti dengan URL embed asli
            ],
            [
                'judul' => 'Ergonomic Exercise based Spiritual Care',
                'url' => 'https://www.youtube.com/embed/videoseries?list=PLm2915h3a_Rix9O9i4l22Kw_26gScumJd' // Ganti dengan URL embed asli
            ],
            [
                'judul' => 'Buerger Allen Exercise',
                'url' => 'https://www.youtube.com/embed/videoseries?list=PLm2915h3a_Rix9O9i4l22Kw_26gScumJd' // Ganti dengan URL embed asli
            ],
            [
                'judul' => 'Mindfulness Meditation based Spiritual Care',
                'url' => 'https://www.youtube.com/embed/videoseries?list=PLm2915h3a_Rix9O9i4l22Kw_26gScumJd' // Ganti dengan URL embed asli
            ],
            [
                'judul' => 'Pemberian Aromatherapy',
                'url' => 'https://www.youtube.com/embed/videoseries?list=PLm2915h3a_Rix9O9i4l22Kw_26gScumJd' // Ganti dengan URL embed asli
            ],
            [
                'judul' => 'Diabetic Foot Spa',
                'url' => 'https://www.youtube.com/embed/videoseries?list=PLm2915h3a_Rix9O9i4l22Kw_26gScumJd' // Ganti dengan URL embed asli
            ],
        ];

        // Kirim data array $videos ke view 'video.blade.php'
        return view('video', compact('videos'));
    }

    /**
     * Menampilkan halaman Artikel dengan data hardcode.
     */
    public function artikel()
    {
        // DATA ARTIKEL HARDCODE DI SINI
        $articles = [
            [
                'judul' => 'Mengenal Diabetes Melitus Gestasional (DMG)',
                'deskripsi_singkat' => 'Diabetes melitus gestasional adalah kondisi diabetes yang muncul selama kehamilan dan biasanya hilang setelah melahirkan...',
                'url_sumber' => 'https://www.halodoc.com/kesehatan/diabetes-gestasional'
            ],
            [
                'judul' => 'Pentingnya Diet Sehat untuk Penderita DMG',
                'deskripsi_singkat' => 'Mengatur pola makan adalah kunci utama dalam mengelola DMG. Fokus pada makanan kaya serat seperti sayuran dan buah...',
                'url_sumber' => 'https://www.alodokter.com/kenali-diabetes-gestasional-dan-cara-mengatasinya'
            ],
            [
                'judul' => 'Olahraga yang Aman Selama Kehamilan dengan DMG',
                'deskripsi_singkat' => 'Aktivitas fisik teratur membantu mengontrol kadar gula darah. Beberapa olahraga yang aman antara lain jalan kaki, berenang, dan yoga prenatal...',
                'url_sumber' => 'https://www.sehatq.com/artikel/jenis-olahraga-untuk-penderita-diabetes-gestasional'
            ]
        ];

        // Kirim data array $articles ke view 'artikel.blade.php'
        return view('artikel', compact('articles'));
    }
}
