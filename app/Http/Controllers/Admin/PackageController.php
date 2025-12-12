<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::with('classroom')->latest()->paginate(10);

        return view('admin.packages.index', compact('packages'));
    }

    public function create()
    {
        $classes = Classroom::all();
        return view('admin.packages.create', compact('classes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'classroom_id' => 'required|exists:classes,id',
            'name' => 'required|string|max:255',
            'price' => 'required|integer|min:0',
            'capacity' => 'nullable|integer|min:1',
            'description' => 'nullable|string',
        ]);

        Package::create($request->all());

        return redirect()
            ->route('admin.packages.index')
            ->with('success', 'Package created successfully!');
    }

    public function edit(Package $package)
    {
        $classes = Classroom::all();
        return view('admin.packages.edit', compact('package', 'classes'));
    }

    public function update(Request $request, Package $package)
    {
        $request->validate([
            'classroom_id' => 'required|exists:classes,id',
            'name' => 'required|string|max:255',
            'price' => 'required|integer|min:0',
            'capacity' => 'nullable|integer|min:1',
            'description' => 'nullable|string',
        ]);

        $package->update($request->all());

        return redirect()
            ->route('admin.packages.index')
            ->with('success', 'Package updated successfully!');
    }

    public function destroy(Package $package)
    {
        $package->delete();

        return redirect()
            ->route('admin.packages.index')
            ->with('success', 'Package deleted successfully!');
    }
}
