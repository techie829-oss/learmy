<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function index()
    {
        $courses = \App\Models\Course::latest()->paginate(10);
        return view('admin.courses.index', compact('courses'));
    }

    public function create()
    {
        return view('admin.courses.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'category'    => 'required|in:music,academic',
            'description' => 'required|string',
            'features'    => 'nullable|string',
            'price'       => 'nullable|numeric',
            'start_date'  => 'nullable|date',
            'duration'    => 'nullable|string|max:100',
            'is_featured'      => 'nullable',
            'image'            => 'nullable|image|max:2048',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords'    => 'nullable|string|max:500',
        ]);

        $validated['slug'] = \Illuminate\Support\Str::slug($request->title);
        $validated['is_featured'] = $request->has('is_featured');

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('courses', 'media');
            $validated['image_path'] = 'media/' . $path;
        }

        unset($validated['image']);
        \App\Models\Course::create($validated);

        return redirect()->route('admin.courses.index')->with('success', 'Course created successfully!');
    }

    public function show(\App\Models\Course $course)
    {
        return redirect()->route('admin.courses.edit', $course);
    }

    public function edit(\App\Models\Course $course)
    {
        return view('admin.courses.edit', compact('course'));
    }

    public function update(Request $request, \App\Models\Course $course)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'category'    => 'required|in:music,academic',
            'description' => 'required|string',
            'features'    => 'nullable|string',
            'price'       => 'nullable|numeric',
            'start_date'  => 'nullable|date',
            'duration'    => 'nullable|string|max:100',
            'is_featured'      => 'nullable',
            'image'            => 'nullable|image|max:2048',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords'    => 'nullable|string|max:500',
        ]);

        $validated['slug'] = \Illuminate\Support\Str::slug($request->title);
        $validated['is_featured'] = $request->has('is_featured');

        if ($request->hasFile('image')) {
            if ($course->image_path) {
                Storage::disk('media')->delete(str_replace('media/', '', $course->image_path));
            }
            $path = $request->file('image')->store('courses', 'media');
            $validated['image_path'] = 'media/' . $path;
        }

        unset($validated['image']);
        $course->update($validated);

        return redirect()->route('admin.courses.index')->with('success', 'Course updated successfully!');
    }

    public function destroy(\App\Models\Course $course)
    {
        if ($course->image_path) {
            Storage::disk('media')->delete(str_replace('media/', '', $course->image_path));
        }
        $course->delete();
        return redirect()->route('admin.courses.index')->with('success', 'Course deleted successfully!');
    }
}
