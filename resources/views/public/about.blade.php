@extends('layouts.public')

@section('title', 'About Learmy Educoach | Our Story & Vision')
@section('meta_description', 'Discover the story behind Learmy Educoach. Founded by Aman and Pranshi, we provide a perfect blend of music, academics, and holistic development for students of all ages.')
@section('meta_keywords', 'about learmy, Aman Learmy, Pranshi Learmy, music and academics, holistic education Bangalore')

@section('content')
    <!-- Page Header -->
    <header class="pt-24 md:pt-40 lg:pt-48 pb-16 md:pb-24 lg:pb-32 @if($themeMode == 'dark') bg-black @else bg-surface @endif border-b @if($themeMode == 'dark') border-gray-900 @else border-gray-100 @endif overflow-hidden relative">
        @if($themeMode != 'dark')
        <div class="absolute top-0 right-0 w-[20rem] md:w-[40rem] h-[20rem] md:h-[40rem] bg-accent/5 rounded-full blur-[80px] md:blur-[100px] -mr-32 -mt-32 md:-mr-64 md:-mt-64"></div>
        @endif
        <div class="absolute inset-0 opacity-10 md:opacity-20 pointer-events-none select-none">
            <span class="text-[10rem] md:text-[20rem] font-serif font-black text-accent -top-10 md:-top-20 -right-10 md:-right-20 absolute rotate-12">OUR STORY</span>
        </div>
        <div class="container relative z-10 text-center px-4 md:px-6">
            <span class="inline-block px-4 py-1.5 rounded-full border border-accent/20 bg-accent/5 text-accent uppercase tracking-[0.4em] text-[10px] md:text-xs font-black mb-6 md:mb-8 shadow-sm">Established Excellence</span>
            <h1 class="fluid-text-h1 font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-6 md:mb-8 leading-tight">Empowering <span class="text-gradient">Every Student</span></h1>
            <p class="fluid-text-p @if($themeMode == 'dark') text-gray-500 @else text-gray-700 @endif max-w-2xl mx-auto leading-relaxed font-light">
                Learmy Educoach is a dedicated space where creativity meets logic, providing a holistic environment for students to excel in both arts and academics.
            </p>
        </div>
    </header>

    <!-- Content Sections -->
    <section class="py-16 md:py-24 lg:py-32 @if($themeMode == 'dark') bg-primary @else bg-white @endif relative">
        <div class="container px-4 md:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 md:gap-20 items-center mb-24 md:mb-32">
                <div class="group relative rounded-[2.5rem] md:rounded-[4rem] overflow-hidden gold-border h-[400px] md:h-[600px] transition-all duration-1000 shadow-2xl">
                    <img src="{{ asset('public/learmyimages/learmy6.jpeg') }}" alt="Our Institute" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-[2s]">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                </div>
                
                <div class="space-y-12 md:space-y-16">
                    <div>
                        <h2 class="fluid-text-h2 font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-6 md:mb-8 leading-tight text-center lg:text-left">Our <span class="text-gradient">Core Vision</span></h2>
                        <p class="fluid-text-p @if($themeMode == 'dark') text-gray-400 @else text-gray-600 @endif mb-8 leading-relaxed font-light border-l-4 border-accent pl-6 md:pl-10 text-lg">
                            "Our goal is to nurture talent, creativity, and confidence in every student. We offer a perfect blend of academics and extracurricular learning for students of all ages."
                        </p>
                    </div>
    
                    <div class="grid grid-cols-1 gap-8 md:gap-10">
                        <div class="p-8 md:p-10 @if($themeMode == 'dark') bg-black/50 border-gray-800 @else bg-[#FDFBF7] border-accent/10 @endif border rounded-[2rem] group transition-all duration-700 hover:shadow-2xl hover:translate-y-[-5px] gold-border-thin">
                            <h4 class="text-2xl md:text-3xl font-serif font-bold text-accent mb-6">What We Offer</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div class="space-y-4">
                                    <h5 class="font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif uppercase tracking-widest text-sm flex items-center gap-2">
                                        <div class="w-2 h-2 rounded-full bg-accent"></div>
                                        Professional Music
                                    </h5>
                                    <p class="text-sm @if($themeMode == 'dark') text-gray-400 @else text-gray-600 @endif leading-relaxed">Keyboard, Piano, Drums, Guitar, Violin, and Vocal training (Indian, Carnatic, and Western).</p>
                                </div>
                                <div class="space-y-4">
                                    <h5 class="font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif uppercase tracking-widest text-sm flex items-center gap-2">
                                        <div class="w-2 h-2 rounded-full bg-accent"></div>
                                        Academic Success
                                    </h5>
                                    <p class="text-sm @if($themeMode == 'dark') text-gray-400 @else text-gray-600 @endif leading-relaxed">Tuitions for LKG, UKG, and Grades 1 to 12 for all subjects with focus on fundamentals.</p>
                                </div>
                                <div class="space-y-4">
                                    <h5 class="font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif uppercase tracking-widest text-sm flex items-center gap-2">
                                        <div class="w-2 h-2 rounded-full bg-accent"></div>
                                        Holistic Growth
                                    </h5>
                                    <p class="text-sm @if($themeMode == 'dark') text-gray-400 @else text-gray-600 @endif leading-relaxed">Yoga, Karate, and Art & Craft classes to support overall personal development.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Founders Section -->
            <div class="text-center mb-16 md:mb-24 px-4">
                <h2 class="text-accent uppercase tracking-[0.5em] font-black text-xs mb-6 block">The Visionaries</h2>
                <h3 class="fluid-text-h2 font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif leading-tight">Meet Our <span class="text-gradient italic font-normal">Founders</span></h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-20 max-w-6xl mx-auto px-4">
                <!-- Aman -->
                <div class="group text-center" data-aos="fade-up">
                    <div class="relative w-full aspect-[4/5] rounded-[3rem] overflow-hidden mb-8 gold-border-thick shadow-2xl transition-all duration-700 group-hover:shadow-accent/20">
                        <img src="{{ asset('public/learmyimages/amanowner.jfif') }}" alt="Aman - Owner" class="w-full h-full object-cover transition-transform duration-[2s] group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-60 group-hover:opacity-100 transition-opacity"></div>
                        <div class="absolute bottom-8 left-0 right-0 p-6">
                            <h4 class="text-3xl font-serif font-bold text-white mb-2">Aman</h4>
                            <p class="text-accent font-black uppercase tracking-[0.3em] text-[10px]">Founder & Director</p>
                        </div>
                    </div>
                </div>

                <!-- Pranshi -->
                <div class="group text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative w-full aspect-[4/5] rounded-[3rem] overflow-hidden mb-8 gold-border-thick shadow-2xl transition-all duration-700 group-hover:shadow-accent/20">
                        <img src="{{ asset('public/learmyimages/pranshiowner2.jfif') }}" alt="Pranshi - Owner" class="w-full h-full object-cover transition-transform duration-[2s] group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-60 group-hover:opacity-100 transition-opacity"></div>
                        <div class="absolute bottom-8 left-0 right-0 p-6">
                            <h4 class="text-3xl font-serif font-bold text-white mb-2">Pranshi</h4>
                            <p class="text-accent font-black uppercase tracking-[0.3em] text-[10px]">Founder & Managing Director</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Motivation Quote -->
    <section class="py-24 md:py-32 @if($themeMode == 'dark') bg-black @else bg-[#FDFBF7] @endif border-y gold-border">
        <div class="container px-6 text-center max-w-4xl mx-auto">
            <svg class="w-12 h-12 md:w-16 md:h-16 text-accent/20 mb-10 mx-auto" fill="currentColor" viewBox="0 0 32 32"><path d="M10 8v8h6v-8h-6zM22 8v8h6v-8h-6zM10 20c0 4.418 3.582 8 8 8s8-3.582 8-8h-2c0 3.314-2.686 6-6 6s-6-2.686-6-6h-4z"></path></svg>
            <h3 class="text-2xl md:text-3xl lg:text-4xl font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif leading-relaxed italic">
                "At Learmy, we don't just teach subjects; we inspire lives. Our mission is to ensure every student finds their unique voice through the power of music and the strength of academic clarity."
            </h3>
        </div>
    </section>
@endsection
