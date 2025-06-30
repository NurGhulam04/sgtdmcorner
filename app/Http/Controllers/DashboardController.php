<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman Pendahuluan.
     */
    public function pendahuluan()
    {
        // View ini hanya akan menampilkan konten statis.
        return view('pendahuluan');
    }

    /**
     * Menampilkan halaman Video Edukasi dengan data hardcode.
     */
    public function video()
    {
        // DATA VIDEO HARDCODE DI SINI
        // Kita definisikan data sebagai array langsung di dalam method.
        $videos = [
            [
                'judul' => '1. Pengetahuan tentang DM',
                'youtube_embed_url' => 'https://www.youtube.com/embed/videoseries?list=PLm2915h3a_Rix9O9i4l22Kw_26gScumJd' // Ganti dengan URL embed asli
            ],
            [
                'judul' => '2. Spiritual Group Therapy',
                'youtube_embed_url' => 'https://www.youtube.com/embed/videoseries?list=PLm2915h3a_Rix9O9i4l22Kw_26gScumJd' // Ganti dengan URL embed asli
            ],
            [
                'judul' => '3. Ergonomic Exercise based Spiritual Care',
                'youtube_embed_url' => 'https://www.youtube.com/embed/videoseries?list=PLm2915h3a_Rix9O9i4l22Kw_26gScumJd' // Ganti dengan URL embed asli
            ],
            [
                'judul' => '4. Buerger Allen Exercise',
                'youtube_embed_url' => 'https://www.youtube.com/embed/videoseries?list=PLm2915h3a_Rix9O9i4l22Kw_26gScumJd' // Ganti dengan URL embed asli
            ],
            [
                'judul' => '5. Mindfulness Meditation based Spiritual Care',
                'youtube_embed_url' => 'https://www.youtube.com/embed/videoseries?list=PLm2915h3a_Rix9O9i4l22Kw_26gScumJd' // Ganti dengan URL embed asli
            ],
            [
                'judul' => '6. Pemberian Aromatherapy',
                'youtube_embed_url' => 'https://www.youtube.com/embed/videoseries?list=PLm2915h3a_Rix9O9i4l22Kw_26gScumJd' // Ganti dengan URL embed asli
            ],
            [
                'judul' => '7. Diabetic Foot Spa',
                'youtube_embed_url' => 'https://www.youtube.com/embed/videoseries?list=PLm2915h3a_Rix9O9i4l22Kw_26gScumJd' // Ganti dengan URL embed asli
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
