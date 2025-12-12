@extends('admin.layouts.app')

@section('content')
<div class="mb-6">
    <div class="flex justify-between items-center">
        <h2 class="text-2xl font-bold text-fdc-dark">Classes</h2>

        <a href="{{ route('admin.classes.create') }}"
           class="bg-fdc-dark text-white px-4 py-2 rounded hover:bg-fdc-medium">
            + Add Class
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
                <th class="py-3 px-2">Name</th>
                <th class="py-3 px-2">Description</th>
                <th class="py-3 px-2">Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($classes as $class)
                <tr class="border-b">
                    <td class="py-3 px-2 font-semibold">{{ $class->name }}</td>
                    <td class="py-3 px-2 text-gray-600">
                        {{ Str::limit($class->description, 50) }}
                    </td>
                    <td class="py-3 px-2 flex gap-2">
                        
                        <a href="{{ route('admin.classes.edit', $class) }}"
                           class="text-blue-600 hover:underline">
                            Edit
                        </a>

                        <form action="{{ route('admin.classes.destroy', $class) }}"
                              method="POST"
                              onsubmit="return confirm('Delete this class?')">
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
        {{ $classes->links() }}
    </div>
</div>
@endsection
