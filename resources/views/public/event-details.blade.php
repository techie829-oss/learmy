@extends('layouts.public')

@section('title', $event->meta_title ?: $event->title . ' - ' . config('app.name'))
@section('meta_description', $event->meta_description ?: \Illuminate\Support\Str::limit(strip_tags($event->description), 160))
@section('meta_keywords', $event->meta_keywords ?: 'event, workshop, ' . $event->title)

@section('content')
    <!-- Page Header -->
    <header class="pt-48 pb-32 @if($themeMode == 'dark') bg-black @else bg-gray-50 @endif border-b @if($themeMode == 'dark') border-gray-900 @else border-gray-100 @endif overflow-hidden relative">
        <div class="container mx-auto px-6 relative z-10 text-center">
            <div class="flex flex-col items-center gap-6 mb-12">
                 <span class="inline-block px-4 py-1 rounded-full border border-accent text-accent uppercase tracking-widest text-[10px] font-black mb-6">Upcoming Workshop</span>
                 <h1 class="text-5xl md:text-8xl font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-8 leading-tight max-w-5xl">{{ $event->title }}</h1>
                 <div class="flex flex-wrap justify-center gap-10 border-y @if($themeMode == 'dark') border-gray-800 @else border-gray-100 @endif py-10 w-full max-w-4xl">
                     <div class="flex flex-col items-center gap-2">
                        <span class="text-gray-600 text-[10px] uppercase tracking-widest font-black">When</span>
                        <span class="text-accent font-serif font-bold text-2xl uppercase tracking-widest underline underline-offset-8 decoration-accent/20">{{ $event->event_date ? $event->event_date->format('d M, Y') : 'To Be Announced' }}</span>
                     </div>
                     <div class="flex flex-col items-center gap-2">
                        <span class="text-gray-600 text-[10px] uppercase tracking-widest font-black">Where</span>
                        <span class="@if($themeMode == 'dark') text-white @else text-gray-900 @endif font-serif font-bold text-2xl uppercase tracking-widest underline underline-offset-8 decoration-accent/10">{{ $event->location ?: 'Learmy Campus' }}</span>
                     </div>
                     <div class="flex flex-col items-center gap-2">
                        <span class="text-gray-600 text-[10px] uppercase tracking-widest font-black">Status</span>
                        <span class="@if($themeMode == 'dark') text-white @else text-gray-900 @endif font-serif font-bold text-2xl uppercase tracking-widest underline underline-offset-8 decoration-accent/10">Registration Open</span>
                     </div>
                 </div>
            </div>
        </div>
    </header>

    <!-- Detailed Event Layout -->
    <section class="py-24 @if($themeMode == 'dark') bg-primary @else bg-white @endif px-6">
        <div class="container mx-auto">
            <div class="flex flex-col lg:flex-row gap-24 items-start max-w-6xl mx-auto">
                <div class="w-full lg:w-2/3">
                    <div class="group relative rounded-[4rem] overflow-hidden gold-border h-[500px] mb-16 transition-all duration-700">
                        <img src="{{ $event->image_path ? asset($event->image_path) : 'https://images.unsplash.com/photo-1540575861501-7cf05a4b125a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80' }}" alt="{{ $event->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000">
                    </div>
                    
                    <h2 class="text-3xl font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-10 border-l-4 border-accent pl-8">Event Agenda & Description</h2>
                    <div class="prose prose-invert prose-xl text-gray-400 mb-20 leading-relaxed max-w-none">
                        <p class="mb-8">
                            {{ $event->description }}
                        </p>
                    </div>
                    
                    <div class="p-12 md:p-16 @if($themeMode == 'dark') bg-black @else bg-gray-50 @endif rounded-[4rem] border @if($themeMode == 'dark') border-accent/20 @else border-gray-200 @endif shadow-sm">
                        <h4 class="text-accent uppercase tracking-widest font-black text-xs mb-8">Special Instructions</h4>
                        <ul class="space-y-4 text-gray-500 text-lg italic leading-relaxed">
                            <li>Participants are requested to arrive 15 minutes prior to the start time.</li>
                            <li>Carry your digital entry pass received over email.</li>
                            <li>Certificate of participation will be provided to all attendees.</li>
                        </ul>
                    </div>
                </div>

                <!-- Sidebar Call to Action -->
                <div class="w-full lg:w-1/3 sticky top-32">
                    <div class="@if($themeMode == 'dark') bg-black @else bg-gray-50 @endif p-12 rounded-[4rem] border @if($themeMode == 'dark') border-accent/20 @else border-gray-200 @endif text-center flex flex-col items-center space-y-10 group relative transition-all duration-700 hover:border-accent/60 shadow-lg">
                         <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gradient-to-t @if($themeMode == 'dark') from-accent/5 @else from-gray-200/50 @endif to-transparent rounded-b-[4rem]"></div>
                         <h4 class="@if($themeMode == 'dark') text-white @else text-gray-900 @endif text-3xl font-serif font-bold leading-tight">Secure Your Spot</h4>
                         <p class="text-gray-500 leading-relaxed text-sm">Join our experts for an unforgettable session of learning and exposure. Seats are filling fast!</p>
                         <a href="{{ route('contact') }}" class="w-full gold-button text-primary-foreground font-black py-6 rounded-3xl uppercase tracking-widest text-xs shadow-2xl relative z-10">Register Now</a>
                         <div class="flex justify-center gap-6 pt-6 border-t @if($themeMode == 'dark') border-gray-800 @else border-gray-200 @endif w-full">
                            <a href="#" class="text-gray-500 hover:text-accent transition-colors">Share Event</a>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
