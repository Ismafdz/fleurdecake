@extends('admin.layouts.app')

@section('content')
<h2 class="text-2xl font-bold text-fdc-dark mb-6">Add New Class</h2>

<form action="{{ route('admin.classes.store') }}" method="POST" class="bg-white p-6 shadow rounded">
    @csrf

    <div class="mb-4">
        <label class="block mb-1 font-semibold">Class Name</label>
        <input type="text" name="name" required
               class="w-full border p-2 rounded"
               placeholder="e.g. Basic Baking">
    </div>

    <div class="mb-4">
        <label class="block mb-1 font-semibold">Description</label>
        <textarea name="description" class="w-full border p-2 rounded" rows="4"
                  placeholder="Describe your class..."></textarea>
    </div>

    <button class="bg-fdc-dark text-white px-4 py-2 rounded hover:bg-fdc-medium">
        Save
    </button>
</form>
@endsection
