@extends('admin.layouts.app')

@section('content')
<h2 class="text-2xl font-bold text-fdc-dark mb-6">Edit Schedule</h2>

<form action="{{ route('admin.schedules.update', $schedule) }}" method="POST"
      class="bg-white p-6 shadow rounded">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label class="block mb-1 font-semibold">Package</label>
        <select name="package_id" class="w-full border p-2 rounded">
            @foreach($packages as $p)
                <option value="{{ $p->id }}" {{ $schedule->package_id == $p->id ? 'selected' : '' }}>
                    {{ $p->classroom->name }} — {{ $p->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <label class="block mb-1 font-semibold">Date</label>
        <input type="date" name="date" value="{{ $schedule->date }}"
               class="w-full border p-2 rounded">
    </div>

    <div class="grid grid-cols-2 gap-4 mb-4">
        <div>
            <label class="block mb-1 font-semibold">Start Time</label>
            <input type="time" name="start_time" value="{{ $schedule->start_time }}"
                   class="w-full border p-2 rounded">
        </div>

        <div>
            <label class="block mb-1 font-semibold">End Time</label>
            <input type="time" name="end_time" value="{{ $schedule->end_time }}"
                   class="w-full border p-2 rounded">
        </div>
    </div>

    <div class="mb-4">
        <label class="block mb-1 font-semibold">Available Seats</label>
        <input type="number" name="available_seats" value="{{ $schedule->available_seats }}"
               class="w-full border p-2 rounded">
    </div>

    <button class="bg-fdc-dark text-white px-4 py-2 rounded hover:bg-fdc-medium">
        Update
    </button>
</form>
@endsection
