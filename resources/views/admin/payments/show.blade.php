@extends('admin.layouts.app')

@section('content')
<h2 class="text-2xl font-bold text-fdc-dark mb-6">Payment Detail</h2>

<div class="bg-white p-6 rounded shadow">

    <p><strong>Booking:</strong> {{ $payment->booking->package->classroom->name ?? '-' }} — {{ $payment->booking->package->name ?? '-' }}</p>
    <p><strong>User:</strong> {{ $payment->booking->user->name ?? '-' }} ({{ $payment->booking->user->email ?? '-' }})</p>
    <p><strong>Amount:</strong> Rp {{ number_format($payment->amount,0,',','.') }}</p>
    <p><strong>Status:</strong>
        <span class="px-2 py-1 rounded text-white
            @if($payment->status == 'waiting') bg-yellow-500
            @elseif($payment->status == 'paid') bg-green-600
            @else bg-red-600
            @endif
        ">
            {{ ucfirst($payment->status) }}
        </span>
    </p>

    <hr class="my-4">

    <h3 class="font-semibold">Proof of Payment</h3>
    @if($payment->proof)
        <div class="mt-3 mb-6">
            <img src="{{ asset('storage/' . $payment->proof) }}" alt="proof" class="max-w-xs rounded shadow">
        </div>
    @else
        <p class="text-sm text-gray-600">No proof uploaded.</p>
    @endif

    <div class="flex gap-3 mt-6">
        @if($payment->status == 'waiting')
            <form action="{{ route('admin.payments.approve', $payment) }}" method="POST">
                @csrf
                <button class="px-4 py-2 bg-green-600 text-white rounded">Approve</button>
            </form>

            <form action="{{ route('admin.payments.reject', $payment) }}" method="POST">
                @csrf
                <button class="px-4 py-2 bg-red-600 text-white rounded">Reject</button>
            </form>
        @endif

        <a href="{{ route('admin.payments.index') }}" class="px-4 py-2 border rounded">Back</a>
    </div>
</div>
@endsection
