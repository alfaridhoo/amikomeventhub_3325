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
                Logo Baru
            </label>

            <input type="file"
                name="logo"
                class="w-full border rounded-2xl px-5 py-4 bg-slate-50">
        </div>

        @if($partner->logo)
        <img src="{{ asset('storage/' . $partner->logo) }}"
            class="w-32 mb-5 rounded-xl">
        @endif

        <button
            class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-4 rounded-2xl font-bold">
            Update
        </button>

    </form>
</div>

@endsection