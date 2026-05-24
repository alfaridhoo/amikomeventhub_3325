@extends('layouts.admin')

@section('content')

<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold">Data Partner</h1>

    <a href="{{ route('admin.partners.create') }}"
        class="bg-indigo-600 text-white px-5 py-3 rounded-xl">
        + Tambah
    </a>
</div>

<form method="GET" class="mb-6">
    <input type="text" name="search"
        placeholder="Cari partner..."
        class="w-full border rounded-xl px-4 py-3">
</form>

<div class="bg-white rounded-2xl shadow overflow-hidden">
    <table class="w-full">
        <thead class="bg-slate-100">
            <tr>
                <th class="p-4">Logo</th>
                <th class="p-4">Nama</th>
                <th class="p-4">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($partners as $partner)
            <tr class="border-t">
                <td class="p-4">
                   <img src="{{ asset('storage/' . $partner->logo) }}"
                    class="w-20 h-20 object-contain">
                </td>

                <td class="p-4">
                    {{ $partner->name }}
                </td>

                <td class="p-4 flex gap-3">
                    <a href="{{ route('admin.partners.edit', $partner->id) }}"
                        class="bg-yellow-400 px-4 py-2 rounded-lg text-white">
                        Edit
                    </a>

                    <form action="{{ route('admin.partners.destroy', $partner->id) }}"
                        method="POST">
                        @csrf
                        @method('DELETE')

                        <button class="bg-red-500 px-4 py-2 rounded-lg text-white">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection