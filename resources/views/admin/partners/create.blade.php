@extends('layouts.admin')

@section('content')

<h1 class="text-4xl font-bold mb-8">Tambah Partner</h1>

<div class="bg-white p-8 rounded-3xl shadow max-w-3xl">

    <form action="{{ route('admin.partners.store') }}"
        method="POST"
        enctype="multipart/form-data">

        @csrf

        <div class="mb-6">
            <label class="block mb-2 font-semibold">
                Nama Partner
            </label>

            <input type="text"
                name="name"
                value="{{ old('name') }}"
                class="w-full border rounded-2xl px-5 py-4">

            @error('name')
                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 font-semibold">
                Logo Partner (file atau URL)
            </label>

            <input type="file"
                name="logo"
                class="w-full border rounded-2xl px-5 py-4 bg-slate-50">

            <p class="text-sm text-slate-500 mt-2">Kosongkan jika ingin menggunakan URL gambar.</p>

            @error('logo')
                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-8">
            <label class="block mb-2 font-semibold">
                URL Logo Partner
            </label>

            <input type="text"
                name="logo_url"
                value="{{ old('logo_url') }}"
                placeholder="https://example.com/logo.png atau data:image/jpeg;base64,..."
                class="w-full border rounded-2xl px-5 py-4">

            @error('logo_url')
                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
            @enderror
        </div>

        <button
            class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-4 rounded-2xl font-bold">
            Simpan
        </button>

    </form>
</div>

@endsection