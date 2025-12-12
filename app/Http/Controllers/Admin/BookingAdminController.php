<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;

class BookingAdminController extends Controller
{
    public function index()
    {
        $bookings = Booking::with(['user', 'package.classroom', 'schedule'])
            ->latest()
            ->paginate(10);

        return view('admin.bookings.index', compact('bookings'));
    }

    public function show(Booking $booking)
    {
        $booking->load(['user', 'package.classroom', 'schedule']);
        return view('admin.bookings.show', compact('booking'));
    }

    public function updateStatus(Booking $booking, $status)
    {
        $booking->update(['status' => $status]);
        return back()->with('success', 'Booking status updated.');
    }
}
