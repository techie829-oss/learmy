<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->paginate(12);
        return view('admin.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.galleries.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'type' => 'required|in:image,video',
            'image' => 'required_if:type,image|image|max:5120',
            'video_url' => 'required_if:type,video|nullable|url',
        ]);

        if ($request->type == 'image' && $request->hasFile('image')) {
            $path = $request->file('image')->store('gallery', 'media');
            $validated['file_path'] = 'media/' . $path;
        }

        Gallery::create(collect($validated)->except('image')->toArray());

        return redirect()->route('admin.galleries.index')->with('success', 'Gallery item added successfully!');
    }

    public function show(Gallery $gallery)
    {
        return redirect()->route('admin.galleries.index');
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.galleries.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'type' => 'required|in:image,video',
            'image' => 'nullable|image|max:5120',
            'video_url' => 'required_if:type,video|nullable|url',
        ]);

        if ($request->type == 'image' && $request->hasFile('image')) {
            // Delete old file
            if ($gallery->file_path) {
                Storage::disk('media')->delete(str_replace('media/', '', $gallery->file_path));
            }
            $path = $request->file('image')->store('gallery', 'media');
            $validated['file_path'] = 'media/' . $path;
            $validated['video_url'] = null; // Clear video URL if we switch to image
        } elseif ($request->type == 'video') {
            // Delete old file if switching to video
            if ($gallery->file_path) {
                Storage::disk('media')->delete(str_replace('media/', '', $gallery->file_path));
                $validated['file_path'] = null;
            }
        }

        $gallery->update(collect($validated)->except('image')->toArray());

        return redirect()->route('admin.galleries.index')->with('success', 'Gallery item updated successfully!');
    }

    public function destroy(Gallery $gallery)
    {
        if ($gallery->file_path) {
            Storage::disk('media')->delete(str_replace('media/', '', $gallery->file_path));
        }
        $gallery->delete();
        return redirect()->route('admin.galleries.index')->with('success', 'Gallery item removed successfully!');
    }
}
