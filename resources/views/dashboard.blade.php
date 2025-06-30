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
            </div>

        </div>

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
                <p class="text-slate-500 mt-2">Perluas pengetahuan Anda dengan artikel kami.</p>
            </div>


        </div>
    </section>

</div>
@endsection
