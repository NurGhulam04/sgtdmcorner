@extends('layouts.app')

@section('content')
<div class="pt-16 pb-16">

    <section class="py-8">
        <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white p-8 rounded-2xl shadow-lg">
                <h1 class="text-2xl font-bold text-slate-800 mb-6">Edit Laporan Aktivitas</h1>

                <form action="{{ route('laporan-aktivitas.update', $laporan_aktivita->id) }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="tanggal" class="block text-sm font-medium text-slate-700 mb-2">
                            Tanggal Aktivitas
                        </label>
                        <input type="date" name="tanggal" id="tanggal"
                            value="{{ old('tanggal', $laporan_aktivita->tanggal->format('Y-m-d')) }}"
                            class="block w-full px-4 py-3 bg-slate-50 border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#A61819] transition"
                            required>
                    </div>
                    <div>
                        <label for="jenis_exercise" class="block text-sm font-medium text-slate-700 mb-2">
                            Jenis Olahraga / Aktivitas
                        </label>
                        <input type="text" name="jenis_exercise" id="jenis_exercise"
                            value="{{ old('jenis_exercise', $laporan_aktivita->jenis_exercise) }}"
                            class="block w-full px-4 py-3 bg-slate-50 border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#A61819] transition"
                            required>
                    </div>

                    <div>
                        <label for="durasi" class="block text-sm font-medium text-slate-700 mb-2">
                            Durasi
                        </label>
                        <input type="text" name="durasi" id="durasi"
                            value="{{ old('durasi', $laporan_aktivita->durasi) }}"
                            class="block w-full px-4 py-3 bg-slate-50 border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#A61819] transition"
                            required>
                    </div>

                    <div class="flex items-center justify-end space-x-4 pt-4">
                        <a href="{{ route('laporan-aktivitas.index') }}" class="text-slate-600 hover:text-slate-900">
                            Batal
                        </a>
                        <button type="submit"
                                class="text-center bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-lg transition-colors duration-300">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
