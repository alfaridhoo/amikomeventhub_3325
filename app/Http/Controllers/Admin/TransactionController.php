<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
   public function index(Request $request)
{
    $search = $request->search;

    $transactions = Transaction::with('event')
        ->when($search, function ($query) use ($search) {
            $query->where('id', 'LIKE', "%$search%");
        })
        ->latest()
        ->paginate(20);

    return view('admin.transactions.index', compact('transactions'));
}
}
