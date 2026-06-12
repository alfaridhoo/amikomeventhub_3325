<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Transaction;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function show(Event $event)
    {
        return view('event-detail', compact('event'));
    }

    public function checkout(Event $event)
    {
        return view('checkout', compact('event'));
    }

    public function processCheckout(Request $request, Event $event)
    {
        $data = $request->validate([
            'customer_name'  => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_phone' => 'required|string|max:20',
            'quantity'       => 'required|integer|min:1|max:' . $event->stock,
        ]);

        $transaction = Transaction::create([
            'event_id'      => $event->id,
            'order_id'      => 'TRX-' . strtoupper(uniqid()),
            'customer_name' => $data['customer_name'],
            'customer_email'=> $data['customer_email'],
            'customer_phone'=> $data['customer_phone'],
            'quantity'      => $data['quantity'],
            'total_price'   => $event->price * $data['quantity'],
            'status'        => 'Paid',
        ]);

        $event->decrement('stock', $data['quantity']);

        return redirect()->route('ticket', ['transaction' => $transaction->id]);
    }

    public function ticket(Transaction $transaction)
    {
        return view('ticket', compact('transaction'));
    }
}
