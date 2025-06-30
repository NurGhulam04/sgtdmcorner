@extends('layouts.app')

@section('content')

<div class="pt-16"> {{-- Padding untuk menghindari konten tertutup navbar --}}

    @if (session('success'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)" class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 fixed top-20 right-5 z-50 rounded-md shadow-lg" role="alert">
            <p class="font-bold">Sukses!</p>
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <section id="pengertian" class="py-20 bg-gradient-to-br from-indigo-50 to-purple-100">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-slate-800 mb-4 animate-fade-in-down">
                Memahami Diabetes Melitus Gestasional
            </h1>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto animate-fade-in-up">
                DMG adalah kondisi diabetes yang muncul selama kehamilan. Dengan pemantauan dan gaya hidup yang tepat, Anda dan bayi dapat tetap sehat. Mari kelola bersama!
            </p>
        </div>
    </section>

    <section id="laporan" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Laporan Harian Anda</h2>
                <p class="text-slate-500 mt-2">Masukkan nama Anda untuk melihat atau menambah data riwayat.</p>
            </div>

            <div class="max-w-2xl mx-auto">
                 <form action="{{ route('home') }}" method="GET" class="flex items-center bg-slate-100 p-2 rounded-full shadow-inner">
                    <input type="text" name="nama" placeholder="Ketik nama lengkap Anda..." class="w-full bg-transparent border-none focus:ring-0 text-lg px-4" value="{{ $searchName ?? '' }}" required>
                    <button type="submit" class="bg-indigo-600 text-white rounded-full px-6 py-3 font-semibold hover:bg-indigo-700 transition-colors duration-300 flex-shrink-0">
                        Cari Riwayat
                    </button>
                </form>
            </div>
        </div>

        @if(isset($searchName) && !empty($searchName))
        <div id="dashboard-pengguna" class="mt-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 bg-slate-100 rounded-2xl">
                <h3 class="text-2xl font-bold text-center mb-8">
                    Dashboard Riwayat untuk: <span class="text-indigo-600">{{ $searchName }}</span>
                </h3>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="space-y-6">
                        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                            <h4 class="text-xl font-bold mb-4">Tambah Aktivitas Baru</h4>
                            <form action="{{ route('activity.store') }}" method="POST" class="space-y-4">
                                @csrf
                                <input type="hidden" name="nama" value="{{ $searchName }}">
                                <div>
                                    <label for="aktivitas" class="block text-sm font-medium text-slate-700">Deskripsi Aktivitas</label>
                                    <textarea id="aktivitas" name="aktivitas" rows="3" class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required></textarea>
                                </div>
                                <div>
                                    <label for="tanggal" class="block text-sm font-medium text-slate-700">Tanggal</label>
                                    <input type="date" id="tanggal" name="tanggal" class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                                </div>
                                <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700">Simpan Aktivitas</button>
                            </form>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h5 class="text-lg font-bold mb-4">Riwayat Aktivitas</h5>
                            <div class="max-h-64 overflow-y-auto">
                                <ul class="divide-y divide-slate-200">
                                    @forelse ($activities as $activity)
                                    <li class="py-3"><p class="font-semibold text-slate-800">{{ $activity->aktivitas }}</p><p class="text-sm text-slate-500">{{ \Carbon\Carbon::parse($activity->tanggal)->isoFormat('dddd, D MMMM Y') }}</p></li>
                                    @empty
                                    <li class="py-3 text-center text-slate-500">Belum ada data aktivitas.</li>
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                            <h4 class="text-xl font-bold mb-4">Tambah Hasil Gula Darah</h4>
                            <form action="{{ route('bloodsugar.store') }}" method="POST" class="space-y-4">
                                @csrf
                                <input type="hidden" name="nama" value="{{ $searchName }}">
                                <div>
                                    <label for="kadar_gula" class="block text-sm font-medium text-slate-700">Kadar Gula Darah (mg/dL)</label>
                                    <input type="number" id="kadar_gula" name="kadar_gula" class="mt-1 block w-full rounded-md border-slate-300 shadow-sm" required>
                                </div>
                                <div>
                                    <label for="keterangan" class="block text-sm font-medium text-slate-700">Keterangan</label>
                                    <select id="keterangan" name="keterangan" class="mt-1 block w-full rounded-md border-slate-300 shadow-sm" required><option>Puasa</option><option>Sebelum Makan</option><option>2 Jam Setelah Makan</option><option>Lainnya</option></select>
                                </div>
                                <div>
                                    <label for="waktu_cek" class="block text-sm font-medium text-slate-700">Waktu Pengecekan</label>
                                    <input type="datetime-local" id="waktu_cek" name="waktu_cek" class="mt-1 block w-full rounded-md border-slate-300 shadow-sm" required>
                                </div>
                                <button type="submit" class="w-full bg-green-600 text-white py-2 px-4 rounded-md hover:bg-green-700">Simpan Hasil</button>
                            </form>
                        </div>
                         <div class="bg-white p-6 rounded-lg shadow-md">
                            <h5 class="text-lg font-bold mb-4">Riwayat Gula Darah</h5>
                            <div class="max-h-64 overflow-y-auto">
                                <ul class="divide-y divide-slate-200">
                                    @forelse ($bloodSugars as $report)
                                    <li class="py-3 flex justify-between items-center"><div><p class="font-semibold">{{ $report->keterangan }}</p><p class="text-sm text-slate-500">{{ \Carbon\Carbon::parse($report->waktu_cek)->isoFormat('D MMM Y, HH:mm') }}</p></div><span class="font-bold text-lg text-indigo-600">{{ $report->kadar_gula }} mg/dL</span></li>
                                    @empty
                                     <li class="py-3 text-center text-slate-500">Belum ada data gula darah.</li>
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </section>

    <section id="video" class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Video Penjelasan</h2>
                <p class="text-slate-500 mt-2">Tonton video singkat ini untuk pemahaman yang lebih baik.</p>
            </div>
            <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-xl overflow-hidden">
                <div class="aspect-w-16 aspect-h-9">
                    <iframe src="https://www.youtube.com/embed/n4a2-i2Le7c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="w-full h-full"></iframe>
                </div>
            </div>
        </div>
    </section>

    <section id="artikel" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Artikel & Wawasan</h2>
                <p class="text-slate-500 mt-2">Perluas pengetahuan Anda dengan artikel pilihan kami.</p>
            </div>

            <div x-data="{
                    activeSlide: 1,
                    slides: {{ $articles->count() > 0 ? $articles->count() : 1 }},
                    loop() {
                        if (this.activeSlide === this.slides) { this.activeSlide = 1 } else { this.activeSlide++ }
                    },
                    init() { setInterval(() => { this.loop() }, 5000) }
                }"
                class="relative max-w-4xl mx-auto">
                <div class="relative overflow-hidden rounded-lg shadow-lg h-80">
                    @forelse ($articles as $article)
                        <div x-show="activeSlide === {{ $loop->iteration }}" class="absolute inset-0 w-full h-full bg-white transition-opacity duration-1000 ease-in-out" x-transition:enter="opacity-0" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="opacity-100" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                            <div class="flex flex-col justify-center items-center h-full p-8 text-center">
                                <a href="{{ $article->sumber }}" target="_blank" rel="noopener noreferrer">
                                    <h3 class="text-2xl font-bold text-indigo-700 mb-2 transition-colors duration-300 hover:text-indigo-500 hover:underline">
                                        {{ $article->judul }}
                                    </h3>
                                </a>
                                <p class="text-slate-600 mb-4">{{ $article->konten }}</p>
                                <footer class="text-sm text-slate-400">Sumber: <cite>{{ $article->sumber }}</cite></footer>
                            </div>
                        </div>
                    @empty
                        <div class="flex flex-col justify-center items-center h-full p-8 text-center">
                             <h3 class="text-2xl font-bold text-indigo-700 mb-2">Tidak Ada Artikel</h3>
                             <p class="text-slate-600">Saat ini belum ada artikel yang tersedia.</p>
                        </div>
                    @endforelse
                </div>
                <div class="absolute bottom-5 left-0 right-0 flex justify-center space-x-2">
                    @foreach ($articles as $article)
                        <button @click="activeSlide = {{ $loop->iteration }}" :class="{ 'bg-indigo-600': activeSlide === {{ $loop->iteration }}, 'bg-slate-300': activeSlide !== {{ $loop->iteration }} }" class="h-2 w-2 rounded-full hover:bg-indigo-500 transition-colors"></button>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
