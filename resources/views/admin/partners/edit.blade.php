@extends('layouts.admin')

@section('content')

<h1 class="text-4xl font-bold mb-8">Edit Partner</h1>

<div class="bg-white p-8 rounded-3xl shadow max-w-3xl">

    <form action="{{ route('admin.partners.update', $partner->id) }}"
        method="POST"
        enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-6">
            <label class="block mb-2 font-semibold">
                Nama Partner
            </label>

            <input type="text"
                name="name"
                value="{{ $partner->name }}"
                class="w-full border rounded-2xl px-5 py-4">
        </div>

        <div class="mb-6">
            <label class="block mb-2 font-semibold">
                Logo Baru (file atau URL)
            </label>

            <input type="file"
                name="logo"
                class="w-full border rounded-2xl px-5 py-4 bg-slate-50">

            <p class="text-sm text-slate-500 mt-2">Kosongkan jika ingin menggunakan URL gambar di bawah.</p>
        </div>

        <div class="mb-6">
            <label class="block mb-2 font-semibold">
                URL Logo Baru
            </label>

            <input type="text"
                name="logo_url"
                value="{{ old('logo_url') }}"
                placeholder="https://example.com/logo.png atau data:image/jpeg;base64,..."
                class="w-full border rounded-2xl px-5 py-4">

            <p class="text-sm text-slate-500 mt-2">Masukkan URL gambar jika tidak ingin upload file.</p>

            @error('logo_url')
                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
            @enderror
        </div>

        @if($partner->logo_url)
        <img src="{{ $partner->logo_url }}"
            alt="{{ $partner->name }}"
            class="w-32 mb-5 rounded-xl">
        @else
        <div class="w-32 h-40 bg-slate-200 flex items-center justify-center text-sm text-slate-500 rounded-xl mb-5">
            Tidak ada logo
        </div>
        @endif

        <button
            class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-4 rounded-2xl font-bold">
            Update
        </button>

    </form>
</div>

@endsection