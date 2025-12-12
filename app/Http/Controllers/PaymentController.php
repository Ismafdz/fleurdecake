<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function form(Booking $booking)
    {
        // ensure current user owns the booking (or is admin)
        if (auth()->id() !== $booking->user_id) {
            abort(403);
        }

        return view('payments.form', compact('booking'));
    }

    public function store(Request $request, Booking $booking)
    {
        if (auth()->id() !== $booking->user_id) {
            abort(403);
        }

        $request->validate([
            'amount' => 'required|integer|min:0',
            'proof' => 'required|image|max:2048' // max 2MB
        ]);

        // store file
        $path = $request->file('proof')->store('payments', 'public');

        // create payment record
        $payment = Payment::create([
            'booking_id' => $booking->id,
            'amount' => $request->amount,
            'method' => 'transfer',
            'proof' => $path,
            'status' => 'waiting',
        ]);

        return redirect()->route('payment.form', $booking)->with('success', 'Proof uploaded. Please wait for admin confirmation.');
    }
}
