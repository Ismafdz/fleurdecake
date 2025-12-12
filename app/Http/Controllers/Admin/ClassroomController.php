<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        $classes = Classroom::latest()->paginate(10);
        return view('admin.classes.index', compact('classes'));
    }

    public function create()
    {
        return view('admin.classes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Classroom::create($request->only('name', 'description'));

        return redirect()
            ->route('admin.classes.index')
            ->with('success', 'Class created successfully!');
    }

    public function edit(Classroom $class)
    {
        return view('admin.classes.edit', compact('class'));
    }

    public function update(Request $request, Classroom $class)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $class->update($request->only('name', 'description'));

        return redirect()
            ->route('admin.classes.index')
            ->with('success', 'Class updated successfully!');
    }

    public function destroy(Classroom $class)
    {
        $class->delete();

        return redirect()
            ->route('admin.classes.index')
            ->with('success', 'Class deleted successfully!');
    }
}
