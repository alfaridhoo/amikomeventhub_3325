@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-6">Edit Kategori</h1>

<div class="bg-white p-6 rounded-2xl shadow">
    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-5">
            <label>Nama Kategori</label>

            <input type="text"
                name="name"
                value="{{ $category->name }}"
                class="w-full border rounded-xl px-4 py-3 mt-2">
        </div>

        <button class="bg-indigo-600 text-white px-6 py-3 rounded-xl">
            Update
        </button>
    </form>
</div>

@endsection