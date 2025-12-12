<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Classroom;
use App\Models\Schedule;
use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Summary numbers
        $totalClasses = Classroom::count();
        $totalSchedules = Schedule::count();
        $totalBookings = Booking::count();
        $pendingPayments = Payment::where('status', 'waiting')->count();

        // Low capacity schedules (threshold = 3)
        $lowCapacityThreshold = 3;
        $lowCapacity = Schedule::with('package.classroom')
            ->where('available_seats', '<=', $lowCapacityThreshold)
            ->orderBy('available_seats')
            ->limit(10)
            ->get();

        // Earnings per day (last 30 days) from payments that are 'paid' OR bookings that are confirmed (use payments)
        $startDate = Carbon::today()->subDays(29); // last 30 days including today
        $earningsRaw = Payment::select(
                DB::raw("DATE(created_at) as date"),
                DB::raw("SUM(amount) as total_amount")
            )
            ->where('status', 'paid')
            ->where('created_at', '>=', $startDate)
            ->groupBy(DB::raw("DATE(created_at)"))
            ->orderBy('date')
            ->get()
            ->keyBy('date');

        // Normalize earnings array (ensure every day exists)
        $dates = [];
        $earnings = [];
        for ($i = 0; $i < 30; $i++) {
            $d = $startDate->copy()->addDays($i)->toDateString();
            $dates[] = $d;
            $earnings[] = isset($earningsRaw[$d]) ? (int) $earningsRaw[$d]->total_amount : 0;
        }

        // Bookings per class (top classes)
        $bookingsPerClassRaw = Booking::select(
                'packages.classroom_id',
                'classes.name as class_name',
                DB::raw("COUNT(bookings.id) as bookings_count")
            )
            ->join('packages', 'bookings.package_id', '=', 'packages.id')
            ->join('classes', 'packages.classroom_id', '=', 'classes.id')
            ->groupBy('packages.classroom_id', 'classes.name')
            ->orderByDesc('bookings_count')
            ->get();

        $classLabels = $bookingsPerClassRaw->pluck('class_name')->toArray();
        $classCounts = $bookingsPerClassRaw->pluck('bookings_count')->map(fn($v) => (int)$v)->toArray();

        // Recent bookings
        $recentBookings = Booking::with(['user', 'package.classroom', 'schedule'])
            ->latest()
            ->limit(10)
            ->get();

        return view('admin.dashboard', compact(
            'totalClasses', 'totalSchedules', 'totalBookings', 'pendingPayments',
            'lowCapacity', 'dates', 'earnings', 'classLabels', 'classCounts', 'recentBookings'
        ));
    }
}
