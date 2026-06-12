@extends('layouts.app')
@section('content')
<main class="max-w-5xl mx-auto px-6 py-20">
    <div class="mb-12">
        <a href="{{ route('home') }}" class="text-indigo-600 font-bold flex items-center gap-2 mb-6">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            Kembali ke Beranda
        </a>
        <h1 class="text-4xl font-extrabold">Checkout</h1>
        <p class="text-slate-500 mt-2">Lengkapi data Anda untuk mendapatkan tiket.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2">
            <div class="bg-white rounded-3xl border border-slate-200 p-8 shadow-sm">
                <h3 class="text-xl font-bold mb-6">Data Pemesan</h3>
                <form action="{{ route('checkout.process', ['event' => $event]) }}" method="POST" class="space-y-6">
                    @csrf

                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">Nama Lengkap</label>
                        <input type="text" name="customer_name" value="{{ old('customer_name') }}"
                            class="w-full px-5 py-4 bg-white border-2 border-slate-100 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium"
                            required>
                        @error('customer_name')<p class="text-sm text-rose-500 mt-2">{{ $message }}</p>@enderror
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">Email Aktif</label>
                            <input type="email" name="customer_email" value="{{ old('customer_email') }}"
                                class="w-full px-5 py-4 bg-white border-2 border-slate-100 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium"
                                required>
                            @error('customer_email')<p class="text-sm text-rose-500 mt-2">{{ $message }}</p>@enderror
                            <p class="text-[10px] text-slate-400 mt-2 font-bold uppercase tracking-tighter">*E-Ticket akan dikirim ke email ini</p>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">No. WhatsApp</label>
                            <input type="tel" name="customer_phone" value="{{ old('customer_phone') }}"
                                class="w-full px-5 py-4 bg-white border-2 border-slate-100 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium"
                                required>
                            @error('customer_phone')<p class="text-sm text-rose-500 mt-2">{{ $message }}</p>@enderror
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">Jumlah Tiket</label>
                        <input type="number" name="quantity" value="{{ old('quantity', 1) }}" min="1" max="{{ $event->stock }}"
                            class="w-full px-5 py-4 bg-white border-2 border-slate-100 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium"
                            required>
                        @error('quantity')<p class="text-sm text-rose-500 mt-2">{{ $message }}</p>@enderror
                    </div>

                    <button type="submit"
                        class="w-full py-5 bg-indigo-600 text-white rounded-2xl font-black text-xl shadow-xl shadow-indigo-200 hover:bg-indigo-700 transition-all">
                        Bayar Sekarang
                    </button>
                </form>
            </div>
        </div>

        <div class="lg:col-span-1">
            <div class="bg-white rounded-3xl border border-slate-200 p-8 shadow-sm">
                <h3 class="text-xl font-bold mb-6 border-b pb-4">Ringkasan Event</h3>
                <div class="space-y-4">
                    <div class="text-lg font-bold">{{ $event->title }}</div>
                    <div class="text-slate-500">{{ \Carbon\Carbon::parse($event->date)->format('d F Y, H:i') }}</div>
                    <div class="text-slate-500">{{ $event->location }}</div>
                    <div class="text-xl font-black text-indigo-600">Rp {{ number_format($event->price, 0, ',', '.') }}</div>
                    <div class="text-sm text-slate-500">Sisa stok: {{ $event->stock }}</div>
                    <p class="text-slate-600">{{ \Illuminate\Support\Str::limit($event->description, 120) }}</p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection