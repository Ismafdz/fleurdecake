@extends('admin.layouts.app')

@section('content')

<h2 class="text-2xl font-bold text-fdc-dark mb-6">Booking Detail</h2>

<div class="bg-white p-6 shadow rounded">

    <h3 class="text-xl font-semibold mb-4 text-fdc-dark">User Info</h3>
    <p><strong>Name:</strong> {{ $booking->guest_name }}</p>
    <p><strong>Email:</strong> {{ $booking->guest_email }}</p>

    <hr class="my-4">

    <h3 class="text-xl font-semibold mb-4 text-fdc-dark">Booking Info</h3>

    <p><strong>Class:</strong> {{ $booking->package->classroom->name }}</p>
    <p><strong>Package:</strong> {{ $booking->package->name }}</p>
    <p><strong>Date:</strong> {{ $booking->date }}</p>

    <p><strong>Schedule:</strong>
        {{ $booking->schedule->start_time }} - {{ $booking->schedule->end_time }}
    </p>

    <p><strong>People:</strong> {{ $booking->num_people }}</p>

    <p><strong>Total Payment:</strong>
        Rp {{ number_format($booking->total_payment, 0, ',', '.') }}
    </p>

    <p><strong>Status:</strong>
        <span class="px-3 py-1 rounded text-white
            @if($booking->status == 'pending') bg-yellow-500
            @elseif($booking->status == 'confirmed') bg-green-600
            @else bg-red-600
            @endif
        ">
            {{ ucfirst($booking->status) }}
        </span>
    </p>

    <hr class="my-6">

    <h3 class="text-xl font-semibold mb-4 text-fdc-dark">Update Status</h3>

    <div class="flex gap-4">

        {{-- Confirm --}}
        <form action="{{ route('admin.bookings.status', [$booking, 'confirmed']) }}"
              method="POST">
            @csrf
            <button class="px-5 py-2 bg-green-600 text-white rounded hover:bg-green-700">
                Confirm
            </button>
        </form>

        {{-- Cancel --}}
        <form action="{{ route('admin.bookings.status', [$booking, 'cancelled']) }}"
              method="POST">
            @csrf
            <button class="px-5 py-2 bg-red-600 text-white rounded hover:bg-red-700">
                Cancel
            </button>
        </form>

        {{-- Pending --}}
        <form action="{{ route('admin.bookings.status', [$booking, 'pending']) }}"
              method="POST">
            @csrf
            <button class="px-5 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600">
                Pending
            </button>
        </form>

    </div>

</div>

@endsection
