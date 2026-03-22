@extends('layouts.public')

@section('title', 'Meet Our Expert Mentors | Learmy Educoach Institute')
@section('meta_description', 'Meet the world-class educators at Learmy Educoach. Learn from certified musicians and experienced academic professionals dedicated to student success.')
@section('meta_keywords', 'music teachers bangalore, academic mentors, guitar faculty, piano experts, science tutors, learmy staff')

@section('content')
    <!-- Page Header -->
    <header class="pt-48 pb-32 @if($themeMode == 'dark') bg-black @else bg-gray-50 @endif border-b @if($themeMode == 'dark') border-gray-900 @else border-gray-100 @endif overflow-hidden relative">
        <div class="absolute inset-0 opacity-20 pointer-events-none select-none">
            <span class="text-[20rem] font-serif font-black text-accent -top-20 -right-20 absolute rotate-12">FACULTY</span>
        </div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <span class="inline-block px-4 py-1 rounded-full border border-accent text-accent uppercase tracking-widest text-xs font-black mb-6">World-Class Mentors</span>
            <h1 class="text-5xl md:text-7xl font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-8 leading-tight">Elite <span class="text-gradient">Educators</span></h1>
            <p class="text-lg md:text-xl @if($themeMode == 'dark') text-gray-500 @else text-gray-700 @endif max-w-2xl mx-auto leading-relaxed">
                Learn from certified musicians and experienced academic professionals dedicated to your success.
            </p>
        </div>
    </header>

    <!-- Faculty Grid -->
    <section class="py-24 @if($themeMode == 'dark') bg-primary @else bg-white @endif px-6">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-16">
                @foreach($faculties as $faculty)
                    <div class="group relative">
                        <div class="relative h-[500px] rounded-[3rem] overflow-hidden gold-border transition-all duration-700">
                            <img src="{{ $faculty->image_path ? asset($faculty->image_path) : 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80' }}" alt="{{ $faculty->name }}" loading="lazy" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000">
                            
                            <!-- Content Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-90 group-hover:opacity-100 transition-opacity"></div>
                            
                            <div class="absolute bottom-0 left-0 p-10 w-full transform group-hover:-translate-y-4 transition-transform duration-500">
                                <span class="text-accent uppercase tracking-widest text-[10px] font-black mb-2 block">{{ $faculty->designation }}</span>
                                <h3 class="text-3xl font-serif font-bold text-white mb-4">{{ $faculty->name }}</h3>
                                <p class="text-gray-400 text-sm line-clamp-2 mb-6 group-hover:line-clamp-none transition-all duration-500">
                                    {{ $faculty->bio }}
                                </p>
                                
                                <div class="flex gap-4 pt-6 border-t border-gray-800 opacity-0 group-hover:opacity-100 transition-opacity duration-700 delay-100">
                                    <span class="text-xs uppercase font-black text-accent tracking-widest">Specialization: {{ $faculty->specialization }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Expertise Quote -->
    <section class="py-24 @if($themeMode == 'dark') bg-black @else bg-gray-50 @endif border-y @if($themeMode == 'dark') border-gray-900 @else border-gray-100 @endif">
        <div class="container mx-auto px-6 text-center">
            <div class="max-w-4xl mx-auto">
                <svg class="w-20 h-20 text-accent/10 mx-auto mb-10" fill="currentColor" viewBox="0 0 32 32"><path d="M10 8v8h6v-8h-6zM22 8v8h6v-8h-6zM10 20c0 4.418 3.582 8 8 8s8-3.582 8-8h-2c0 3.314-2.686 6-6 6s-6-2.686-6-6h-4z"></path></svg>
                <h2 class="text-3xl md:text-5xl font-serif italic font-normal @if($themeMode == 'dark') text-white @else text-gray-900 @endif leading-tight mb-12">
                    "Great teachers empathize with kids, respect them, and believe that each one has something special that can be built upon."
                </h2>
                <div class="w-20 h-1 bg-accent mx-auto mb-6"></div>
                <p class="text-accent uppercase tracking-[0.3em] text-xs font-black">Our Philosophy</p>
            </div>
        </div>
    </section>
@endsection
