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

    <!-- Google Reviews Summary Section -->
    <section class="py-12 @if($themeMode == 'dark') bg-black @else bg-white @endif border-b @if($themeMode == 'dark') border-gray-900 @else border-gray-100 @endif relative overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center justify-between gap-8 bg-gradient-to-r @if($themeMode == 'dark') from-accent/5 to-transparent @else from-accent/5 to-gray-50 @endif p-8 md:p-12 rounded-[3rem] border gold-border shadow-sm">
                <div class="flex flex-col md:flex-row items-center gap-8 text-center md:text-left">
                    <!-- Google Brand Icon -->
                    <div class="w-20 h-20 bg-white rounded-2xl shadow-lg flex items-center justify-center p-4">
                        <svg viewBox="0 0 24 24" class="w-full h-full"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-1 .67-2.28 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.66l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                    </div>
                    <div>
                        <div class="flex items-center justify-center md:justify-start gap-2 mb-2">
                            <span class="text-4xl md:text-5xl font-serif font-black @if($themeMode == 'dark') text-white @else text-gray-900 @endif leading-none">5.0</span>
                            <div class="flex flex-col">
                                <div class="flex gap-1">
                                    @for($i = 0; $i < 5; $i++)
                                        <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    @endfor
                                </div>
                                <p class="text-[10px] text-accent font-black uppercase tracking-widest mt-1">Excellent on Google</p>
                            </div>
                        </div>
                        <p class="text-lg @if($themeMode == 'dark') text-gray-400 @else text-gray-600 @endif font-light">
                            Based on <span class="font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif">16 Google reviews</span>
                        </p>
                    </div>
                </div>
                
                <a href="https://www.google.com/maps/place/LEARMY+EDUCOACH+INSTITUTE+OF+MUSIC+%26+ACADEMICS/@12.9690526,77.7708609,17z/data=!4m8!3m7!1s0x3bae0d011fecc065:0x3a6754be7d828925!8m2!3d12.9690526!4d77.7708609!9m1!1b1!16s%2Fg%2F11ywbwvr5g?entry=ttu" target="_blank" class="gold-button px-10 py-5 rounded-full text-sm font-black uppercase tracking-[0.2em] shadow-xl group flex items-center gap-3">
                    Read All Reviews
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                </a>
            </div>
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
