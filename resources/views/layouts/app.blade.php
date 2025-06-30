<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGDM Corner</title>

    {{-- Impor CSS dan JS yang sudah di-compile oleh Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

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
<body class="bg-[#E9F1F7] text-slate-800">

    <nav class="bg-[#E8E8DF] backdrop-blur-lg shadow-sm fixed top-0 left-0 right-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex-shrink-0">
                    <a href="/dashboard" class="text-2xl font-bold text-[#A61819]">SGT DM Corner</a>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="/pendahuluan" class="text-slate-600 hover:bg-[#A61819] hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors duration-300">Pengertian</a>
                        <a href="/video" class="text-slate-600 hover:bg-[#A61819] hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors duration-300">Video</a>
                        <a href="/laporan" class="text-slate-600 hover:bg-[#A61819] hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors duration-300">Laporan</a>
                        <a href="/artikel" class="text-slate-600 hover:bg-[#A61819] hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors duration-300">Artikel</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-slate-800 text-white py-4 mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p>&copy; {{ date('Y') }} SGT DM Corner.</p>
        </div>
    </footer>
    @stack('scripts')

</body>
</html>
