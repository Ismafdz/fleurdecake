@extends('admin.layouts.app')

@section('content')
<h2 class="text-2xl font-bold text-fdc-dark mb-6">Add New Schedule</h2>

<form action="{{ route('admin.schedules.store') }}" method="POST"
      class="bg-white p-6 shadow rounded">
    @csrf

    <div class="mb-4">
        <label class="block mb-1 font-semibold">Package</label>
        <select name="package_id" class="w-full border p-2 rounded">
            @foreach($packages as $p)
                <option value="{{ $p->id }}">
                    {{ $p->classroom->name }} — {{ $p->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <label class="block mb-1 font-semibold">Date</label>
        <input type="date" name="date" class="w-full border p-2 rounded">
    </div>

    <div class="grid grid-cols-2 gap-4 mb-4">
        <div>
            <label class="block mb-1 font-semibold">Start Time</label>
            <input type="time" name="start_time" class="w-full border p-2 rounded">
        </div>

        <div>
            <label class="block mb-1 font-semibold">End Time</label>
            <input type="time" name="end_time" class="w-full border p-2 rounded">
        </div>
    </div>

    <div class="mb-4">
        <label class="block mb-1 font-semibold">Available Seats</label>
        <input type="number" name="available_seats" class="w-full border p-2 rounded">
    </div>

    <button class="bg-fdc-dark text-white px-4 py-2 rounded hover:bg-fdc-medium">
        Save
    </button>
</form>
@endsection
