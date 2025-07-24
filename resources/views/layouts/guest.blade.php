<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>SGT DM Corner</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


        @vite(['resources/css/app.css', 'resources/js/app.js'])
        {{-- untuk di hosting
        @php
            $isProduction = app()->environment('production');
            $manifestPath = $isProduction ? '../public_html/build/manifest.json' : public_path('build/manifest.json');
        @endphp

        @if ($isProduction && file_exists($manifestPath))
        @php
            $manifest = json_decode(file_get_contents($manifestPath), true);
        @endphp
            <link rel="stylesheet" href="{{ config('app.url') }}/build/{{ $manifest['resources/css/app.css']['file'] }}">
            <script type="module" src="{{ config('app.url') }}/build/{{ $manifest['resources/js/app.js']['file'] }}"></script>
        @else
            @viteReactRefresh
            @vite(['resources/js/app.js', 'resources/css/app.css'])
          @endif--}}

        {{-- Google Fonts untuk tampilan yang lebih menarik --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Poppins', sans-serif;
            }
        </style>
    </head>
    <body class="bg-[#E8E8DF] flex items-center justify-center min-h-screen">
        <div>
            {{ $slot }}
        </div>
    </body>
</html>
