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
                'url' => 'https://youtu.be/xkqmyoBYE9M?si=yVa3Xrx9qdGWcCiT'
            ],
            [
                'judul' => 'Spiritual Group Therapy',
                'url' => 'https://youtu.be/CdTIici0-7w?si=dQDUrAyrhCeaXGkJ'
            ],
            [
                'judul' => 'Ergonomic Exercise based Spiritual Care',
                'url' => 'https://youtu.be/MlM7C5KVV2Y?si=wbF85xK4HaL3xiij'
            ],
            [
                'judul' => 'Buerger Allen Exercise',
                'url' => 'https://youtu.be/dwP-sLQU0hM?si=tLv3gDjhtpBOhQfp'
            ],
            [
                'judul' => 'Mindfulness Meditation based Spiritual Care',
                'url' => 'https://youtu.be/TRSag-IfFg4?si=xBLUCOEfaNufoi1G'
            ],
            [
                'judul' => 'Pemberian Aromatherapy',
                'url' => 'https://youtu.be/DkUcwa4gdPE?si=37W2hfsbw-1dADAb'
            ],
            [
                'judul' => 'Diabetic Foot Spa',
                'url' => 'https://youtu.be/ph57saV2Hp4?si=DFKlv5YlDLx3uSwU'
            ],
        ];


        return view('video', compact('videos'));
    }
}
