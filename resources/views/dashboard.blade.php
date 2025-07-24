@extends('layouts.app')

@section('content')

<div class="pt-[60px] pb-16 bg-slate-50 min-h-screen">
    <section class="relative bg-cover bg-center h-64 sm:h-64 md:h-[400px]  shadow-lg overflow-hidden mb-12" style="background-image: url('{{ asset('images/dashboard-bg0.png') }}');">            <div class="absolute inset-0 bg-black bg-opacity-50"></div>

            <div class="relative z-10 flex flex-col justify-center items-center h-full text-center text-white px-4">
                <h1 class="text-3xl md:text-5xl font-bold">
                    Selamat Datang, di web DM kami!
                </h1>
                <p class="text-lg mt-2 max-w-2xl">
                    Semoga sehat selalu. Apa yang ingin Anda lakukan hari ini?
                </p>
            </div>
        </section>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            <a href="{{ route('pendahuluan') }}" class="block p-8 bg-white rounded-2xl shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <div class="flex items-center justify-center h-16 w-16 rounded-full bg-gray-200 mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800">Pendahuluan</h3>
                <p class="mt-2 text-slate-600">Cari tahu latar belakang website ini didirikan.</p>
            </a>

            <a href="{{ route('laporan-aktivitas.index') }}" class="block p-8 bg-white rounded-2xl shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <div class="flex items-center justify-center h-16 w-16 rounded-full bg-red-100 mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800">Laporan Aktivitas</h3>
                <p class="mt-2 text-slate-600">Catat dan lihat riwayat aktivitas fisik harian Anda.</p>
            </a>

            <a href="{{ route('laporan-gula-darah.index') }}" class="block p-8 bg-white rounded-2xl shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-100 mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800">Cek Gula Darah</h3>
                <p class="mt-2 text-slate-600">Input dan pantau hasil pemeriksaan kadar gula darah Anda.</p>
            </a>

            <a href="{{ route('video') }}" class="block p-8 bg-white rounded-2xl shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <div class="flex items-center justify-center h-16 w-16 rounded-full bg-green-100 mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800">Video Edukasi</h3>
                <p class="mt-2 text-slate-600">Tonton video informatif seputar pengelolaan diabetes.</p>
            </a>

            <a href="{{ route('artikel') }}" class="block p-8 bg-white rounded-2xl shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <div class="flex items-center justify-center h-16 w-16 rounded-full bg-yellow-100 mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800">Artikel & Wawasan</h3>
                <p class="mt-2 text-slate-600">Perluas pengetahuan Anda melalui artikel-artikel pilihan.</p>
            </a>

            <a href="{{ route('profile.edit') }}" class="block p-8 bg-white rounded-2xl shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <div class="flex items-center justify-center h-16 w-16 rounded-full bg-purple-100 mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800">Profil Saya</h3>
                <p class="mt-2 text-slate-600">Kelola informasi akun, tanggal lahir, dan kata sandi Anda.</p>
            </a>

        </div>

    </div>
</div>
@endsection
