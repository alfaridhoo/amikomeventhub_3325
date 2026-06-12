@extends('layouts.admin')
@section('content')
<div class="p-8">
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-3xl font-bold">Data Transaksi</h1>
            <p class="text-slate-500">Kelola riwayat pemesanan tiket di platform.</p>
        </div>
    </div>

    <div class="overflow-x-auto bg-white rounded-3xl shadow-sm border border-slate-200">
        <table class="min-w-full text-left">
            <thead class="bg-slate-50 border-b">
                <tr>
                    <th class="px-6 py-4 font-semibold text-slate-600">ID</th>
                    <th class="px-6 py-4 font-semibold text-slate-600">Order ID</th>
                    <th class="px-6 py-4 font-semibold text-slate-600">Event</th>
                    <th class="px-6 py-4 font-semibold text-slate-600">Nama Pelanggan</th>
                    <th class="px-6 py-4 font-semibold text-slate-600">Total</th>
                    <th class="px-6 py-4 font-semibold text-slate-600">Status</th>
                    <th class="px-6 py-4 font-semibold text-slate-600">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @forelse($transactions as $transaction)
                    <tr class="border-b last:border-b-0 hover:bg-slate-50">
                        <td class="px-6 py-5 text-sm text-slate-600">{{ $transaction->id }}</td>
                        <td class="px-6 py-5 text-sm text-slate-600">{{ $transaction->order_id }}</td>
                        <td class="px-6 py-5 text-sm text-slate-600">{{ $transaction->event->title ?? '-' }}</td>
                        <td class="px-6 py-5 text-sm text-slate-600">{{ $transaction->customer_name }}</td>
                        <td class="px-6 py-5 text-sm text-slate-600">Rp {{ number_format($transaction->total_price, 0, ',', '.') }}</td>
                        <td class="px-6 py-5 text-sm text-slate-600">{{ $transaction->status }}</td>
                        <td class="px-6 py-5 text-sm text-slate-600">{{ $transaction->created_at->format('d M Y') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td class="px-6 py-5 text-slate-600" colspan="7">Belum ada transaksi.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection






