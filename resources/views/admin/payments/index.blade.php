@extends('admin.layouts.app')

@section('content')
<h2 class="text-2xl font-bold text-fdc-dark mb-6">Payments</h2>

@if(session('success'))
    <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">{{ session('success') }}</div>
@endif

<div class="bg-white p-6 rounded shadow">
    <table class="w-full">
        <thead>
            <tr class="border-b text-left text-fdc-medium">
                <th class="py-3 px-2">Booking</th>
                <th class="py-3 px-2">User</th>
                <th class="py-3 px-2">Amount</th>
                <th class="py-3 px-2">Status</th>
                <th class="py-3 px-2">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($payments as $p)
            <tr class="border-b">
                <td class="py-3 px-2">
                    {{ $p->booking->package->classroom->name ?? '-' }} — {{ $p->booking->package->name ?? '-' }}
                </td>
                <td class="py-3 px-2">{{ $p->booking->user->name ?? '-' }}</td>
                <td class="py-3 px-2">Rp {{ number_format($p->amount,0,',','.') }}</td>
                <td class="py-3 px-2">
                    <span class="px-3 py-1 rounded text-white
                        @if($p->status == 'waiting') bg-yellow-500
                        @elseif($p->status == 'paid') bg-green-600
                        @else bg-red-600
                        @endif
                    ">
                        {{ ucfirst($p->status) }}
                    </span>
                </td>
                <td class="py-3 px-2">
                    <a href="{{ route('admin.payments.show', $p) }}" class="text-blue-600 hover:underline">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $payments->links() }}
    </div>
</div>
@endsection
