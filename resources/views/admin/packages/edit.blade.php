@extends('admin.layouts.app')

@section('content')
<h2 class="text-2xl font-bold text-fdc-dark mb-6">Edit Package</h2>

<form action="{{ route('admin.packages.update', $package) }}" method="POST" class="bg-white p-6 shadow rounded">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label class="block mb-1 font-semibold">Class</label>
        <select name="classroom_id" class="w-full border p-2 rounded">
            @foreach($classes as $class)
                <option value="{{ $class->id }}" {{ $package->classroom_id == $class->id ? 'selected' : '' }}>
                    {{ $class->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <label class="block mb-1 font-semibold">Package Name</label>
        <input type="text" name="name" required value="{{ $package->name }}"
               class="w-full border p-2 rounded">
    </div>

    <div class="mb-4">
        <label class="block mb-1 font-semibold">Price</label>
        <input type="number" name="price" required value="{{ $package->price }}"
               class="w-full border p-2 rounded">
    </div>

    <div class="mb-4">
        <label class="block mb-1 font-semibold">Capacity</label>
        <input type="number" name="capacity" value="{{ $package->capacity }}"
               class="w-full border p-2 rounded">
    </div>

    <div class="mb-4">
        <label class="block mb-1 font-semibold">Description</label>
        <textarea name="description" class="w-full border p-2 rounded" rows="4">{{ $package->description }}</textarea>
    </div>

    <button class="bg-fdc-dark text-white px-4 py-2 rounded hover:bg-fdc-medium">
        Update
    </button>
</form>
@endsection
