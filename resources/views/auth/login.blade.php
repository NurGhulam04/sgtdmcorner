<x-guest-layout>

    <div class="w-full max-w-md p-12 space-y-8 bg-[#E7DFC6] backdrop-blur-lg rounded-2xl shadow-2xl border border-white">

        {{-- Logo --}}
        <div class="text-center">
            <a href="/">
                <h1 class="text-5xl font-extrabold text-[#A61819] ">
                    SDT GM<span class="bg-[#A61819] self-auto text-white rounded-md px-2 py-1 text-4xl ml-1">Corner</span>
                </h1>
            </a>
        </div>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        {{-- Form Login --}}
        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <div>
                {{-- Menggunakan Bahasa Indonesia seperti desain Anda --}}
                <label for="email" class="text-sm font-medium text-black block mb-2">Email</label>
                <x-text-input
                    id="email"
                    class="block mt-1 w-full px-4 py-3 bg-black/10 border-gray-600 rounded-lg text-black placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition"
                    type="email"
                    name="email"
                    :value="old('email')"
                    placeholder="Masukkan email Anda"
                    required
                    autofocus
                    autocomplete="username"
                />
                {{-- Menampilkan error validasi untuk email --}}
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400 text-sm" />
            </div>

            <div class="mt-4">
                <label for="password" class="text-sm font-medium text-black block mb-2">Kata Sandi</label>
                <x-text-input
                    id="password"
                    class="block mt-1 w-full px-4 py-3 bg-black/10 border-gray-600 rounded-lg text-black placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition"
                    type="password"
                    name="password"
                    placeholder="Masukkan Password Anda"
                    required
                    autocomplete="current-password"
                />
                {{-- Menampilkan error validasi untuk password --}}
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400 text-sm" />
            </div>

            {{-- Tombol Masuk --}}
            <div>
                 <button type="submit" class="w-full text-center bg-[#A61819] hover:bg-yellow-500 text-white font-bold py-3 px-4 rounded-lg transition-colors duration-300 mt-4">
                    Masuk
                </button>
            </div>
        </form>

        {{-- Link Daftar (disesuaikan dengan gaya Anda) --}}
        <div class="text-center">
            <p class="text-sm text-black">
                Belum punya akun?
                {{-- Mengarahkan ke rute registrasi yang dibuat Breeze --}}
                <a href="{{ route('register') }}" class="font-medium text-[#A61819] hover:underline">
                    Daftar
                </a>
            </p>
        </div>
    </div>
</x-guest-layout>
