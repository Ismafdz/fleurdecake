@extends('admin.layouts.app')

@section('content')

<h2 class="text-2xl font-bold text-fdc-dark mb-6">Bookings</h2>

@if(session('success'))
    <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
        {{ session('success') }}
    </div>
@endif

<div class="bg-white p-6 rounded shadow-md">
    <table class="w-full">
        <thead>
            <tr class="border-b text-fdc-medium text-left">
                <th class="py-3 px-2">User</th>
                <th class="py-3 px-2">Class</th>
                <th class="py-3 px-2">Package</th>
                <th class="py-3 px-2">Date</th>
                <th class="py-3 px-2">People</th>
                <th class="py-3 px-2">Total</th>
                <th class="py-3 px-2">Status</th>
                <th class="py-3 px-2">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($bookings as $b)
            <tr class="border-b">
                <td class="py-3 px-2">{{ $b->user->name }}</td>

                <td class="py-3 px-2">
                    {{ $b->package->classroom->name }}
                </td>

                <td class="py-3 px-2">
                    {{ $b->package->name }}
                </td>

                <td class="py-3 px-2">{{ $b->date }}</td>

                <td class="py-3 px-2">{{ $b->num_people }}</td>

                <td class="py-3 px-2">
                    Rp {{ number_format($b->total_payment, 0, ',', '.') }}
                </td>

                <td class="py-3 px-2">
                    <span class="
                        px-3 py-1 rounded text-white
                        @if($b->status == 'pending') bg-yellow-500
                        @elseif($b->status == 'confirmed') bg-green-600
                        @else bg-red-600
                        @endif
                    ">
                        {{ ucfirst($b->status) }}
                    </span>
                </td>

                <td class="py-3 px-2">
                    <a href="{{ route('admin.bookings.show', $b) }}"
                       class="text-blue-600 hover:underline">
                        Detail
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $bookings->links() }}
    </div>
</div>

@endsection
