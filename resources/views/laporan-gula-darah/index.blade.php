@extends('layouts.app')

@section('content')
<div class="pt-24 pb-16">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-slate-800">
                Laporan Pemeriksaan Gula Darah
            </h1>
            <p class="text-lg text-slate-600 mt-2">
                Catat dan pantau kadar gula darah Anda secara rutin.
            </p>
        </div>

        @if (session('success'))
            <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)"
                 class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-8 rounded-md shadow-md"
                 role="alert">
                <p class="font-bold">Sukses!</p>
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-1">
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 h-full">
                    <h2 class="text-2xl font-bold text-slate-800 mb-6">Input Hasil Baru</h2>
                    <form action="{{ route('laporan-gula-darah.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label for="hasil_gula_darah" class="block text-sm font-medium text-slate-700 mb-2">
                                Hasil Gula Darah (mg/dL)
                            </label>
                            <input type="number" name="hasil_gula_darah" id="hasil_gula_darah"
                                   class="block w-full px-4 py-3 bg-slate-50 border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#A61819] transition"
                                   placeholder="Contoh: 120" required>
                        </div>
                        <div>
                            <label for="tanggal_pemeriksaan" class="block text-sm font-medium text-slate-700 mb-2">
                                Tanggal Pemeriksaan
                            </label>
                            <input type="date" name="tanggal_pemeriksaan" id="tanggal_pemeriksaan"
                                   class="block w-full px-4 py-3 bg-slate-50 border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#A61819] transition"
                                   required>
                        </div>
                        <div>
                            <label for="jam_pemeriksaan" class="block text-sm font-medium text-slate-700 mb-2">
                                Jam Pemeriksaan
                            </label>
                            <input type="time" name="jam_pemeriksaan" id="jam_pemeriksaan"
                                   class="block w-full px-4 py-3 bg-slate-50 border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#A61819] transition"
                                   required>
                        </div>
                        <div>
                            <button type="submit"
                                    class="w-full text-center bg-[#A61819] hover:bg-yellow-500 text-white font-bold py-3 px-4 rounded-lg transition-colors duration-300 mt-4">
                                Simpan Hasil
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="lg:col-span-2">
                <div class="bg-white p-8 rounded-2xl shadow-lg h-full">
                    <h2 class="text-2xl font-bold text-slate-800 mb-6">Riwayat Pemeriksaan</h2>
                    <div class="overflow-x-auto">
                        @if($bloodSugarReports->isEmpty())
                            <div class="text-center py-10 px-6 bg-slate-50 rounded-lg">
                                <p class="text-slate-500">Anda belum memiliki riwayat pemeriksaan.</p>
                            </div>
                        @else
                            <table class="w-full divide-y divide-slate-200">
                                <thead class="bg-slate-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Tanggal</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Jam</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Hasil (mg/dL)</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Umur</th>
                                        <th scope="col" class="relative px-6 py-3"><span class="sr-only">Aksi</span></th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-slate-200">
                                    @foreach ($bloodSugarReports as $report)
                                        <tr class="hover:bg-slate-50 transition-colors">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">{{ $report->tanggal_pemeriksaan->format('d M Y') }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">{{ \Carbon\Carbon::parse($report->jam_pemeriksaan)->format('H:i') }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">{{ $report->hasil_gula_darah . ' mg/dL'}}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">
                                                {{ $report->umur_saat_gula_darah !== null ? $report->umur_saat_gula_darah . ' tahun' : '-' }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                                                <div class="flex justify-end items-center space-x-2">
                                                    <a href="{{ route('laporan-gula-darah.edit', $report->id) }}" class="text-green-600 hover:text-green-900">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                        </svg>
                                                    </a>
                                                    <form action="{{ route('laporan-gula-darah.destroy', $report->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus laporan ini?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-red-600 hover:text-red-900">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                            </svg>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="mt-6">
                                {{ $bloodSugarReports->links() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        @if($bloodSugarReports->count() > 1)
        <div class="mt-12 bg-white p-8 rounded-2xl shadow-lg">
            <h2 class="text-2xl font-bold text-slate-800 mb-4">Perkembangan Gula Darah Anda</h2>
                <div class="relative h-80 w-full">
                    <canvas id="bloodSugarChart"></canvas>
                </div>
        </div>
        @endif
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    @if(isset($chartLabels) && isset($chartData))
        const labels = @json($chartLabels);
        const data = {
            labels: labels,
            datasets: [{
                label: 'Kadar Gula Darah (mg/dL)',
                backgroundColor: 'rgba(166, 24, 25, 0.2)',
                borderColor: '#A61819',
                data: @json($chartData),
                fill: true,
                tension: 0.1
            }]
        };

        const config = {
            type: 'line',
            data: data,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };

        const myChart = new Chart(
            document.getElementById('bloodSugarChart'),
            config
        );
    @endif
</script>
@endpush
