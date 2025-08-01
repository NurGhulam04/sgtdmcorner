@extends('layouts.app')

@section('content')
<div class="pt-24 pb-16"> {{-- Memberi padding dari navbar --}}
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        {{-- Kartu untuk Update Informasi Profil --}}
        <div class="p-4 sm:p-8 bg-white shadow-lg rounded-2xl">
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        {{-- Kartu untuk Update Password --}}
        <div class="p-4 sm:p-8 bg-white shadow-lg rounded-2xl">
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        {{-- Kartu untuk Hapus Akun --}}
        <div class="p-4 sm:p-8 bg-white shadow-lg rounded-2xl">
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</div>
@endsection
