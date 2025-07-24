@extends('layouts.app')

@section('content')
<div class="pt-24 pb-16 bg-slate-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-slate-800">
                Artikel & Jurnal Pilihan
            </h1>
            <p class="text-lg text-slate-600 mt-2">
                Perdalam pengetahuan Anda mengenai Diabetes Melitus dari sumber terpercaya.
            </p>
        </div>

        <div>
            @if($articles->isEmpty())
                <div class="text-center py-16 px-6 bg-white rounded-lg shadow-md">
                    <p class="text-slate-500">Belum ada artikel yang tersedia saat ini.</p>
                </div>
            @else
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    @foreach ($articles as $article)
                        <article class="bg-white p-6 rounded-2xl shadow-lg flex flex-col">
                            <header class="mb-4">
                                <h2 class="text-xl font-bold text-slate-800">{{ $article->title }}</h2>

                                @if ($article->doi)
                                    <p class="text-sm text-slate-500 mt-1">
                                        DOI: <a href="https://doi.org/{{ $article->doi }}" target="_blank" class="text-blue-600 hover:underline">{{ $article->doi }}</a>
                                    </p>
                                @endif
                            </header>

                            <div class="w-full h-[500px] border border-gray-200 rounded-lg overflow-hidden flex-grow">
                                <iframe src="{{ asset('storage/' . $article->file_path) }}" width="100%" height="100%">
                                    Maaf, browser Anda tidak mendukung PDF ter-embed.
                                </iframe>
                            </div>
                        </article>
                    @endforeach
                </div>
            @endif
        </div>

    </div>
</div>
@endsection
