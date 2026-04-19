<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::select('courses.*')
            ->join('categories', 'courses.category_id', '=', 'categories.id')
            ->orderBy('categories.order', 'asc')
            ->orderBy('courses.order', 'asc')
            ->with('category')
            ->paginate(10);
        return view('admin.courses.index', compact('courses'));
    }

    public function create()
    {
        $categories = Category::orderBy('order', 'asc')->get();
        return view('admin.courses.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'order'       => 'nullable|integer',
            'description' => 'required|string',
            'features'    => 'nullable|string',
            'price'       => 'nullable|numeric',
            'indian_online_fee'  => 'nullable|numeric',
            'indian_offline_fee' => 'nullable|numeric',
            'intl_online_fee'    => 'nullable|numeric',
            'intl_offline_fee'   => 'nullable|numeric',
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
        $validated['order'] = $request->order ?? 0;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('courses', 'media');
            $validated['image_path'] = 'media/' . $path;
        }

        unset($validated['image']);
        Course::create($validated);

        return redirect()->route('admin.courses.index')->with('success', 'Course created successfully!');
    }

    public function show(Course $course)
    {
        return redirect()->route('admin.courses.edit', $course);
    }

    public function edit(Course $course)
    {
        $categories = Category::orderBy('order', 'asc')->get();
        return view('admin.courses.edit', compact('course', 'categories'));
    }

    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'order'       => 'nullable|integer',
            'description' => 'required|string',
            'features'    => 'nullable|string',
            'price'       => 'nullable|numeric',
            'indian_online_fee'  => 'nullable|numeric',
            'indian_offline_fee' => 'nullable|numeric',
            'intl_online_fee'    => 'nullable|numeric',
            'intl_offline_fee'   => 'nullable|numeric',
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
        $validated['order'] = $request->order ?? 0;

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

    public function destroy(Course $course)
    {
        if ($course->image_path) {
            Storage::disk('media')->delete(str_replace('media/', '', $course->image_path));
        }
        $course->delete();
        return redirect()->route('admin.courses.index')->with('success', 'Course deleted successfully!');
    }
}
