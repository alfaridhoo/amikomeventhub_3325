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
                class="w-full border rounded-2xl px-5 py-4">
        </div>

        <div class="mb-8">
            <label class="block mb-2 font-semibold">
                Logo Partner
            </label>

            <input type="file"
                name="logo"
                class="w-full border rounded-2xl px-5 py-4 bg-slate-50">
        </div>

        <button
            class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-4 rounded-2xl font-bold">
            Simpan
        </button>

    </form>
</div>

@endsection