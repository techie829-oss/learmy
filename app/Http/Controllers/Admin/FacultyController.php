<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FacultyController extends Controller
{
    public function index()
    {
        $faculties = \App\Models\Faculty::latest()->paginate(10);
        return view('admin.faculty.index', compact('faculties'));
    }

    public function create()
    {
        return view('admin.faculty.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('faculty', 'media');
            $validated['image_path'] = 'media/' . $path;
        }
        
        // Remove image from validated data as it's not a column in the database
        unset($validated['image']);

        \App\Models\Faculty::create($validated);

        return redirect()->route('admin.faculty.index')->with('success', 'Faculty member added successfully!');
    }

    public function show(\App\Models\Faculty $faculty)
    {
        return redirect()->route('admin.faculty.edit', $faculty);
    }

    public function edit(\App\Models\Faculty $faculty)
    {
        return view('admin.faculty.edit', compact('faculty'));
    }

    public function update(Request $request, \App\Models\Faculty $faculty)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($faculty->image_path) {
                Storage::disk('media')->delete(str_replace('media/', '', $faculty->image_path));
            }
            $path = $request->file('image')->store('faculty', 'media');
            $validated['image_path'] = 'media/' . $path;
        }
        
        // Remove image from validated data as it's not a column in the database
        unset($validated['image']);

        $faculty->update($validated);

        return redirect()->route('admin.faculty.index')->with('success', 'Faculty details updated successfully!');
    }

    public function destroy(\App\Models\Faculty $faculty)
    {
        if ($faculty->image_path) {
            Storage::disk('media')->delete(str_replace('media/', '', $faculty->image_path));
        }
        $faculty->delete();
        return redirect()->route('admin.faculty.index')->with('success', 'Faculty removed successfully!');
    }
}
