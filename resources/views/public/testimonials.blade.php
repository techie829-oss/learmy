@extends('layouts.public')

@section('title', 'Student Testimonials & Success Stories | Learmy Educoach')
@section('meta_description', 'Read what our students and parents say about Learmy Educoach Institute. Discover success stories in music excellence and academic brilliance.')
@section('meta_keywords', 'learmy reviews, student success, music school testimonials, academic coaching results, parent reviews')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 overflow-hidden @if($themeMode == 'dark') bg-black @else bg-gray-50 @endif">
        <div class="absolute inset-0 opacity-20 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');"></div>
        <div class="absolute inset-0 @if($themeMode == 'dark') bg-gradient-to-b from-black via-black/80 to-primary @else bg-gradient-to-b from-white via-white/80 to-white @endif"></div>
        
        <div class="container mx-auto px-6 relative z-10 text-center">
            <h1 class="text-5xl md:text-7xl font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-6">
                Success <span class="text-gradient">Stories</span>
            </h1>
            <p class="text-xl @if($themeMode == 'dark') text-gray-400 @else text-gray-600 @endif max-w-2xl mx-auto leading-relaxed">
                Discover how Learmy Educoach has transformed the lives of our students through expert music training and academic excellence.
            </p>
        </div>
    </section>

    <!-- Achievements Section -->
    <section class="py-20 @if($themeMode == 'dark') bg-primary @else bg-white @endif overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="mb-16 text-center lg:text-left">
                <h2 class="text-accent uppercase tracking-widest font-bold text-sm mb-4">Pride of Learmy</h2>
                <h3 class="text-4xl md:text-5xl font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif leading-tight">Student <span class="text-gradient italic font-normal">Achievements</span></h3>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Achievement Card 1 -->
                <div class="@if($themeMode == 'dark') bg-black/50 border-accent/20 @else bg-gray-50 border-gray-100 @endif border p-8 rounded-[2rem] hover:bg-accent/5 transition-colors group">
                    <div class="w-16 h-16 bg-accent/10 rounded-2xl flex items-center justify-center mb-8 border border-accent/20 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-7.714 2.143L11 21l-2.286-6.857L1 12l7.714-2.143L11 3z"></path></svg>
                    </div>
                    <h4 class="text-xl font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-3">Academic Toppers</h4>
                    <p class="@if($themeMode == 'dark') text-gray-500 @else text-gray-700 @endif text-sm leading-relaxed">Our students consistently score 95%+ in Board Exams across Science and Mathematics.</p>
                </div>
                <!-- Achievement Card 2 -->
                <div class="@if($themeMode == 'dark') bg-black/50 border-accent/20 @else bg-gray-50 border-gray-100 @endif border p-8 rounded-[2rem] hover:bg-accent/5 transition-colors group">
                    <div class="w-16 h-16 bg-accent/10 rounded-2xl flex items-center justify-center mb-8 border border-accent/20 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path></svg>
                    </div>
                    <h4 class="text-xl font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-3">Music Certifications</h4>
                    <p class="@if($themeMode == 'dark') text-gray-500 @else text-gray-700 @endif text-sm leading-relaxed">100+ students certified by Trinity College London and ABRSM in Piano and Guitar.</p>
                </div>
                <!-- Achievement Card 3 -->
                <div class="@if($themeMode == 'dark') bg-black/50 border-accent/20 @else bg-gray-50 border-gray-100 @endif border p-8 rounded-[2rem] hover:bg-accent/5 transition-colors group">
                    <div class="w-16 h-16 bg-accent/10 rounded-2xl flex items-center justify-center mb-8 border border-accent/20 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h4 class="text-xl font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-3">Comp. Exam Success</h4>
                    <p class="@if($themeMode == 'dark') text-gray-500 @else text-gray-700 @endif text-sm leading-relaxed">Successful placements in prestigious institutions through Olympiads and JEE/NEET prep.</p>
                </div>
                <!-- Achievement Card 4 -->
                <div class="@if($themeMode == 'dark') bg-black/50 border-accent/20 @else bg-gray-50 border-gray-100 @endif border p-8 rounded-[2rem] hover:bg-accent/5 transition-colors group">
                    <div class="w-16 h-16 bg-accent/10 rounded-2xl flex items-center justify-center mb-8 border border-accent/20 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h4 class="text-xl font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-3">State Level Winners</h4>
                    <p class="@if($themeMode == 'dark') text-gray-500 @else text-gray-700 @endif text-sm leading-relaxed">Our students regularly bag first prizes in regional music and academic competitions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Grid -->
    <section class="py-20 @if($themeMode == 'dark') bg-primary @else bg-white @endif border-t @if($themeMode == 'dark') border-gray-900 @else border-gray-100 @endif">
        <div class="container mx-auto px-6">
            <div class="mb-16 text-center lg:text-left">
                <h2 class="text-accent uppercase tracking-widest font-bold text-sm mb-4">Hear from Students</h2>
                <h3 class="text-4xl md:text-5xl font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif leading-tight">Student <span class="text-gradient italic font-normal">Testimonials</span></h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($testimonials as $testimonial)
                    <div class="p-8 @if($themeMode == 'dark') bg-black/40 @else bg-gray-50 @endif backdrop-blur-sm border @if($themeMode == 'dark') border-accent/20 @else border-gray-100 @endif rounded-[2.5rem] hover:-translate-y-2 transition-all duration-500 group flex flex-col h-full shadow-sm hover:shadow-xl">
                        <!-- Redundant quote icon replaced with subtle design -->
                        <div class="flex items-center gap-1 mb-6">
                            @for($i = 0; $i < 5; $i++)
                                <svg class="w-5 h-5 {{ $i < $testimonial->rating ? 'text-accent' : 'text-gray-700' }}" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            @endfor
                        </div>
                        
                        <p class="@if($themeMode == 'dark') text-gray-300 @else text-gray-600 @endif italic mb-8 leading-relaxed text-lg flex-grow">
                            "{{ $testimonial->feedback }}"
                        </p>
                        
                        <div class="flex items-center gap-4 mt-auto pt-6 border-t @if($themeMode == 'dark') border-gray-800 @else border-gray-200 @endif">
                            <div class="w-14 h-14 rounded-2xl @if($themeMode == 'dark') bg-gray-900 @else bg-gray-200 @endif overflow-hidden border border-accent/20 group-hover:border-accent transition-colors">
                                <img src="{{ $testimonial->image_path ? asset($testimonial->image_path) : 'https://ui-avatars.com/api/?name='.urlencode($testimonial->student_name).'&background=D4AF37&color=1A1A1A' }}" 
                                     alt="{{ $testimonial->student_name }}" 
                                     class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h5 class="@if($themeMode == 'dark') text-white @else text-gray-900 @endif font-bold text-lg leading-tight">{{ $testimonial->student_name }}</h5>
                                <p class="text-sm text-accent uppercase tracking-widest font-bold">{{ $testimonial->program }}</p>
                                @if($testimonial->parent_name)
                                    <p class="text-xs text-xs text-gray-500 mt-1 italic">Parent: {{ $testimonial->parent_name }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full py-20 text-center">
                        <div class="w-20 h-20 bg-accent/5 rounded-full flex items-center justify-center mx-auto mb-6 border border-accent/20">
                            <svg class="w-10 h-10 text-accent/40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-serif @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-2">No success stories yet</h3>
                        <p class="@if($themeMode == 'dark') text-gray-500 @else text-gray-600 @endif">We're just getting started! Check back soon to read about our students' achievements.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Review Submission CTA -->
    <section class="py-24 @if($themeMode == 'dark') bg-black @else bg-gray-50 @endif relative">
        <div class="container mx-auto px-6">
            <div class="bg-gradient-to-r from-accent/10 to-transparent p-12 md:p-20 rounded-[3rem] border gold-border text-center overflow-hidden relative">
                <div class="relative z-10 max-w-3xl mx-auto">
                    <h3 class="text-4xl md:text-5xl font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-6">Are You a <span class="text-gradient">Learmy Student?</span></h3>
                    <p class="text-lg @if($themeMode == 'dark') text-gray-400 @else text-gray-600 @endif mb-10">We would love to hear about your experience and share your journey with the world. Your story could inspire someone else!</p>
                    <a href="{{ route('contact') }}" class="gold-button text-primary-foreground font-bold py-5 px-12 rounded-full inline-block text-xl uppercase shadow-2xl">Share Your Story</a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('styles')
<style>
    .gold-border {
        border: 1px solid rgba(212, 175, 55, 0.2);
    }
    .gold-border:hover {
        border-color: rgba(212, 175, 55, 0.5);
    }
</style>
@endsection
