@extends('admin.layouts.app')

@section('content')
<div class="mb-6">
    <div class="flex justify-between items-center">
        <h2 class="text-2xl font-bold text-fdc-dark">Packages</h2>

        <a href="{{ route('admin.packages.create') }}"
           class="bg-fdc-dark text-white px-4 py-2 rounded hover:bg-fdc-medium">
            + Add Package
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
                <th class="py-3 px-2">Package</th>
                <th class="py-3 px-2">Class</th>
                <th class="py-3 px-2">Price</th>
                <th class="py-3 px-2">Capacity</th>
                <th class="py-3 px-2">Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($packages as $package)
                <tr class="border-b">
                    <td class="py-3 px-2 font-semibold">{{ $package->name }}</td>
                    <td class="py-3 px-2">{{ $package->classroom->name }}</td>
                    <td class="py-3 px-2">Rp {{ number_format($package->price, 0, ',', '.') }}</td>
                    <td class="py-3 px-2">{{ $package->capacity ?? '-' }}</td>
                    <td class="py-3 px-2 flex gap-2">

                        <a href="{{ route('admin.packages.edit', $package) }}"
                           class="text-blue-600 hover:underline">
                            Edit
                        </a>

                        <form action="{{ route('admin.packages.destroy', $package) }}" method="POST"
                              onsubmit="return confirm('Delete this package?')">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600 hover:underline">
                                Delete
                            </button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $packages->links() }}
    </div>
</div>
@endsection
