<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Package;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BookingController extends Controller
{
    // Menampilkan form (GET /package/{slug}/book)
    public function form($slug)
    {
        return view('booking-form', ['slug' => $slug]);
    }

    // Menangani booking (POST /booking/confirm)
    public function confirm(Request $request)
    {
        // Validasi
        $request->validate([
            'package_class' => 'required',
            'visit_date' => 'required|date',
            'num_people' => 'required|integer|min:1',
            'guest_name' => 'required|string',
            'guest_email' => 'required|email',
        ]);

        // Cari Package berdasarkan nama (slug)
        $packageName = Str::of($request->package_class)->replace('-', ' ');
        $package = Package::where('name', 'LIKE', '%' . $packageName . '%')->first();

        if (!$package) {
            return back()->withErrors(['msg' => 'Package tidak ditemukan.']);
        }

        // Cari Schedule
        $schedule = Schedule::where('package_id', $package->id)
            ->where('date', $request->visit_date)
            ->first();

        if (!$schedule) {
            return back()->withErrors(['msg' => 'Tidak ada jadwal untuk tanggal tersebut.']);
        }

        // Cek seat
        if ($schedule->available_seats < $request->num_people) {
            return back()->withErrors(['msg' => 'Seat tidak mencukupi.']);
        }

        // Kurangi seat
        $schedule->available_seats -= $request->num_people;
        $schedule->save();

        // Total payment (remove format Rp.)
        $total = (int) preg_replace('/[^0-9]/', '', $request->total_payment);

        // Simpan booking
        $booking = Booking::create([
            'user_id' => auth()->id(),
            'package_id' => $package->id,
            'schedule_id' => $schedule->id,
            'date' => $request->visit_date,
            'num_people' => $request->num_people,
            'total_payment' => $total,
            'guest_name' => $request->guest_name,
            'guest_email' => $request->guest_email,
            'status' => 'pending',
        ]);

        return view('booking-confirmation', [
            'booking' => $booking,
            'package' => $package->name,
            'people' => $booking->num_people,
            'date' => $booking->date,
            'total' => $total,
        ]);
    }
}
