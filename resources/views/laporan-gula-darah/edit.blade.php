@extends('layouts.app')

@section('content')
<div class="pt-24 pb-16">

    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white p-8 rounded-2xl shadow-lg">
            <h1 class="text-2xl font-bold text-slate-800 mb-6">Edit Laporan Gula Darah</h1>

            <form action="{{ route('laporan-gula-darah.update', $laporan_gula_darah->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div>
                    <label for="hasil_gula_darah" class="block text-sm font-medium text-slate-700 mb-2">
                        Hasil Gula Darah (mg/dL)
                    </label>
                    <input type="number" name="hasil_gula_darah" id="hasil_gula_darah"
                           value="{{ old('hasil_gula_darah', $laporan_gula_darah->hasil_gula_darah) }}"
                           class="block w-full px-4 py-3 bg-slate-50 border-slate-300 rounded-lg" required>
                </div>

                <div>
                    <label for="tanggal_pemeriksaan" class="block text-sm font-medium text-slate-700 mb-2">
                        Tanggal Pemeriksaan
                    </label>
                    <input type="date" name="tanggal_pemeriksaan" id="tanggal_pemeriksaan"
                           value="{{ old('tanggal_pemeriksaan', $laporan_gula_darah->tanggal_pemeriksaan->format('Y-m-d')) }}"
                           class="block w-full px-4 py-3 bg-slate-50 border-slate-300 rounded-lg" required>
                </div>

                <div>
                    <label for="jam_pemeriksaan" class="block text-sm font-medium text-slate-700 mb-2">
                        Jam Pemeriksaan
                    </label>
                    <input type="time" name="jam_pemeriksaan" id="jam_pemeriksaan"
                           value="{{ old('jam_pemeriksaan', $laporan_gula_darah->jam_pemeriksaan) }}"
                           class="block w-full px-4 py-3 bg-slate-50 border-slate-300 rounded-lg" required>
                </div>

                <div class="flex items-center justify-end space-x-4 pt-4">
                    <a href="{{ route('laporan-gula-darah.index') }}" class="text-slate-600 hover:text-slate-900">
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

</div>
@endsection
