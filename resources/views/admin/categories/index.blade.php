@extends('layouts.admin')

@section('content')

<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold">Data Kategori</h1>

    <a href="{{ route('admin.categories.create') }}"
        class="bg-indigo-600 text-white px-5 py-3 rounded-xl">
        + Tambah
    </a>
</div>

<form method="GET" class="mb-6">
    <input type="text" name="search" placeholder="Cari kategori..."
        class="w-full border rounded-xl px-4 py-3">
</form>

@if(session('success'))
<div class="bg-green-100 text-green-700 p-4 rounded-xl mb-5">
    {{ session('success') }}
</div>
@endif

<div class="bg-white rounded-2xl shadow overflow-hidden">
    <table class="w-full">
        <thead class="bg-slate-100">
            <tr>
                <th class="p-4 text-left">ID</th>
                <th class="p-4 text-left">Nama</th>
                <th class="p-4 text-center">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse($categories as $category)
            <tr class="border-t">
                <td class="p-4">{{ $category->id }}</td>
                <td class="p-4">{{ $category->name }}</td>

                <td class="p-4 flex gap-3 justify-center">
                    <a href="{{ route('admin.categories.edit', $category->id) }}"
                        class="bg-yellow-400 px-4 py-2 rounded-lg text-white">
                        Edit
                    </a>

                    <form action="{{ route('admin.categories.destroy', $category->id) }}"
                        method="POST">
                        @csrf
                        @method('DELETE')

                        <button class="bg-red-500 px-4 py-2 rounded-lg text-white">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="p-5 text-center">
                    Data kosong
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection