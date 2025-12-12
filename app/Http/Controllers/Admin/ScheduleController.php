<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::with('package.classroom')
            ->latest()
            ->paginate(10);

        return view('admin.schedules.index', compact('schedules'));
    }

    public function create()
    {
        $packages = Package::with('classroom')->get();
        return view('admin.schedules.create', compact('packages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'package_id' => 'required|exists:packages,id',
            'date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'required',
            'available_seats' => 'required|integer|min:1',
        ]);

        Schedule::create($request->all());

        return redirect()
            ->route('admin.schedules.index')
            ->with('success', 'Schedule created successfully!');
    }

    public function edit(Schedule $schedule)
    {
        $packages = Package::with('classroom')->get();

        return view('admin.schedules.edit', compact('schedule', 'packages'));
    }

    public function update(Request $request, Schedule $schedule)
    {
        $request->validate([
            'package_id' => 'required|exists:packages,id',
            'date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'required',
            'available_seats' => 'required|integer|min:1',
        ]);

        $schedule->update($request->all());

        return redirect()
            ->route('admin.schedules.index')
            ->with('success', 'Schedule updated successfully!');
    }

    public function destroy(Schedule $schedule)
    {
        $schedule->delete();

        return redirect()
            ->route('admin.schedules.index')
            ->with('success', 'Schedule deleted successfully!');
    }
}
