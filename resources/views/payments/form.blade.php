@extends('layouts.app')

@section('content')
<div class="pt-24 pb-16 flex items-center justify-center bg-fleur-light">
    <div class="w-full max-w-lg px-8 py-10 bg-white rounded-2xl shadow-md">
        <h2 class="text-2xl font-bold mb-4">Upload Payment Proof</h2>

        @if(session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
                <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-4 text-sm text-gray-600">
            Booking: <strong>{{ $booking->package->name }} — {{ $booking->date }}</strong>
        </div>

        <form action="{{ route('payment.store', $booking) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label class="block mb-1 font-semibold">Amount (Rp)</label>
                <input type="number" name="amount" value="{{ $booking->total_payment }}" required
                       class="w-full border p-2 rounded" />
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-semibold">Upload Proof (Image, max 2MB)</label>
                <input type="file" name="proof" accept="image/*" required />
            </div>

            <div class="flex gap-3">
                <button class="px-4 py-2 bg-fdc-dark text-white rounded">Upload</button>
                <a href="{{ route('dashboard') }}" class="px-4 py-2 border rounded">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection
