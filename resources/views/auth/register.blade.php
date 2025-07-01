<x-guest-layout>
    {{-- Kartu Daftar Kustom Anda --}}
    <div class="w-full max-w-md p-12 space-y-8 bg-[#E7DFC6] backdrop-blur-lg rounded-2xl shadow-2xl border border-white">

        {{-- Logo --}}
        <div class="text-center">
            <a href="/">
                <h1 class="text-5xl font-extrabold text-[#A61819]">
                    SDT GM<span class="bg-[#A61819] text-white rounded-md px-2 py-1 text-4xl ml-1">Corner</span>
                </h1>
            </a>
        </div>

        {{-- Form Daftar --}}
        <form method="POST" action="{{ route('register') }}" class="space-y-6">
            @csrf

            <div>
                <label for="name" class="text-sm font-medium text-black block mb-2">Nama</label>
                <x-text-input
                    id="name"
                    class="block mt-1 w-full px-4 py-3 bg-white/10 border-gray-600 rounded-lg text-black placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition"
                    type="text"
                    name="name"
                    :value="old('name')"
                    placeholder="Masukkan Nama lengkap Anda"
                    required
                    autofocus
                    autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-400 text-sm" />
            </div>

           <div>
                <label for="tgl_lahir" class="text-sm font-medium text-black block mb-2">Tanggal Lahir</label>
                <x-text-input
                    id="tgl_lahir"
                    class="block mt-1 w-full px-4 py-3 bg-white/10 border-gray-600 rounded-lg text-black placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition"
                    type="date"
                    name="tgl_lahir"
                    :value="old('tgl_lahir')"
                    required
                    autocomplete="bday" />
                <x-input-error :messages="$errors->get('tgl_lahir')" class="mt-2 text-red-400 text-sm" />
            </div>


            <div class="mt-4">
                <label for="email" class="text-sm font-medium text-black block mb-2">Email</label>
                <x-text-input
                    id="email"
                    class="block mt-1 w-full px-4 py-3 bg-white/10 border-gray-600 rounded-lg text-black placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition"
                    type="email"
                    name="email"
                    :value="old('email')"
                    placeholder="Masukkan email Anda"
                    required
                    autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400 text-sm" />
            </div>

            <div class="mt-4">
                <label for="password" class="text-sm font-medium text-black block mb-2">Kata Sandi</label>
                <x-text-input
                    id="password"
                    class="block mt-1 w-full px-4 py-3 bg-white/10 border-gray-600 rounded-lg text-black placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition"
                    type="password"
                    name="password"
                    placeholder="Masukkan password Anda"
                    required
                    autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400 text-sm" />
            </div>

            <div class="mt-4">
                <label for="password_confirmation" class="text-sm font-medium text-black block mb-2">Konfirmasi Kata Sandi</label>
                <x-text-input
                    id="password_confirmation"
                    class="block mt-1 w-full px-4 py-3 bg-white/10 border-gray-600 rounded-lg text-black placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition"
                    type="password"
                    name="password_confirmation"
                    placeholder="Konfirmasi password Anda"
                    required
                    autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-400 text-sm" />
            </div>

            {{-- Tombol Daftar --}}
            <div class="mt-6">
                 <button type="submit" class="w-full text-center bg-[#A61819] hover:bg-yellow-500 text-white font-bold py-3 px-4 rounded-lg transition-colors duration-300">
                    Daftar
                </button>
            </div>
        </form>

        {{-- Link Login --}}
        <div class="text-center">
            <p class="text-sm text-black">
                Sudah punya akun?
                <a href="{{ route('login') }}" class="font-medium text-[#A61819] hover:underline">
                    Login
                </a>
            </p>
        </div>
    </div>
</x-guest-layout>
