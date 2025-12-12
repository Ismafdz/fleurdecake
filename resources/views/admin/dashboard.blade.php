@extends('admin.layouts.app')

@section('content')
<div>
    <h2 class="text-2xl font-bold text-fdc-dark mb-4">
        Welcome, Fleur de Cake Admin!
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        {{-- Card example --}}
        <div class="bg-white p-6 rounded-lg shadow border-l-4 border-fdc-gold">
            <p class="text-fdc-medium font-semibold">Total Classes</p>
            <p class="text-3xl font-bold text-fdc-dark mt-2">0</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow border-l-4 border-fdc-gold">
            <p class="text-fdc-medium font-semibold">Total Bookings</p>
            <p class="text-3xl font-bold text-fdc-dark mt-2">0</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow border-l-4 border-fdc-gold">
            <p class="text-fdc-medium font-semibold">Pending Payments</p>
            <p class="text-3xl font-bold text-fdc-dark mt-2">0</p>
        </div>
    </div>
</div>
@endsection
