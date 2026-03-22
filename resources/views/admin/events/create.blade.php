@extends('layouts.admin')

@section('title', 'Schedule New Event')

@section('content')
<div class="max-w-4xl mx-auto bg-white rounded-[2.5rem] p-12 border border-gray-100 shadow-sm relative overflow-hidden">
    <div class="absolute top-0 right-0 w-64 h-64 bg-accent/5 rounded-full blur-3xl -mr-32 -mt-32"></div>
    
    <div class="relative z-10">
        <div class="mb-12">
            <h3 class="text-3xl font-bold text-gray-900 mb-2">Event Scheduling</h3>
            <p class="text-gray-500 font-bold uppercase tracking-widest text-[10px]">Step: Announce a concert, workshop or seminar</p>
        </div>

        <form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data" class="space-y-10">
            @csrf

            <div class="space-y-4">
                <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Event Title</label>
                <input type="text" name="title" value="{{ old('title') }}" required class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-4 text-gray-900 outline-none transition-colors rounded-2xl" placeholder="Annual Music Fest 2026">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="space-y-4">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Event Date</label>
                    <input type="date" name="event_date" value="{{ old('event_date') }}" required class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-4 text-gray-900 outline-none transition-colors rounded-2xl">
                </div>

                <div class="space-y-4">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Location</label>
                    <input type="text" name="location" value="{{ old('location') }}" required class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-4 text-gray-900 outline-none transition-colors rounded-2xl" placeholder="Institute Main Hall">
                </div>
            </div>

            <div class="space-y-4">
                <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Event Description</label>
                <textarea name="description" rows="5" required class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-6 text-gray-900 outline-none transition-colors rounded-3xl" placeholder="Provide details about the event, agenda, and guest speakers..."></textarea>
            </div>

            <div class="space-y-4">
                <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Event Banner / Image</label>
                <div class="relative group">
                    <input type="file" name="image" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                    <div class="w-full bg-gray-50 border-2 border-dashed border-gray-300 rounded-2xl p-4 text-center group-hover:border-accent transition-colors">
                        <span class="text-xs text-gray-500 font-bold uppercase tracking-widest">Click to upload 2MB Max</span>
                    </div>
                </div>
            </div>

            <div class="space-y-10 pt-10 border-t border-gray-100">
                <div>
                    <h4 class="text-xl font-bold text-gray-900">SEO Optimization</h4>
                    <p class="text-gray-500 font-bold uppercase tracking-widest text-[10px]">Customize how this page appears in search engines</p>
                </div>
                
                <div class="space-y-4">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Meta Title</label>
                    <input type="text" name="meta_title" value="{{ old('meta_title') }}" class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-4 text-gray-900 outline-none transition-colors rounded-2xl" placeholder="Grand Music Fest | Learmy Events">
                </div>

                <div class="space-y-4">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Meta Description</label>
                    <textarea name="meta_description" rows="3" class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-6 text-gray-900 outline-none transition-colors rounded-3xl" placeholder="Join us for our upcoming annual music festival featuring students and experts..."></textarea>
                </div>

                <div class="space-y-4">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Meta Keywords (Comma separated)</label>
                    <input type="text" name="meta_keywords" value="{{ old('meta_keywords') }}" class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-4 text-gray-900 outline-none transition-colors rounded-2xl" placeholder="event, music, festival, performance">
                </div>
            </div>

            <div class="flex gap-6 mt-16">
                <button type="submit" class="flex-grow gold-button text-primary font-black py-5 rounded-3xl uppercase tracking-widest text-xs shadow-2xl transition-all">Broadcast Event</button>
                <a href="{{ route('admin.events.index') }}" class="px-10 py-5 bg-gray-100 text-gray-500 font-bold rounded-3xl uppercase tracking-widest text-xs hover:bg-gray-200 transition-all">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
