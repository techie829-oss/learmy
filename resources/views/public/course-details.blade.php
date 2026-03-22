@extends('layouts.public')

@section('title', $course->meta_title ?: $course->title . ' - ' . config('app.name'))
@section('meta_description', $course->meta_description ?: \Illuminate\Support\Str::limit(strip_tags($course->description), 160))
@section('meta_keywords', $course->meta_keywords ?: 'music, academic, ' . $course->title)

@section('content')
    <!-- Page Header -->
    <header class="pt-48 pb-32 @if($themeMode == 'dark') bg-black @else bg-gray-50 @endif border-b @if($themeMode == 'dark') border-gray-900 @else border-gray-100 @endif overflow-hidden relative">
        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col lg:flex-row gap-20 items-center">
                <div class="w-full lg:w-1/2">
                    <span class="inline-block px-4 py-1 rounded-full border border-accent text-accent uppercase tracking-widest text-[10px] font-black mb-6">{{ $course->category }} Program</span>
                    <h1 class="text-5xl md:text-7xl font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-8 leading-tight">{{ $course->title }}</h1>
                    <p class="text-lg md:text-xl text-gray-500 max-w-2xl leading-relaxed mb-10">
                        {{ $course->description }}
                    </p>
                    <div class="flex flex-wrap gap-8 items-center">
                        @if($course->price)
                            <div class="flex items-center gap-4">
                                <span class="text-gray-600 text-sm uppercase tracking-widest font-black">Fee</span>
                                <span class="text-3xl font-serif font-bold text-accent">₹{{ number_format($course->price) }}</span>
                            </div>
                        @endif
                        <a href="{{ route('contact') }}" class="gold-button text-primary-foreground font-black py-4 px-12 rounded-full uppercase tracking-widest text-sm shadow-2xl">Enroll Now</a>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 group relative h-[500px] md:h-[600px] border gold-border rounded-[4rem] overflow-hidden transition-all duration-700">
                    <div class="absolute inset-0 bg-cover bg-center opacity-40 group-hover:scale-105 transition-transform duration-1000" style="background-image: url('{{ $course->image_path ? asset($course->image_path) : 'https://images.unsplash.com/photo-1511379938547-c1f69419868d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80' }}');"></div>
                </div>
            </div>
        </div>
    </header>

    <!-- Detailed Content -->
    <section class="py-24 @if($themeMode == 'dark') bg-primary @else bg-white @endif px-6">
        <div class="container mx-auto">
            <div class="max-w-4xl mx-auto">
                <div class="mb-20">
                    <h2 class="text-accent uppercase tracking-widest font-black text-xs mb-6">Program Overview</h2>
                    <div class="prose prose-invert prose-lg max-w-none text-gray-400 leading-relaxed">
                        <p class="mb-8">
                            {{ $course->description }}
                        </p>
                        <p class="mb-8 @if($themeMode == 'dark') text-white @else text-gray-900 @endif italic">
                            Experience a learning environment that combines professional discipline with a supportive community.
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-16 mb-20">
                    <div>
                        <h3 class="text-2xl font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-8 border-l-4 border-accent pl-6">Curriculum Highlights</h3>
                        <ul class="space-y-6">
                            @if($course->features)
                                @foreach(explode("\n", $course->features) as $feature)
                                    <li class="flex items-center gap-4 text-gray-400 border-b @if($themeMode == 'dark') border-gray-800 @else border-gray-100 @endif pb-4">
                                        <svg class="w-5 h-5 text-accent shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        {{ $feature }}
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-2xl font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-8 border-l-4 border-accent pl-6">Key Learning Outcomes</h3>
                        <div class="@if($themeMode == 'dark') bg-black/40 @else bg-gray-50 @endif border @if($themeMode == 'dark') border-gray-800 @else border-gray-200 @endif p-10 rounded-[3rem] gold-border">
                            <p class="text-gray-500 mb-8 leading-relaxed">
                                Graduates of our {{ $course->title }} program gain the confidence to perform on stage and excel in exams.
                            </p>
                            <div class="grid grid-cols-2 gap-6">
                                <div class="text-center p-4 border @if($themeMode == 'dark') border-gray-800 @else border-gray-200 @endif rounded-2xl">
                                    <span class="text-2xl font-serif font-bold text-accent block">95%</span>
                                    <span class="text-[10px] text-gray-600 uppercase font-black">Score Avg</span>
                                </div>
                                <div class="text-center p-4 border @if($themeMode == 'dark') border-gray-800 @else border-gray-200 @endif rounded-2xl">
                                    <span class="text-2xl font-serif font-bold text-accent block">120+</span>
                                    <span class="text-[10px] text-gray-600 uppercase font-black">Resources</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Enrollment CTA -->
                <div class="@if($themeMode == 'dark') bg-black @else bg-gray-50 @endif border @if($themeMode == 'dark') border-accent/20 @else border-gray-200 @endif p-12 md:p-20 rounded-[4rem] text-center relative overflow-hidden group shadow-sm">
                    <div class="absolute inset-0 bg-gradient-to-r from-accent/5 via-transparent to-transparent"></div>
                    <div class="relative z-10 max-w-2xl mx-auto">
                        <h3 class="text-3xl md:text-5xl font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-8">Ready to Master this Module?</h3>
                        <p class="text-gray-400 mb-12">Spaces are limited for the upcoming batch. Secure your spot now to begin your transformation at Learmy Educoach Institute.</p>
                        <a href="{{ route('contact') }}" class="gold-button text-primary-foreground font-black py-4 px-12 rounded-full uppercase tracking-widest text-sm inline-block shadow-2xl">Start Enrollment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
