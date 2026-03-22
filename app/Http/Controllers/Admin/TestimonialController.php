<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->paginate(10);
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_name' => 'required|string|max:255',
            'parent_name' => 'nullable|string|max:255',
            'program' => 'nullable|string|max:255',
            'feedback' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('testimonials', 'media');
            $validated['image_path'] = 'media/' . $path;
        }

        Testimonial::create(collect($validated)->except('image')->toArray());

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial added successfully!');
    }

    public function show(Testimonial $testimonial)
    {
        return redirect()->route('admin.testimonials.index');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'student_name' => 'required|string|max:255',
            'parent_name' => 'nullable|string|max:255',
            'program' => 'nullable|string|max:255',
            'feedback' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($testimonial->image_path) {
                Storage::disk('media')->delete(str_replace('media/', '', $testimonial->image_path));
            }
            $path = $request->file('image')->store('testimonials', 'media');
            $validated['image_path'] = 'media/' . $path;
        }

        $testimonial->update(collect($validated)->except('image')->toArray());

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial updated successfully!');
    }

    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->image_path) {
            Storage::disk('media')->delete(str_replace('media/', '', $testimonial->image_path));
        }
        $testimonial->delete();
        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial removed successfully!');
    }
}
