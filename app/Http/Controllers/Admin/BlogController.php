<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = \App\Models\Blog::latest()->paginate(10);
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords' => 'nullable|string|max:500',
        ]);

        $validated['slug'] = \Illuminate\Support\Str::slug($request->title);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('blogs', 'media');
            $validated['image_path'] = 'media/' . $path;
        }

        unset($validated['image']);
        \App\Models\Blog::create($validated);

        return redirect()->route('admin.blogs.index')->with('success', 'Article published successfully!');
    }

    public function show(\App\Models\Blog $blog)
    {
        return redirect()->route('admin.blogs.edit', $blog);
    }

    public function edit(\App\Models\Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, \App\Models\Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords' => 'nullable|string|max:500',
        ]);

        $validated['slug'] = \Illuminate\Support\Str::slug($request->title);

        if ($request->hasFile('image')) {
            if ($blog->image_path) {
                Storage::disk('media')->delete(str_replace('media/', '', $blog->image_path));
            }
            $path = $request->file('image')->store('blogs', 'media');
            $validated['image_path'] = 'media/' . $path;
        }

        unset($validated['image']);
        $blog->update($validated);

        return redirect()->route('admin.blogs.index')->with('success', 'Article updated successfully!');
    }

    public function destroy(\App\Models\Blog $blog)
    {
        if ($blog->image_path) {
            Storage::disk('media')->delete(str_replace('media/', '', $blog->image_path));
        }
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Article removed successfully!');
    }
}
