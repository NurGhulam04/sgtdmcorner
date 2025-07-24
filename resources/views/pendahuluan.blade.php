@extends('layouts.app')

@section('content')
<div class="pt-16"> {{-- Padding untuk menghindari konten tertutup navbar --}}

    <section class="py-20 ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                 <h1 class="text-4xl md:text-5xl font-bold text-slate-800 mb-4">
                    Selamat Datang di SGT DM Corner
                </h1>
                <p class="text-lg text-slate-600 max-w-3xl mx-auto">
                    Aplikasi pendamping Anda untuk mengelola Diabetes Melitus melalui pendekatan Spiritual Group Therapy.
                </p>
            </div>

            <div class="max-w-4xl mx-auto">
                <img src="{{ asset('images/dbts2.png') }}" alt="Header Pendahuluan" class="rounded-lg shadow-lg mb-12">
            </div>
        </div>
    </section>

    <section id="tentang-aplikasi" class="py-16 bg-yellow-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
            <h2 class="text-3xl font-bold text-slate-800 text-center">Apa itu SGT DM Corner?</h2>
            <p class="text-slate-700 leading-relaxed text-center max-w-3xl mx-auto">
                <strong>Spiritual Group Therapy Diabetes Mellitus Corner</strong> <strong>(SGT DM Corner)</strong> Adalah aplikasi web yang dirancang sebagai sarana edukasi dan pemantauan mandiri bagi para penderita Diabetes Melitus (DM) Tipe 2, khususnya lansia. Tujuannya adalah untuk meningkatkan kualitas hidup melalui pengelolaan kesehatan yang holistik, mencakup aspek fisik, psikologis, dan spiritual.
            </p>
            <p class="text-slate-700 leading-relaxed text-center max-w-3xl mx-auto">
                Anda dapat menggunakan aplikasi web ini untuk belajar memahami dan mengelola Diabetes Mellitus Tipe 2 melalui video dan artikel kami, Anda juga dapat catat dan pantau kadar gula darah dan aktivitas fisik Anda.
            </p>

        </div>
    </section>

    <section id="tantangan" class="py-16 bg-slate-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
            <h2 class="text-3xl font-bold text-slate-800 text-center">Tantangan Global dan Nasional</h2>
            <p class="text-slate-700 leading-relaxed">
                Diabetes Mellitus (DM) Tipe 2 telah menjadi salah satu tantangan kesehatan global yang paling signifikan pada abad ini. Penyakit ini tidak hanya memberikan tekanan besar pada sistem kesehatan, tetapi juga secara drastis menurunkan kualitas hidup individu yang terdampak.
            </p>
            <p class="text-slate-700 leading-relaxed">
                Secara global, lebih dari setengah miliar orang hidup dengan diabetes, dan angka ini diproyeksikan akan terus meningkat di masa mendatang. Indonesia pun menghadapi tren yang serupa. Survei kesehatan nasional mencatat bahwa prevalensi diabetes pada penduduk berusia 15 tahun ke atas telah mencapai 8,5%, sebuah angka yang menunjukkan peningkatan signifikan dibandingkan tahun-tahun sebelumnya.
            </p>
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-md" role="alert">
                <p class="font-bold">Dampak Psikologis dan Spiritual</p>
                <p>
                    Bagi lansia, penyakit ini membawa tekanan psikologis dan spiritual yang berat. Mereka sering kali menghadapi stres, depresi, dan kecemasan akibat tuntutan pengelolaan penyakit yang kompleks dan berkelanjutan. Kondisi ini dapat memperburuk pengendalian kadar gula darah dan meningkatkan risiko komplikasi seperti penyakit jantung, gagal ginjal, dan neuropati.
                </p>
            </div>
        </div>
    </section>

    <section id="kondisi-lokal" class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-slate-800 text-center mb-8">Kondisi di Posyandu Lansia Mahatma, Surabaya</h2>
            <p class="text-center text-slate-600 mb-12">Dari observasi langsung dan wawancara, teridentifikasi beberapa permasalahan utama yang dihadapi oleh 63 lansia penderita DM Tipe 2 di wilayah ini:</p>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-[#E8E8DF] border-r-4 border-b-4 border-[#878787] p-6 rounded-lg shadow-md">
                    <h3 class="font-bold text-xl mb-2">1. Kurangnya Pengetahuan dan Kesadaran</h3>
                    <p class="text-slate-600">Pemahaman masyarakat mengenai pencegahan dan pengelolaan DM masih sangat terbatas, terutama terkait pentingnya gaya hidup sehat serta aspek psikologis dan spiritual.</p>
                </div>
                <div class="bg-[#E8E8DF] border-r-4 border-b-4 border-[#878787] p-6 rounded-lg shadow-md">
                    <h3 class="font-bold text-xl mb-2">2. Aksesibilitas Layanan Terbatas</h3>
                    <p class="text-slate-600">Jadwal Posyandu Lansia yang tidak konsisten telah menurunkan motivasi para lansia untuk memanfaatkan layanan kesehatan secara rutin.</p>
                </div>
                <div class="bg-[#E8E8DF] border-r-4 border-b-4 border-[#878787] p-6 rounded-lg shadow-md">
                    <h3 class="font-bold text-xl mb-2">3. Dukungan Psikososial Rendah</h3>
                    <p class="text-slate-600">Dukungan dari sesama penderita dan kader masih sangat minim, menyebabkan banyak lansia merasa terisolasi dan mengalami penurunan kualitas hidup.</p>
                </div>
                <div class="bg-[#E8E8DF] border-r-4 border-b-4 border-[#878787] p-6 rounded-lg shadow-md">
                    <h3 class="font-bold text-xl mb-2">4. Potensi Kader Belum Optimal</h3>
                    <p class="text-slate-600">Kader kesehatan memerlukan pelatihan lebih lanjut untuk dapat memberikan edukasi dan bimbingan spiritual melalui terapi kelompok yang terstruktur.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="solusi" class="py-16 bg-gradient-to-br from-indigo-50 to-purple-100">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-slate-800 mb-4">Solusi Inovatif: Spiritual Group Therapy (SGT)</h2>
            <p class="text-lg text-slate-600 mb-8">
                Sebagai solusi holistik, dirancanglah program SGT, sebuah pendekatan berbasis komunitas yang mengintegrasikan dukungan psikologis dan spiritual untuk meningkatkan kemandirian lansia, memperkuat kesehatan psikologis, dan kesejahteraan spiritual mereka.
            </p>

            <h3 class="text-2xl font-semibold text-slate-700 mb-4">Komponen Utama SGT:</h3>
            <ul class="list-disc list-inside text-left max-w-md mx-auto space-y-2 text-slate-600">
                <li>Diskusi kelompok yang terstruktur dan mendalam.</li>
                <li>Latihan <i>mindfulness</i> untuk menenangkan pikiran.</li>
                <li>Edukasi kesehatan yang relevan mengenai manajemen DM.</li>
            </ul>
        </div>
    </section>

    <section id="kolaborasi" class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
             <h2 class="text-3xl font-bold text-slate-800 text-center mb-8">Keterlibatan Perguruan Tinggi dan Mahasiswa</h2>
             <p class="text-center text-slate-600 mb-8">
                Program ini melibatkan partisipasi aktif mahasiswa dari Program Studi S1 Keperawatan Universitas Nahdlatul Ulama Surabaya sebagai bagian dari implementasi program <strong>Merdeka Belajar Kampus Merdeka (MBKM)</strong>.
             </p>
             <div class="bg-green-100 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md" role="alert">
                <div class="flex">
                    <div>
                        <p class="font-bold">Kontribusi Program</p>
                        <p class="text-sm">Kegiatan ini selaras dengan pencapaian Indikator Kinerja Utama (IKU) 2, 5, dan 6, serta terintegrasi dengan mata kuliah Kuliah Kerja Nyata (3 SKS) dan Keperawatan Komunitas Pesantren (3 SKS).</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
