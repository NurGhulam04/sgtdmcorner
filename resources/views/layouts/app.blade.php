<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGT DM Corner</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

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
    <nav x-data="{ open: false }" class="bg-[#E8E8DF] backdrop-blur-lg shadow-sm fixed top-0 left-0 right-0 z-50">
        <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-6">
            <div class="flex items-center justify-between h-20">

                <div class="flex-shrink-0">
                    <a href="{{ route('dashboard') }}">
                        <div class="text-base sm:text-lg font-bold text-[#A61819] leading-tight">
                            <span class="block whitespace-nowrap">Spiritual Group Therapy Diabetes</span>
                            <span class="block whitespace-nowrap">
                                Mellitus Corner
                                <span class="text-sm text-slate-600 font-large">(SGT DM Corner)</span>
                            </span>
                        </div>
                    </a>
                </div>

                <div class="hidden md:flex md:items-center">
                    <div class="flex items-baseline space-x-4">
                        <a href="{{ route('dashboard') }}" class="text-slate-600 hover:bg-[#A61819] hover:text-white px-1 py-2 rounded-md text-sm font-medium">Dashboard</a>
                        <a href="{{ route('pendahuluan') }}" class="text-slate-600 hover:bg-[#A61819] hover:text-white px-1 py-2 rounded-md text-sm font-medium">Pengertian</a>
                        <a href="{{ route('video') }}" class="text-slate-600 hover:bg-[#A61819] hover:text-white px-1 py-2 rounded-md text-sm font-medium">Video</a>
                        <a href="{{ route('laporan-aktivitas.index') }}" class="text-slate-600 hover:bg-[#A61819] hover:text-white px-1 py-2 rounded-md text-sm font-medium">Laporan Aktivitas</a>
                        <a href="{{ route('laporan-gula-darah.index') }}" class="text-slate-600 hover:bg-[#A61819] hover:text-white px-1 py-2 rounded-md text-sm font-medium">Laporan Gula Darah</a>
                        <a href="{{ route('artikel') }}" class="text-slate-600 hover:bg-[#A61819] hover:text-white px-1 py-2 rounded-md text-sm font-medium">Artikel</a>
                    </div>

                    @auth
                    <div x-data="{ dropdownOpen: false }" class="relative ml-5">
                        <div>
                            <button @click="dropdownOpen = !dropdownOpen" type="button" class="flex max-w-xs items-center rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                                <span class="sr-only">Buka menu pengguna</span>
                                <span class="inline-flex items-center justify-center h-8 w-8 rounded-full bg-gray-700">
                                    <span class="text-sm font-medium leading-none text-white">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
                                </span>
                            </button>
                        </div>
                        <div x-show="dropdownOpen" @click.away="dropdownOpen = false" x-transition class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu">
                            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem">Profil Anda</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="block px-4 py-2 text-sm text-gray-700" role="menuitem">Logout</a>
                            </form>
                        </div>
                    </div>
                    @endauth
                </div>

                <div class="-mr-2 flex md:hidden">
                    <button @click="open = !open" type="button" class="inline-flex items-center justify-center rounded-md bg-gray-100 p-2 text-gray-600 hover:bg-gray-200 hover:text-gray-800 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                        <span class="sr-only">Buka menu utama</span>
                        <svg :class="{'hidden': open, 'block': !open }" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /></svg>
                        <svg :class="{'hidden': !open, 'block': open }" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                    </button>
                </div>
            </div>
        </div>

        <div x-show="open" x-collapse class="md:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                <a href="{{ route('dashboard') }}" class="text-gray-700 hover:bg-[#A61819] hover:text-white block rounded-md px-3 py-2 text-base font-medium">Dashboard</a>
                <a href="{{ route('pendahuluan') }}" class="text-gray-700 hover:bg-[#A61819] hover:text-white block rounded-md px-3 py-2 text-base font-medium">Pengertian</a>
                <a href="{{ route('video') }}" class="text-gray-700 hover:bg-[#A61819] hover:text-white block rounded-md px-3 py-2 text-base font-medium">Video</a>
                <a href="{{ route('laporan-aktivitas.index') }}" class="text-gray-700 hover:bg-[#A61819] hover:text-white block rounded-md px-3 py-2 text-base font-medium">Laporan Aktivitas</a>
                <a href="{{ route('laporan-gula-darah.index') }}" class="text-gray-700 hover:bg-[#A61819] hover:text-white block rounded-md px-3 py-2 text-base font-medium">Laporan Gula Darah</a>
                <a href="{{ route('artikel') }}" class="text-gray-700 hover:bg-[#A61819] hover:text-white block rounded-md px-3 py-2 text-base font-medium">Artikel</a>
            </div>
            @auth
            <div class="border-t border-gray-200 pb-3 pt-4">
                <div class="flex items-center px-5">
                    <div class="flex-shrink-0">
                        <span class="inline-flex items-center justify-center h-10 w-10 rounded-full bg-gray-700">
                            <span class="text-md font-medium leading-none text-white">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
                        </span>
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium leading-none text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="text-sm font-medium leading-none text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                </div>
                <div class="mt-3 space-y-1 px-2">
                    <a href="{{ route('profile.edit') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-100">Profil Anda</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-100">Logout</a>
                    </form>
                </div>
            </div>
            @endauth
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
    {{-- Script untuk transisi collapse di menu mobile --}}
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>

</body>
</html>
