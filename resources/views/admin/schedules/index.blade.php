@extends('admin.layouts.app')

@section('content')
<div class="mb-6">
    <div class="flex justify-between items-center">
        <h2 class="text-2xl font-bold text-fdc-dark">Schedules</h2>

        <a href="{{ route('admin.schedules.create') }}"
           class="bg-fdc-dark text-white px-4 py-2 rounded hover:bg-fdc-medium">
            + Add Schedule
        </a>
    </div>
</div>

@if(session('success'))
    <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
        {{ session('success') }}
    </div>
@endif

<div class="bg-white shadow rounded p-4">
    <table class="min-w-full">
        <thead>
            <tr class="border-b text-left text-fdc-medium">
                <th class="py-3 px-2">Class</th>
                <th class="py-3 px-2">Package</th>
                <th class="py-3 px-2">Date</th>
                <th class="py-3 px-2">Time</th>
                <th class="py-3 px-2">Seats</th>
                <th class="py-3 px-2">Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($schedules as $s)
                <tr class="border-b">
                    <td class="py-3 px-2 font-semibold">
                        {{ $s->package->classroom->name }}
                    </td>
                    <td class="py-3 px-2">{{ $s->package->name }}</td>
                    <td class="py-3 px-2">{{ $s->date }}</td>
                    <td class="py-3 px-2">
                        {{ $s->start_time }} - {{ $s->end_time }}
                    </td>
                    <td class="py-3 px-2">{{ $s->available_seats }}</td>

                    <td class="py-3 px-2 flex gap-2">

                        <a href="{{ route('admin.schedules.edit', $s) }}"
                           class="text-blue-600 hover:underline">Edit</a>

                        <form action="{{ route('admin.schedules.destroy', $s) }}"
                              method="POST"
                              onsubmit="return confirm('Delete schedule?')">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600 hover:underline">Delete</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $schedules->links() }}
    </div>
</div>
@endsection
