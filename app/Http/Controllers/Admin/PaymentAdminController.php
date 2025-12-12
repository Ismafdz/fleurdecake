<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentAdminController extends Controller
{
    public function index()
    {
        $payments = Payment::with(['booking.package.classroom', 'booking.user'])
            ->latest()
            ->paginate(12);

        return view('admin.payments.index', compact('payments'));
    }

    public function show(Payment $payment)
    {
        $payment->load(['booking.package.classroom', 'booking.user', 'booking.schedule']);
        return view('admin.payments.show', compact('payment'));
    }

    public function approve(Payment $payment)
    {
        DB::transaction(function () use ($payment) {
            // set payment paid
            $payment->status = 'paid';
            $payment->save();

            // set booking confirmed if pending
            $booking = $payment->booking;
            if ($booking->status !== 'confirmed') {
                $booking->status = 'confirmed';
                $booking->save();
            }
        });

        return back()->with('success', 'Payment approved, booking confirmed.');
    }

    public function reject(Payment $payment)
    {
        DB::transaction(function () use ($payment) {
            // mark payment failed
            $payment->status = 'failed';
            $payment->save();

            // restore seats if booking was deducted already and booking is not cancelled
            $booking = $payment->booking;
            if ($booking->status !== 'cancelled') {
                // restore seat to schedule (use lockForUpdate)
                $schedule = $booking->schedule()->lockForUpdate()->first();
                if ($schedule) {
                    $schedule->available_seats += $booking->num_people;
                    $schedule->save();
                }

                $booking->status = 'cancelled';
                $booking->save();
            }
        });

        return back()->with('success', 'Payment rejected and booking cancelled.');
    }
}
