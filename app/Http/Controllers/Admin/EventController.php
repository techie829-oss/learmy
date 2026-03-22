<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $events = \App\Models\Event::latest()->paginate(10);
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'event_date' => 'required|date',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords' => 'nullable|string|max:500',
        ]);

        $validated['slug'] = \Illuminate\Support\Str::slug($request->title);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('events', 'media');
            $validated['image_path'] = 'media/' . $path;
        }

        unset($validated['image']);
        \App\Models\Event::create($validated);

        return redirect()->route('admin.events.index')->with('success', 'Event scheduled successfully!');
    }

    public function show(\App\Models\Event $event)
    {
        return redirect()->route('admin.events.edit', $event);
    }

    public function edit(\App\Models\Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, \App\Models\Event $event)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'event_date' => 'required|date',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords' => 'nullable|string|max:500',
        ]);

        $validated['slug'] = \Illuminate\Support\Str::slug($request->title);

        if ($request->hasFile('image')) {
            if ($event->image_path) {
                Storage::disk('media')->delete(str_replace('media/', '', $event->image_path));
            }
            $path = $request->file('image')->store('events', 'media');
            $validated['image_path'] = 'media/' . $path;
        }

        unset($validated['image']);
        $event->update($validated);

        return redirect()->route('admin.events.index')->with('success', 'Event updated successfully!');
    }

    public function destroy(\App\Models\Event $event)
    {
        if ($event->image_path) {
            Storage::disk('media')->delete(str_replace('media/', '', $event->image_path));
        }
        $event->delete();
        return redirect()->route('admin.events.index')->with('success', 'Event cancelled successfully!');
    }
}
