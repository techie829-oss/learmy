@extends('layouts.public')

@section('title', 'Learmy Educoach | Premium Music & Academic Institute of Excellence')
@section('meta_description', 'Discover elite music training and academic coaching at Learmy Educoach Institute. Expert piano, guitar lessons, and science/mathematics excellence.')
@section('meta_keywords', 'music school, piano classes, academic coaching, Learmy Educoach, music institute, guitar lessons, science tuition')

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-[70vh] lg:min-h-[85vh] flex items-center pt-26 md:pt-28 lg:pt-32 pb-12 md:pb-14 overflow-hidden @if($themeMode == 'dark') bg-[#0A0A0A] @else bg-white @endif">
        <!-- Minimal abstract background -->
        <div class="absolute inset-0 z-0 pointer-events-none">
            <div class="absolute top-20 right-[10%] w-[15rem] md:w-[20rem] h-[15rem] md:h-[20rem] bg-accent/5 rounded-full blur-[100px] md:blur-[120px]"></div>
            <div class="absolute bottom-20 left-[5%] w-[10rem] md:w-[12rem] h-[10rem] md:h-[12rem] bg-accent/5 rounded-full blur-[80px] md:blur-[100px]"></div>
        </div>

        <div class="container relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-10 md:gap-16 lg:gap-24 xl:gap-32">
                <div class="w-full lg:w-3/5 xl:w-[55%] text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 md:px-5 md:py-2 rounded-full border border-accent/20 bg-accent/5 text-accent text-[8px] md:text-[9px] font-black uppercase tracking-[0.5em] mb-8 md:mb-12 shadow-sm" data-aos="fade-down">
                        <span class="relative flex h-1.5 w-1.5 md:h-2 md:w-2">
                          <span class="relative inline-flex rounded-full h-full w-full bg-accent"></span>
                        </span>
                        Premium Institute
                    </div>
                    
                    <h1 class="fluid-text-h1 font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-6 md:mb-8 leading-[1.0] tracking-tighter mx-auto lg:mx-0 max-w-2xl" data-aos="fade-right" data-aos-delay="200">
                        Elite <span class="text-gradient italic">Music</span> <br> & <span class="font-normal @if($themeMode == 'dark') text-white/30 @else text-gray-400 @endif opacity-60">Academic Coaching</span> 
                    </h1>
                    
                    <p class="fluid-text-p @if($themeMode == 'dark') text-gray-400 @else text-gray-600 @endif mb-10 md:mb-12 leading-relaxed max-w-lg mx-auto lg:mx-0 font-light" data-aos="fade-up" data-aos-delay="400">
                        Elevate your journey with professional musical training and rigorous academic excellence in a truly elite environment.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row flex-wrap gap-4 justify-center lg:justify-start">
                        <a href="{{ route('contact') }}" class="gold-button font-black py-4 px-10 rounded-full text-center text-sm uppercase shadow-xl group gap-3">
                            Start Enrollment
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                        <a href="{{ route('about') }}" class="inline-flex items-center justify-center font-bold py-4 px-10 rounded-full border border-accent/20 uppercase tracking-widest text-[10px] md:text-xs hover:bg-accent/10 hover:border-accent transition-all duration-500 @if($themeMode == 'dark') text-white @else text-gray-900 @endif">
                            Our Method
                        </a>
                    </div>
                </div>
                
                <div class="w-full lg:w-2/5 xl:w-[45%] relative mt-8 lg:mt-0" data-aos="zoom-in" data-aos-delay="600">
                    <div class="relative rounded-tr-[3rem] md:rounded-tr-[5rem] rounded-bl-[3rem] md:rounded-bl-[5rem] rounded-tl-xl md:rounded-tl-2xl rounded-br-xl md:rounded-br-2xl overflow-hidden gold-border-thick shadow-2xl bg-black">
                        <video autoplay muted loop playsinline class="w-full h-[300px] md:h-[400px] lg:h-[450px] xl:h-[600px] object-contain transition-transform duration-[2s] hover:scale-105 bg-black/90">
                            <source src="{{ asset('learmyimages/learmy1.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent pointer-events-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-20 md:py-32 lg:py-40 @if($themeMode == 'dark') bg-[#0F0F0F] @else bg-white @endif relative overflow-hidden">
        <div class="container px-4 md:px-6">
            <div class="flex flex-col lg:flex-row items-center gap-12 md:gap-24">
                <div class="w-full lg:w-1/2 relative">
                    <div class="relative z-10">
                        <div class="relative rounded-[2.5rem] md:rounded-[4rem] overflow-hidden shadow-2xl gold-border-thick">
                            <img src="{{ asset('learmyimages/laermy10.jpeg') }}" alt="Students learning music and science at Learmy Educoach Institute" loading="lazy" class="w-full hover:scale-105 transition-all duration-[1.5s]">
                        </div>
                        
                        <!-- Floating metrics -->
                        <div class="absolute -bottom-12 -right-8 @if($themeMode == 'dark') bg-black/80 @else bg-white/90 @endif backdrop-blur-xl p-10 rounded-[3rem] border border-accent/20 shadow-2xl">
                            <div class="flex items-center gap-6">
                                <div class="text-6xl font-serif font-black text-accent tracking-tighter" data-counter="15">15</div>
                                <div class="w-[1px] h-12 bg-accent/30"></div>
                                <div class="@if($themeMode == 'dark') text-gray-400 @else text-gray-500 @endif uppercase text-[10px] font-black tracking-[0.4em] leading-tight">Years of<br>Elite Excellence</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="w-full lg:w-1/2">
                    <div>
                        <h2 class="text-accent uppercase tracking-[0.5em] font-black text-xs mb-8">Our Heritage</h2>
                        <h3 class="text-5xl md:text-7xl font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-10 leading-tight">Art Meets <span class="text-gradient font-normal italic">Academics</span></h3>
                        
                        <p class="text-xl @if($themeMode == 'dark') text-gray-400 @else text-gray-600 @endif mb-10 leading-relaxed font-light">
                            Learmy Educoach offers a perfect blend of academics and extracurricular learning for students of all ages. From music mastery to academic success, we nurture talent, creativity, and confidence in every student.
                        </p>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 mb-12">
                            <div class="space-y-4">
                                <div class="w-12 h-12 rounded-full bg-accent/5 flex items-center justify-center border border-accent/10">
                                    <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path></svg>
                                </div>
                                <h4 class="text-xl font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif">Music & Arts</h4>
                                <p class="text-sm text-gray-500 leading-relaxed">Keyboard, Piano, Drums, Guitar, Violin, Yoga, Karate, and Art & Craft classes.</p>
                            </div>
                            <div class="space-y-4">
                                <div class="w-12 h-12 rounded-full bg-accent/5 flex items-center justify-center border border-accent/10">
                                    <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.168.477 4.5 1.253m0-1.3l1.832-2.547C14.168 14.477 15.754 14 17.5 14s3.168.477 4.5 1.253V6.253C20.832 5.477 19.246 5 17.5 5s-3.168.477-4.5 1.253"></path></svg>
                                </div>
                                <h4 class="text-xl font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif">Academic Success</h4>
                                <p class="text-sm text-gray-500 leading-relaxed">Tuition classes from LKG to Grade 12 for all subjects with strong focus on fundamentals.</p>
                            </div>
                        </div>
                        
                        <a href="{{ route('about') }}" class="inline-flex items-center gap-4 text-accent font-black uppercase text-[10px] tracking-[0.4em] group">
                            Our Real Story
                            <span class="w-8 h-px bg-accent/30 group-hover:w-16 transition-all duration-500"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Courses (Services) -->
    <section class="py-20 md:py-32 @if($themeMode == 'dark') bg-black @else bg-surface @endif border-y @if($themeMode == 'dark') border-white/5 @else border-gray-100 @endif relative overflow-hidden">
        <div class="absolute top-0 right-0 w-full h-full bg-[radial-gradient(circle_at_100%_0%,rgba(212,175,55,0.05),transparent)]"></div>
        <div class="container relative z-10">
            <div class="flex flex-col md:flex-row justify-between items-center md:items-end mb-16 md:mb-24 gap-8 md:gap-0 text-center md:text-left">
                <div class="max-w-2xl px-4">
                    <h2 class="text-accent uppercase tracking-[0.4em] font-black text-[10px] md:text-xs mb-6 px-4 py-1.5 border border-accent/20 rounded-full inline-block">Professional Programs</h2>
                    <h3 class="fluid-text-h2 font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif leading-tight">Elite <span class="text-gradient italic font-normal">Training</span></h3>
                </div>
                <div class="mt-4 md:mt-0">
                    <a href="{{ route('courses') }}" class="group flex items-center gap-4 text-accent font-bold uppercase tracking-widest text-[11px] md:text-sm letter-spacing-2">
                        Browse Full Curriculum
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-full border border-accent/30 flex items-center justify-center group-hover:bg-accent group-hover:text-primary transition-all duration-500 shrink-0">
                            <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-12">
                @foreach($featuredCourses as $course)
                    <div class="@if($themeMode == 'dark') bg-[#111111] @else bg-white @endif rounded-[2rem] md:rounded-[2.5rem] overflow-hidden group transition-all duration-700 gold-border shadow-sm hover:translate-y-[-10px] hover:shadow-[0_40px_80px_-20px_rgba(212,175,55,0.15)] flex flex-col h-full">
                        <div class="relative h-60 md:h-72 overflow-hidden">
                            <img src="{{ $course->image_path ? asset($course->image_path) : asset('learmyimages/leramy5.jpeg') }}" alt="{{ $course->title }}" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-[1s]">
                            <div class="absolute top-4 left-4 md:top-6 md:left-6">
                                <span class="bg-black/80 backdrop-blur-md px-3 py-1 md:px-4 md:py-1.5 rounded-full text-[9px] md:text-[10px] font-black text-accent uppercase tracking-[0.2em] border border-accent/20">{{ $course->category }}</span>
                            </div>
                        </div>
                    <div class="p-8 md:p-10 flex-grow relative" data-aos="fade-up">
                        <h4 class="text-2xl md:text-3xl font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-4 md:mb-6 group-hover:text-accent transition-colors">{{ $course->title }}</h4>
                        <p class="@if($themeMode == 'dark') text-gray-500 @else text-gray-600 @endif mb-6 md:mb-8 line-clamp-3 fluid-text-p leading-relaxed font-light">
                            {{ $course->description }}
                        </p>
                            <div class="flex flex-wrap gap-4 mb-8">
                                @if($course->features)
                                    @foreach(array_slice(explode("\n", $course->features), 0, 3) as $feature)
                                        <div class="flex items-center gap-2 text-xs font-bold @if($themeMode == 'dark') text-gray-400 @else text-gray-500 @endif uppercase tracking-wider">
                                            <div class="w-1.5 h-1.5 rounded-full bg-accent"></div>
                                            {{ $feature }}
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="p-10 pt-0">
                            <a href="{{ route('course.show', $course->slug) }}" class="w-full py-4 rounded-2xl border border-accent/20 text-center font-black uppercase text-xs tracking-[0.3em] hover:bg-accent hover:text-primary transition-all duration-500 block">Explore Course</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Glimpses of Learmy -->
    <section class="py-20 md:py-32 @if($themeMode == 'dark') bg-black @else bg-white @endif relative overflow-hidden">
        <div class="container relative z-10 px-4 md:px-6">
            <div class="text-center mb-16 md:mb-24">
                <h2 class="text-accent uppercase tracking-[0.5em] font-black text-[10px] md:text-xs mb-6 md:mb-8 block">Experience Learmy</h2>
                <h3 class="fluid-text-h2 font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif leading-tight">Institute <span class="text-gradient font-normal italic">Glimpses</span></h3>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Video 1 -->
                <div class="relative rounded-[2rem] overflow-hidden gold-border-thin shadow-xl aspect-[4/5] md:aspect-video group bg-black" data-aos="fade-up">
                    <video muted loop playsinline class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-700" onmouseover="this.play()" onmouseout="this.pause()">
                        <source src="{{ asset('learmyimages/laermy2.mp4') }}" type="video/mp4">
                    </video>
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-all pointer-events-none"></div>
                    <div class="absolute bottom-6 left-6 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-accent/90 flex items-center justify-center text-primary backdrop-blur-sm">
                            <svg class="w-4 h-4 ml-0.5" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                        <span class="text-white text-[10px] font-black uppercase tracking-widest hidden group-hover:block transition-all">Practical Session</span>
                    </div>
                </div>

                <!-- Video 2 -->
                <div class="relative rounded-[2rem] overflow-hidden gold-border-thin shadow-xl aspect-[4/5] md:aspect-video group bg-black" data-aos="fade-up" data-aos-delay="100">
                    <video muted loop playsinline class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-700" onmouseover="this.play()" onmouseout="this.pause()">
                        <source src="{{ asset('learmyimages/laermy3.mp4') }}" type="video/mp4">
                    </video>
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-all pointer-events-none"></div>
                    <div class="absolute bottom-6 left-6 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-accent/90 flex items-center justify-center text-primary backdrop-blur-sm">
                            <svg class="w-4 h-4 ml-0.5" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                        <span class="text-white text-[10px] font-black uppercase tracking-widest hidden group-hover:block transition-all">Student Performance</span>
                    </div>
                </div>

                <!-- Image 1 -->
                <div class="relative rounded-[2rem] overflow-hidden gold-border-thin shadow-xl aspect-video group" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('learmyimages/laermy8.jpeg') }}" alt="Learmy Institute activity" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-[1.5s]">
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-all"></div>
                </div>

                <!-- Video 3 -->
                <div class="relative rounded-[2rem] overflow-hidden gold-border-thin shadow-xl aspect-[4/5] md:aspect-video group bg-black" data-aos="fade-up">
                    <video muted loop playsinline class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-700" onmouseover="this.play()" onmouseout="this.pause()">
                        <source src="{{ asset('learmyimages/laermy4.mp4') }}" type="video/mp4">
                    </video>
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-all pointer-events-none"></div>
                </div>

                <!-- Video 4 -->
                <div class="relative rounded-[2rem] overflow-hidden gold-border-thin shadow-xl aspect-[4/5] md:aspect-video group bg-black" data-aos="fade-up" data-aos-delay="100">
                    <video muted loop playsinline class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-700" onmouseover="this.play()" onmouseout="this.pause()">
                        <source src="{{ asset('learmyimages/laermy9.mp4') }}" type="video/mp4">
                    </video>
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-all pointer-events-none"></div>
                </div>

                <!-- Enroll CTA card -->
                <div class="relative rounded-[2rem] overflow-hidden gold-border bg-accent p-8 flex flex-col justify-center items-center text-center group" data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_50%,rgba(255,255,255,0.2),transparent)]"></div>
                    <h4 class="text-primary font-serif font-bold text-2xl mb-4 relative z-10">Want to join us?</h4>
                    <p class="text-primary/80 text-sm mb-6 relative z-10">Start your musical and academic journey today.</p>
                    <a href="{{ route('contact') }}" class="py-3 px-8 rounded-full bg-white text-gray-900 font-black uppercase text-[10px] tracking-widest hover:scale-105 transition-transform relative z-10 shadow-lg">Register Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-20 md:py-32 lg:py-40 @if($themeMode == 'dark') bg-[#0A0A0A] @else bg-white @endif relative overflow-hidden">
        <div class="absolute top-1/2 left-0 -translate-y-1/2 w-[20rem] md:w-[40rem] h-[20rem] md:h-[40rem] bg-accent/5 rounded-full blur-[100px] md:blur-[140px] pointer-events-none"></div>
        <div class="container relative z-10">
            <div class="text-center max-w-4xl mx-auto mb-16 md:mb-24 px-4">
                <h2 class="text-accent uppercase tracking-[0.5em] font-black text-[10px] md:text-xs mb-6 md:mb-8 block">Unrivaled Quality</h2>
                <h3 class="fluid-text-h2 font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-8 md:mb-10 leading-tight">Elite Standards for <br><span class="text-gradient font-normal italic">Visionary Students</span></h3>
                <div class="w-20 h-1 bg-accent/30 mx-auto rounded-full"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 lg:gap-10">
                @php
                    $chooseUs = [
                        ['Expert Faculty', 'Certified musicians and experienced educators from top global institutions.', 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z'],
                        ['Modern Labs', 'State-of-the-art music studios and science labs for immersive learning.', 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.638.319a2 2 0 01-.894.223h-1.244a2 2 0 01-.894-.223l-.638-.319a6 6 0 00-3.86-.517l-2.387.477a2 2 0 00-1.022.547l-1.022 4.091a1 1 0 00.97 1.242h18.286a1 1 0 00.97-1.242l-1.022-4.091z'],
                        ['Personalized', 'Small batch sizes Ensuring individual attention to every student.', 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04'],
                        ['Global Network', 'Opportunities for international certifications and performances.', 'M13 10V3L4 14h7v7l9-11h-7z']
                    ];
                @endphp
                @foreach($chooseUs as $f)
                <div class="p-8 md:p-10 @if($themeMode == 'dark') bg-black/50 border-gray-800 @else bg-[#FDFBF7] border-accent/10 @endif border rounded-[2.5rem] md:rounded-[3rem] group hover:border-accent/40 transition-all duration-700 shadow-sm hover:shadow-xl hover:translate-y-[-5px]">
                    <div class="w-12 h-12 md:w-16 md:h-16 rounded-xl md:rounded-2xl bg-accent text-primary flex items-center justify-center mb-6 md:mb-8 shadow-lg group-hover:scale-110 group-hover:rotate-3 transition-transform duration-500 shrink-0">
                        <svg class="w-6 h-6 md:w-8 md:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $f[2] }}"></path></svg>
                    </div>
                    <h4 class="text-xl md:text-2xl font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-4 font-serif">{{ $f[0] }}</h4>
                    <p class="@if($themeMode == 'dark') text-gray-500 @else text-gray-700 @endif leading-relaxed fluid-text-p">{{ $f[1] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-20 md:py-32 lg:py-40 @if($themeMode == 'dark') bg-black @else bg-[#F9F9F9] @endif relative overflow-hidden">
        <div class="container relative z-10 px-4 md:px-6">
            <div class="text-center mb-16 md:mb-24">
                <h2 class="text-accent uppercase tracking-[0.5em] font-black text-[10px] md:text-xs mb-6 md:mb-8 block">Success Stories</h2>
                <h3 class="fluid-text-h2 font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif leading-tight">Elite <span class="text-gradient font-normal italic">Testimonials</span></h3>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12">
                @foreach($testimonials as $testimonial)
                    <div class="@if($themeMode == 'dark') bg-[#111111] @else bg-white @endif p-8 md:p-12 lg:p-16 rounded-[2.5rem] md:rounded-[4rem] gold-border-thin relative shadow-sm group hover:shadow-2xl transition-all duration-700">
                        <svg class="absolute top-8 right-8 md:top-12 md:right-12 w-12 h-12 md:w-20 md:h-20 text-accent/5" fill="currentColor" viewBox="0 0 32 32"><path d="M10 8v8h6v-8h-6zM22 8v8h6v-8h-6zM10 20c0 4.418 3.582 8 8 8s8-3.582 8-8h-2c0 3.314-2.686 6-6 6s-6-2.686-6-6h-4z"></path></svg>
                        
                        <div class="flex items-center gap-1 mb-6 md:mb-8">
                            @for($i = 0; $i < $testimonial->rating; $i++)
                                <svg class="w-3 h-3 md:w-4 md:h-4 text-accent" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            @endfor
                        </div>
                        
                        <blockquote class="text-xl md:text-2xl @if($themeMode == 'dark') text-gray-300 @else text-gray-700 @endif italic mb-10 md:mb-12 leading-relaxed font-serif">
                            "{{ $testimonial->feedback }}"
                        </blockquote>
                        
                        <div class="flex items-center gap-4 md:gap-6">
                            <div class="w-12 h-12 md:w-16 md:h-16 rounded-full transition-all duration-700 ring-2 ring-accent/20 overflow-hidden shrink-0">
                                <img src="{{ $testimonial->image_path ? asset($testimonial->image_path) : 'https://ui-avatars.com/api/?name='.urlencode($testimonial->student_name).'&background=D4AF37&color=1A1A1A' }}" alt="{{ $testimonial->student_name }}" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h5 class="text-base md:text-lg @if($themeMode == 'dark') text-white @else text-gray-900 @endif font-black tracking-tight">{{ $testimonial->student_name }}</h5>
                                <p class="text-[10px] md:text-xs text-accent font-bold uppercase tracking-widest">{{ $testimonial->program }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Recent Blogs -->
    <section class="pt-20 md:pt-32 pb-4 md:pb-8 @if($themeMode == 'dark') bg-[#0F0F0F] @else bg-white @endif">
        <div class="container px-4 md:px-6">
            <div class="flex flex-col md:flex-row justify-between items-center md:items-end mb-16 md:mb-24 gap-8">
                <div class="max-w-2xl text-center md:text-left">
                    <h2 class="text-accent uppercase tracking-[0.4em] font-black text-[10px] md:text-xs mb-6 md:mb-8 underline decoration-accent/30 decoration-4 underline-offset-8">Journal</h2>
                    <h3 class="fluid-text-h2 font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif leading-tight">Elite <span class="text-gradient font-normal italic">Insights</span></h3>
                </div>
                <div class="mt-4 md:mt-0">
                    <a href="{{ route('blog') }}" class="px-8 md:px-10 py-4 md:py-5 rounded-full border border-accent/20 font-bold uppercase tracking-widest text-[9px] md:text-[10px] hover:border-accent transition-all duration-500 @if($themeMode == 'dark') text-white @else text-gray-900 @endif">
                        View All Stories
                    </a>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-16">
                @foreach($recentBlogs as $blog)
                    <article class="group">
                        <div class="relative h-[450px] rounded-[3rem] overflow-hidden mb-10 gold-border transition-all duration-700 group-hover:rounded-[2rem]">
                            <img src="{{ $blog->image_path ? asset($blog->image_path) : asset('public/learmyimages/learmy6.jpeg') }}" alt="{{ $blog->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-[1.5s]">
                            <div class="absolute inset-x-0 bottom-0 p-10 bg-gradient-to-t from-black via-black/40 to-transparent">
                                <span class="text-accent text-[10px] font-black uppercase tracking-[0.3em] block mb-4">{{ $blog->created_at->format('M d, Y') }}</span>
                                <h4 class="text-3xl font-serif font-bold text-white transition-colors">
                                    <a href="{{ route('blog.show', $blog->slug) }}">{{ $blog->title }}</a>
                                </h4>
                            </div>
                        </div>
                        <p class="text-gray-500 mb-8 line-clamp-3 leading-relaxed text-lg font-light">{{ Str::limit(strip_tags($blog->content), 150) }}</p>
                        <a href="{{ route('blog.show', $blog->slug) }}" class="inline-flex items-center gap-3 text-accent font-black uppercase text-[10px] tracking-[0.3em] group/link">
                            Read Mastery
                            <svg class="w-4 h-4 group-hover/link:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="pt-4 md:pt-8 pb-20 md:pb-32 @if($themeMode == 'dark') bg-black @else bg-[#FDFBF7] @endif relative overflow-hidden">
        <div class="container px-4 md:px-6">
            <div class="relative bg-[#0A0A0A] p-10 md:p-24 lg:p-32 rounded-[3rem] md:rounded-[5rem] overflow-hidden shadow-2xl gold-border-thick transition-all duration-1000 group">
                <!-- Sophisticated background visual -->
                <div class="absolute inset-0 z-0 overflow-hidden">
                    <img src="{{ asset('learmyimages/laermy7.jpeg') }}" alt="Texture" class="w-full h-full object-cover opacity-50 transition-transform duration-[3s] group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-black via-black/95 to-accent/20 mix-blend-overlay"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-black/40"></div>
                </div>

                <!-- Abstract blobs -->
                <div class="absolute -top-40 -right-40 w-[30rem] md:w-[60rem] h-[30rem] md:h-[60rem] bg-accent/20 rounded-full blur-[120px] md:blur-[180px] pointer-events-none animate-pulse"></div>
                <div class="absolute -bottom-40 -left-40 w-[20rem] md:w-[50rem] h-[20rem] md:h-[50rem] bg-accent/10 rounded-full blur-[100px] md:blur-[160px] pointer-events-none" style="animation: pulse 8s infinite;"></div>
                
                <div class="relative z-10 text-center max-w-4xl mx-auto">
                    <h3 class="fluid-text-h1 font-serif font-bold text-white mb-6 md:mb-12 leading-[1.1] md:leading-[0.9] tracking-tighter">Your Legacy <br class="hidden md:block"> Starts <span class="text-gradient font-normal italic">Today.</span></h3>
                    <p class="fluid-text-p text-gray-400 mb-10 md:mb-16 leading-relaxed font-light max-w-2xl mx-auto">Join the elite ranks of Learmy students. Experience an education that transcends traditional boundaries.</p>
                    
                    <div class="flex flex-col sm:flex-row justify-center gap-6 md:gap-8">
                        <a href="{{ route('contact') }}" class="gold-button text-primary-foreground font-black py-4 md:py-6 px-10 md:px-16 rounded-full text-center text-sm md:text-xl uppercase shadow-2xl flex items-center justify-center gap-3 md:gap-4 group transition-all duration-500 hover:scale-105 active:scale-95">
                            Book Private Tour
                            <svg class="w-5 h-5 md:w-6 md:h-6 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
