@extends('layouts.app')

@section('content')
<div class="pt-20 pb-16">

    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold text-slate-800 mb-4">
                    Video Edukasi  <span class="text-[#A61819] text-4xl md:text-5xl font-bold text-slate-800 mb-4">Diabetes</span>
                </h1>
                <p class="text-lg text-slate-600 max-w-3xl mx-auto">
                    Kumpulan video informatif untuk membantu Anda memahami dan mengelola Diabetes Mellitus Tipe 2 dengan lebih baik.
                </p>
            </div>

            <div class="max-w-4xl mx-auto space-y-4" x-data="{ open: 1 }">
                @foreach ($videos as $index => $video)
                    <div class="rounded-xl border border-gray-200 overflow-hidden bg-[#E8E8DF] shadow-sm transition-all duration-300 hover:shadow-md">
                        <h2>

                            <button
                                type="button"
                                class="flex items-center justify-between w-full p-5 font-semibold text-left text-slate-700"
                                @click="open = (open === {{ $index + 1 }}) ? 0 : {{ $index + 1 }}"
                            >
                                <span class="text-lg">{{ $video['judul'] }}</span>
                                <svg
                                    class="w-6 h-6 shrink-0 transition-transform duration-300"
                                    :class="{ 'rotate-180': open === {{ $index + 1 }} }"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>

                        <div class="p-5 pt-0" x-show="open === {{ $index + 1 }}" x-collapse>
                            <div class="border-t border-gray-200 pt-5">
                                <div class="aspect-w-16 aspect-h-9">
                                    <iframe
                                        src="{{ $video['url'] }}"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen
                                        class="rounded-lg shadow-lg w-full h-full"
                                    ></iframe>
                                </div>
                                <p class="text-slate-600 mt-4">
                                    Video ini membahas tentang {{ strtolower($video['judul']) }}.
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

</div>
@endsection

@push('scripts')
{{-- Menambahkan script untuk transisi collapse yang lebih mulus --}}
<script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
@endpush
