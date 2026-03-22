@extends('layouts.public')

@section('title', 'Upcoming Events & Music Workshops | Learmy Educoach Institute')
@section('meta_description', 'Don\'t miss out on elite music concerts, academic seminars, and masterclasses at Learmy Educoach. View our full calendar and register for upcoming events.')
@section('meta_keywords', 'music events bangalore, piano workshops, academic seminars, guitar concerts, learmy events, music masterclass')

@section('content')
    <!-- Page Header -->
    <header class="pt-48 pb-32 @if($themeMode == 'dark') bg-black @else bg-gray-50 @endif border-b @if($themeMode == 'dark') border-gray-900 @else border-gray-100 @endif overflow-hidden relative">
        <div class="absolute inset-0 opacity-20 pointer-events-none select-none">
            <span class="text-[20rem] font-serif font-black text-accent -top-20 -right-20 absolute rotate-12">EVENTS</span>
        </div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <span class="inline-block px-4 py-1 rounded-full border border-accent text-accent uppercase tracking-widest text-xs font-black mb-6">Upcoming Sessions</span>
            <h1 class="text-5xl md:text-7xl font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-8 leading-tight">Join Our <span class="text-gradient">Workshops</span></h1>
            <p class="text-lg md:text-xl text-gray-500 max-w-2xl mx-auto leading-relaxed">
                Stay updated with our latest concerts, academic seminars, and music masterclasses.
            </p>
        </div>
    </header>

    <!-- Events Grid -->
    <section class="py-24 @if($themeMode == 'dark') bg-primary @else bg-white @endif px-6">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-20">
                @foreach($events as $event)
                    <div class="@if($themeMode == 'dark') bg-black/30 border-gray-800 @else bg-gray-50 border-gray-200 @endif rounded-[3rem] border p-8 flex flex-col md:flex-row gap-10 group hover:border-accent/40 transition-colors shadow-sm">
                        <div class="w-full md:w-64 h-64 rounded-3xl overflow-hidden shrink-0 gold-border">
                            <img src="{{ $event->image_path ? asset($event->image_path) : 'https://images.unsplash.com/photo-1540575861501-7cf05a4b125a?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80' }}" alt="{{ $event->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000">
                        </div>
                        <div class="flex flex-col justify-center">
                            <div class="flex gap-4 mb-4">
                                <span class="@if($themeMode == 'dark') bg-black/50 border-accent/20 @else bg-gray-200/50 border-accent/20 @endif px-4 py-1 rounded-full text-[10px] font-black text-accent uppercase tracking-widest border">
                                    {{ $event->event_date ? $event->event_date->format('M d, Y') : 'TBA' }}
                                </span>
                                <span class="@if($themeMode == 'dark') bg-black/50 border-gray-800 text-white @else bg-gray-200/50 border-gray-300 text-gray-700 @endif px-4 py-1 rounded-full text-[10px] font-black uppercase tracking-widest border">
                                    {{ $event->location ?: 'Learmy Campus' }}
                                </span>
                            </div>
                            <h3 class="text-3xl font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-6 group-hover:text-accent transition-colors">{{ $event->title }}</h3>
                            <p class="text-gray-500 mb-8 line-clamp-3 leading-relaxed">
                                {{ $event->description }}
                            </p>
                            <a href="{{ route('event.show', $event->slug) }}" class="flex items-center gap-2 text-accent font-black uppercase text-xs tracking-widest hover:text-accentLight transition-colors">
                                View Details
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination Support -->
            <div class="mt-24 flex justify-center">
                {{ $events->links() }}
            </div>
        </div>
    </section>

    <!-- Calendar View Placeholder CTA -->
    <section class="py-24 @if($themeMode == 'dark') bg-black @else bg-gray-50 @endif relative">
        <div class="container mx-auto px-6 text-center">
            <h3 class="text-4xl font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-8">Looking for specific dates?</h3>
            <p class="text-gray-400 mb-12 max-w-xl mx-auto">Download our annual academic and music calendar for the 2026 session.</p>
            <a href="#" class="gold-button text-primary-foreground font-black py-5 px-12 rounded-full inline-block uppercase tracking-widest shadow-2xl">Download Full Calendar</a>
        </div>
    </section>
@endsection
