<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('app.name', 'Learmy Educoach Institute'))</title>
    
    <!-- Meta SEO -->
    <meta name="description" content="@yield('meta_description', 'Learmy Educoach Institute of Music and Academics - Premium education for music and academic excellence.')">
    <meta name="keywords" content="@yield('meta_keywords', 'music classes, academic coaching, piano, guitar, mathematics, science, music institute')">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', config('app.name', 'Learmy Educoach Institute'))">
    <meta property="og:description" content="@yield('meta_description', 'Learmy Educoach Institute of Music and Academics - Premium education for music and academic excellence.')">
    <meta property="og:image" content="{{ asset('logo.jpeg') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('title', config('app.name', 'Learmy Educoach Institute'))">
    <meta property="twitter:description" content="@yield('meta_description', 'Learmy Educoach Institute of Music and Academics - Premium education for music and academic excellence.')">
    <meta property="twitter:image" content="{{ asset('logo.jpeg') }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">


    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: @if($themeMode == 'dark') '#1A1A1A' @else '#FFFFFF' @endif,
                            foreground: @if($themeMode == 'dark') '#FFFFFF' @else '#1A1A1A' @endif,
                        },
                        accent: '#D4AF37',
                        accentLight: '#E5C45C',
                        surface: @if($themeMode == 'dark') '#000000' @else '#F9FAFB' @endif,
                        borderDefault: @if($themeMode == 'dark') 'rgba(212, 175, 55, 0.2)' @else 'rgba(212, 175, 55, 0.1)' @endif,
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'Inter', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    }
                }
            }
        }
    </script>
    
    <style>
        :root {
            --spacing-xs: clamp(0.5rem, 1vw, 0.75rem);
            --spacing-sm: clamp(0.75rem, 1.5vw, 1rem);
            --spacing-md: clamp(1.25rem, 2.5vw, 2rem);
            --spacing-lg: clamp(2rem, 4vw, 4rem);
            --spacing-xl: clamp(4rem, 8vw, 8rem);
        }

        .fluid-text-h1 { font-size: clamp(2.5rem, 8vw, 6.5rem); }
        .fluid-text-h2 { font-size: clamp(2rem, 5vw, 4rem); }
        .fluid-text-p { font-size: clamp(1rem, 1.2vw, 1.125rem); }

        .glass-nav {
            background: @if($themeMode == 'dark') rgba(15, 15, 15, 0.7) @else rgba(255, 255, 255, 0.8) @endif;
            backdrop-filter: blur(24px) saturate(180%);
            -webkit-backdrop-filter: blur(24px) saturate(180%);
            box-shadow: @if($themeMode == 'dark') 0 4px 30px rgba(0, 0, 0, 0.5) @else 0 4px 60px rgba(212, 175, 55, 0.05) @endif;
            border-bottom: 1px solid @if($themeMode == 'dark') rgba(212, 175, 55, 0.15) @else rgba(212, 175, 55, 0.1) @endif;
            transition: all 0.4s ease;
        }
        
        .glass-nav-scrolled {
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
            background: @if($themeMode == 'dark') rgba(10, 10, 10, 0.95) @else rgba(255, 255, 255, 0.98) @endif;
        }

        /* Responsive Container */
        .container {
            width: 100%;
            max-width: 1200px;
            margin-right: auto;
            margin-left: auto;
            padding-right: var(--spacing-md);
            padding-left: var(--spacing-md);
        }
        @media (min-width: 1536px) {
            .container {
                max-width: 1400px;
            }
        }
        
        /* Premium Noise/Grain effect for light theme */
        .light-premium-bg::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://www.transparenttextures.com/patterns/clean-gray-paper.png');
            opacity: 0.03;
            pointer-events: none;
            z-index: 1;
        }

        .light-premium-card {
            background: @if($themeMode == 'dark') rgba(255, 255, 255, 0.02) @else rgba(255, 255, 255, 0.95) @endif;
            backdrop-filter: blur(10px);
            border: 1px solid @if($themeMode == 'dark') rgba(212, 175, 55, 0.1) @else rgba(212, 175, 55, 0.08) @endif;
            box-shadow: @if($themeMode == 'dark') 0 20px 40px rgba(0,0,0,0.4) @else 0 20px 50px rgba(212, 175, 55, 0.08) @endif;
            transition: all 0.6s cubic-bezier(0.2, 0.8, 0.2, 1);
        }
        .light-premium-card:hover {
            box-shadow: 0 40px 80px rgba(212, 175, 55, 0.15);
            border-color: rgba(212, 175, 55, 0.3);
            transform: translateY(-12px) scale(1.01);
        }

        @keyframes float-gentle {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
        .float-gentle {
            animation: float-gentle 6s ease-in-out infinite;
        }

        .text-gradient {
            background: linear-gradient(135deg, #D4AF37 0%, #B8941E 50%, #D4AF37 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: 200% auto;
            animation: textShine 5s linear infinite;
        }

        @keyframes textShine {
            0% { background-position: 0% center; }
            100% { background-position: 200% center; }
        }
        .gold-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #D4AF37 0%, #B8941E 100%);
            color: #000;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: none;
            cursor: pointer;
            position: relative;
            z-index: 10;
        }
        .gold-button:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 20px 40px rgba(212, 175, 55, 0.3);
            background: linear-gradient(135deg, #B8941E 0%, #D4AF37 100%);
        }
        .gold-border {
            border: 1px solid rgba(212, 175, 55, 0.3);
        }




        /* Custom Cursor Glow */
        .cursor-glow {
            position: fixed;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(212,175,55,0.06) 0%, transparent 70%);
            pointer-events: none;
            z-index: 9999;
            transform: translate(-50%, -50%);
            transition: opacity 0.3s;
        }

        /* Smooth scroll */
        html {
            scroll-behavior: smooth;
        }

        /* Animated underline for nav links */
        .nav-link-animated {
            position: relative;
        }
        .nav-link-animated::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(to right, #D4AF37, #E5C45C);
            transition: width 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .nav-link-animated:hover::after {
            width: 100%;
        }

        /* Gold shimmer effect */
        @keyframes shimmer {
            0% { background-position: -200% center; }
            100% { background-position: 200% center; }
        }
        .gold-shimmer {
            background: linear-gradient(90deg, #D4AF37 0%, #F5E0A3 25%, #D4AF37 50%, #F5E0A3 75%, #D4AF37 100%);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: shimmer 4s linear infinite;
        }

        /* Parallax float */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        .float-animation {
            animation: float 3s ease-in-out infinite;
        }
    </style>
    
    @yield('styles')
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="@if($themeMode == 'dark') bg-primary text-gray-200 @else bg-white text-gray-900 @endif font-sans selection:bg-accent selection:text-primary">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 glass-nav transition-all duration-300" id="main-nav">
        <!-- Scroll Progress Bar -->
        <div class="absolute bottom-0 left-0 h-[2px] bg-accent transition-all duration-100 ease-out" id="scroll-progress" style="width: 0%"></div>
        <div class="container flex justify-between items-center py-3 md:py-4">
            <a href="{{ route('home') }}" class="flex items-center group transition-transform duration-300 hover:scale-105">
                <div class="relative overflow-hidden rounded-lg md:rounded-xl bg-white p-1 md:p-1.5 shadow-sm gold-border">
                    <img src="{{ asset('logo.jpeg') }}" alt="LEARMY" class="h-10 md:h-14 w-auto object-contain">
                </div>
            </a>
            
            <div class="hidden lg:flex items-center gap-4 xl:gap-8 @if($themeMode == 'dark') text-gray-200 @else text-gray-800 @endif font-bold text-[10px] xl:text-xs uppercase tracking-[0.2em]">
                <a href="{{ route('home') }}" class="nav-link-animated hover:text-accent transition-colors py-2 px-1">Home</a>
                <a href="{{ route('about') }}" class="nav-link-animated hover:text-accent transition-colors py-2 px-1">About</a>
                <a href="{{ route('courses') }}" class="nav-link-animated hover:text-accent transition-colors py-2 px-1">Courses</a>
                <a href="{{ route('faculty') }}" class="nav-link-animated hover:text-accent transition-colors py-2 px-1">Faculty</a>
                <a href="{{ route('gallery') }}" class="nav-link-animated hover:text-accent transition-colors py-2 px-1">Gallery</a>
                <a href="{{ route('events') }}" class="nav-link-animated hover:text-accent transition-colors py-2 px-1">Events</a>
                <a href="{{ route('testimonials') }}" class="nav-link-animated hover:text-accent transition-colors py-2 px-1">Testimonials</a>
                <a href="{{ route('contact') }}" class="nav-link-animated hover:text-accent transition-colors py-2 px-1">Contact</a>
            </div>
            
            <div class="flex items-center gap-3 md:gap-6">
                <a href="{{ route('contact') }}" class="gold-button font-black py-2 md:py-3 px-5 md:px-8 rounded-full text-[9px] md:text-[10px] uppercase tracking-[0.3em] shadow-lg">Enroll Now</a>
                <button id="mobile-menu-btn" class="lg:hidden p-2 text-accent" aria-label="Toggle Menu">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                </button>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="@if($themeMode == 'dark') bg-black @else bg-white @endif pt-20 pb-10 border-t gold-border mt-20 relative overflow-hidden">
        @if($themeMode != 'dark')
        <div class="absolute top-0 right-0 w-96 h-96 bg-accent/5 rounded-full blur-[100px] -mr-48 -mt-48"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-accent/5 rounded-full blur-[100px] -ml-48 -mb-48"></div>
        @endif
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16" id="footer-grid">
                <div>
                    <div class="mb-8 group">
                    <img src="{{ asset('logo.jpeg') }}" alt="LEARMY" class="h-16 md:h-24 w-auto object-contain transition-transform duration-500 group-hover:scale-105">
                        <div class="mt-6">
                            <div class="w-32 h-1 bg-accent rounded-full mb-3"></div>
                            <span class="text-lg uppercase tracking-[0.4em] @if($themeMode == 'dark') text-white @else text-gray-900 @endif font-black">Educoach Institute</span>
                        </div>
                    </div>
                    <p class="@if($themeMode == 'dark') text-gray-400 @else text-gray-600 @endif mb-6 leading-relaxed">
                        Empowering talent through a perfect blend of musical artistry and academic excellence. Join us to discover your potential.
                    </p>
                    <div class="flex gap-4">
                        <a href="https://www.facebook.com/people/Learmy-Institute-and-Performing-Arts/61581677499045/" target="_blank" class="w-10 h-10 rounded-full @if($themeMode == 'dark') bg-gray-900 text-white @else bg-gray-200 text-gray-900 @endif border gold-border flex items-center justify-center hover:bg-accent hover:text-primary transition-all">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/></svg>
                        </a>
                        <a href="https://www.instagram.com/learmy_music/" target="_blank" class="w-10 h-10 rounded-full @if($themeMode == 'dark') bg-gray-900 text-white @else bg-gray-200 text-gray-900 @endif border gold-border flex items-center justify-center hover:bg-accent hover:text-primary transition-all">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.332 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.981 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-6 @if($themeMode == 'dark') text-white @else text-gray-900 @endif">Quick Links</h4>
                    <ul class="space-y-4 @if($themeMode == 'dark') text-gray-400 @else text-gray-600 @endif">
                        <li><a href="{{ route('about') }}" class="hover:text-accent">Our Journey</a></li>
                        <li><a href="{{ route('courses') }}" class="hover:text-accent">All Programs</a></li>
                        <li><a href="{{ route('faculty') }}" class="hover:text-accent">Our Trainers</a></li>
                        <li><a href="{{ route('events') }}" class="hover:text-accent">Upcoming Workshops</a></li>
                        <li><a href="{{ route('blog') }}" class="hover:text-accent">Our Blog</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-6 @if($themeMode == 'dark') text-white @else text-gray-900 @endif">Programs</h4>
                    <ul class="space-y-4 @if($themeMode == 'dark') text-gray-400 @else text-gray-600 @endif">
                        <li><a href="#" class="hover:text-accent">Music Mastery</a></li>
                        <li><a href="#" class="hover:text-accent">Academic Success</a></li>
                        <li><a href="#" class="hover:text-accent">Instrument Training</a></li>
                        <li><a href="#" class="hover:text-accent">Competitive Exams</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-6 @if($themeMode == 'dark') text-white @else text-gray-900 @endif">Contact Us</h4>
                    <ul class="space-y-4 @if($themeMode == 'dark') text-gray-400 @else text-gray-600 @endif">
                        <li>
                            <a href="https://www.google.com/maps?q=12.969560623168945,77.7711410522461&z=17&hl=en" target="_blank" class="flex items-start gap-3 group hover:text-accent transition-colors">
                                <svg class="w-6 h-6 text-accent shrink-0 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <span class="text-sm">Shop No-1, Vasupradha Residency, Kaithola Main Road, Nagondanahalli, Bengaluru, 560066</span>
                            </a>
                        </li>
                        <li>
                            <a href="tel:+917483424001" class="flex items-center gap-3 group hover:text-accent transition-colors">
                                <svg class="w-5 h-5 text-accent shrink-0 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                <span class="text-sm">+91 74834 24001</span>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:learmymusic@gmail.com" class="flex items-center gap-3 group hover:text-accent transition-colors">
                                <svg class="w-5 h-5 text-accent shrink-0 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                <span class="text-sm">learmymusic@gmail.com</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="pt-8 border-t @if($themeMode == 'dark') border-gray-900 @else border-gray-200 @endif text-center @if($themeMode == 'dark') text-gray-500 @else text-gray-600 @endif flex flex-col md:flex-row justify-between items-center gap-4">
                <p>&copy; {{ date('Y') }} Learmy Educoach Institute. All rights reserved.</p>
                <div class="flex gap-6">
                    <a href="#" class="hover:text-accent">Privacy Policy</a>
                    <a href="#" class="hover:text-accent">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Guitar Button -->
    <a href="https://wa.me/917483424001" target="_blank" id="whatsappGuitar" class="fixed bottom-8 right-8 z-50 group" title="Chat on WhatsApp">
        <!-- Pulse rings -->
        <div class="absolute inset-0 rounded-full bg-green-500/20 animate-whatsapp-pulse"></div>
        <div class="absolute inset-0 rounded-full bg-green-500/10 animate-whatsapp-pulse-delay"></div>
        
        <!-- Guitar body -->
        <div class="relative guitar-float">
            <svg width="70" height="70" viewBox="0 0 100 100" class="drop-shadow-2xl guitar-rock">
                <!-- Guitar Body (main shape) -->
                <defs>
                    <linearGradient id="guitarGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#D4AF37"/>
                        <stop offset="50%" style="stop-color:#B8941E"/>
                        <stop offset="100%" style="stop-color:#D4AF37"/>
                    </linearGradient>
                    <filter id="guitarGlow">
                        <feGaussianBlur stdDeviation="2" result="glow"/>
                        <feMerge>
                            <feMergeNode in="glow"/>
                            <feMergeNode in="SourceGraphic"/>
                        </feMerge>
                    </filter>
                </defs>
                
                <!-- Guitar body outline -->
                <path d="M50 8 L50 30 
                         C42 30 35 28 30 32 C22 38 20 48 22 55 C18 58 15 63 15 70 C15 82 25 92 38 92
                         L62 92 C75 92 85 82 85 70 C85 63 82 58 78 55 C80 48 78 38 70 32 C65 28 58 30 50 30
                         Z" 
                      fill="url(#guitarGrad)" stroke="#8B7217" stroke-width="1.5" filter="url(#guitarGlow)"/>
                
                <!-- Guitar neck -->
                <rect x="46" y="5" width="8" height="28" rx="2" fill="#8B6914" stroke="#6B5210" stroke-width="0.5"/>
                
                <!-- Guitar frets -->
                <line x1="46" y1="10" x2="54" y2="10" stroke="#D4AF37" stroke-width="0.5" opacity="0.6"/>
                <line x1="46" y1="15" x2="54" y2="15" stroke="#D4AF37" stroke-width="0.5" opacity="0.6"/>
                <line x1="46" y1="20" x2="54" y2="20" stroke="#D4AF37" stroke-width="0.5" opacity="0.6"/>
                <line x1="46" y1="25" x2="54" y2="25" stroke="#D4AF37" stroke-width="0.5" opacity="0.6"/>
                
                <!-- Guitar head/tuning pegs -->
                <rect x="44" y="2" width="12" height="5" rx="2" fill="#6B5210"/>
                <circle cx="46" cy="4" r="1.2" fill="#D4AF37"/>
                <circle cx="50" cy="4" r="1.2" fill="#D4AF37"/>
                <circle cx="54" cy="4" r="1.2" fill="#D4AF37"/>
                
                <!-- Sound hole -->
                <circle cx="50" cy="62" r="10" fill="#1A1A1A" stroke="#8B7217" stroke-width="1"/>
                <circle cx="50" cy="62" r="12" fill="none" stroke="#D4AF37" stroke-width="0.5" opacity="0.4"/>
                
                <!-- WhatsApp icon inside sound hole -->
                <g transform="translate(41, 53) scale(0.38)">
                    <path d="M24 4.557c-5.523 0-10.003 4.48-10.003 10.003 0 1.762.464 3.417 1.274 4.854L14 24l4.696-1.23A9.958 9.958 0 0024 24.563c5.523 0 10.003-4.48 10.003-10.003S29.523 4.557 24 4.557zm0 18.315a8.272 8.272 0 01-4.22-1.157l-.303-.18-3.138.823.837-3.06-.197-.314a8.27 8.27 0 01-1.267-4.424c0-4.583 3.73-8.312 8.312-8.312 4.583 0 8.312 3.73 8.312 8.312 0 4.583-3.73 8.312-8.312 8.312zm4.56-6.224c-.25-.125-1.478-.73-1.707-.813-.229-.083-.395-.125-.562.125s-.645.813-.79.98c-.146.167-.291.188-.541.063-.25-.125-1.055-.389-2.009-1.24-.743-.662-1.244-1.48-1.39-1.73-.146-.25-.016-.385.11-.51.112-.112.25-.291.374-.437.125-.146.167-.25.25-.417.083-.167.042-.312-.021-.437s-.562-1.355-.77-1.855c-.203-.488-.41-.422-.562-.43-.146-.006-.312-.007-.479-.007s-.437.063-.666.312c-.229.25-.875.855-.875 2.084s.896 2.418 1.021 2.584c.125.167 1.762 2.69 4.271 3.772.597.258 1.063.412 1.426.527.599.19 1.144.163 1.575.099.48-.072 1.478-.604 1.687-1.188.208-.583.208-1.083.146-1.188-.063-.104-.229-.167-.479-.291z" fill="#25D366"/>
                </g>
                
                <!-- Guitar strings -->
                <line x1="48" y1="30" x2="48" y2="88" stroke="#F5E0A3" stroke-width="0.3" opacity="0.5" class="guitar-string"/>
                <line x1="50" y1="30" x2="50" y2="88" stroke="#F5E0A3" stroke-width="0.4" opacity="0.5" class="guitar-string"/>
                <line x1="52" y1="30" x2="52" y2="88" stroke="#F5E0A3" stroke-width="0.3" opacity="0.5" class="guitar-string"/>
                
                <!-- Bridge -->
                <rect x="44" y="78" width="12" height="3" rx="1" fill="#6B5210"/>
            </svg>
            
            <!-- "Chat with us" tooltip -->
            <div class="absolute right-full mr-3 top-1/2 -translate-y-1/2 bg-white text-gray-900 px-4 py-2 rounded-xl text-sm font-bold whitespace-nowrap shadow-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
                Chat with us! 🎸
                <div class="absolute top-1/2 -right-1.5 -translate-y-1/2 w-3 h-3 bg-white rotate-45"></div>
            </div>
        </div>
    </a>

    <style>
        /* Guitar rocking animation */
        @keyframes guitarRock {
            0%, 100% { transform: rotate(0deg); }
            25% { transform: rotate(5deg); }
            75% { transform: rotate(-5deg); }
        }
        .guitar-rock {
            animation: guitarRock 2s ease-in-out infinite;
            transform-origin: 50% 10%;
        }
        .guitar-rock:hover {
            animation: guitarRock 0.5s ease-in-out infinite;
        }

        /* Guitar floating animation */
        @keyframes guitarFloat {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-8px); }
        }
        .guitar-float {
            animation: guitarFloat 3s ease-in-out infinite;
        }

        /* WhatsApp pulse */
        @keyframes whatsappPulse {
            0% { transform: scale(1); opacity: 0.4; }
            100% { transform: scale(2.5); opacity: 0; }
        }
        .animate-whatsapp-pulse {
            animation: whatsappPulse 2s ease-out infinite;
        }
        .animate-whatsapp-pulse-delay {
            animation: whatsappPulse 2s ease-out infinite 1s;
        }

        /* String vibration on hover */
        @keyframes stringVibrate {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(0.5px); }
            75% { transform: translateX(-0.5px); }
        }
        #whatsappGuitar:hover .guitar-string {
            animation: stringVibrate 0.1s linear infinite;
        }
    </style>
    <div id="mobile-menu" class="fixed inset-0 lg:hidden @if($themeMode == 'dark') bg-primary @else bg-white @endif z-[99999] overflow-y-auto transform transition-all duration-300 translate-x-full opacity-0">
         <div class="flex flex-col h-full">
            <!-- Mobile Menu Header -->
            <div class="flex justify-between items-center px-6 py-4 border-b gold-border">
                <img src="{{ asset('logo.jpeg') }}" alt="LEARMY" class="h-10 w-auto">
                <button id="close-menu-btn" class="p-2 text-accent">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>

            <div class="flex-grow py-8 px-6 flex flex-col space-y-2">
                @php
                    $navItems = [
                        ['Home', route('home')],
                        ['About Us', route('about')],
                        ['Our Courses', route('courses')],
                        ['Meet Faculty', route('faculty')],
                        ['Gallery', route('gallery')],
                        ['Latest Events', route('events')],
                        ['Testimonials', route('testimonials')],
                        ['Contact Us', route('contact')]
                    ];
                @endphp
                @foreach($navItems as $item)
                <a href="{{ $item[1] }}" class="group flex justify-between items-center py-4 px-4 rounded-xl @if($themeMode == 'dark') hover:bg-white/5 @else hover:bg-black/5 @endif transition-all">
                    <span class="text-2xl font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif group-hover:text-accent">{{ $item[0] }}</span>
                    <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
                @endforeach
            </div>
            
            <div class="p-6 border-t gold-border">
                <a href="{{ route('contact') }}" class="w-full gold-button font-black py-5 rounded-2xl text-center uppercase tracking-[0.2em] shadow-lg">Start Your Journey</a>
            </div>
         </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
             AOS.init({
                 duration: 1000,
                 once: true,
                 easing: 'ease-out-cubic'
             });

             // Mobile Menu Logic
             const btn = document.getElementById('mobile-menu-btn');
             const closeBtn = document.getElementById('close-menu-btn');
             const menu = document.getElementById('mobile-menu');
             
             if (btn && menu) {
                 btn.addEventListener('click', () => {
                    menu.classList.remove('translate-x-full', 'opacity-0');
                    document.body.classList.add('overflow-hidden');
                 });

                 closeBtn.addEventListener('click', () => {
                    menu.classList.add('translate-x-full', 'opacity-0');
                    document.body.classList.remove('overflow-hidden');
                 });

                 // Close menu on link click
                 const menuLinks = menu.querySelectorAll('a');
                 menuLinks.forEach(link => {
                     link.addEventListener('click', () => {
                         menu.classList.add('translate-x-full', 'opacity-0');
                         document.body.classList.remove('overflow-hidden');
                     });
                 });
             }

             // Sticky Scroll & Progress Effect
             const mainNav = document.getElementById('main-nav');
             const progressBar = document.getElementById('scroll-progress');
             
             window.addEventListener('scroll', () => {
                 // Sticky nav
                 if (window.scrollY > 20) {
                     mainNav.classList.add('glass-nav-scrolled');
                 } else {
                     mainNav.classList.remove('glass-nav-scrolled');
                 }

                 // Progress Bar
                 const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
                 const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                 const scrolled = (winScroll / height) * 100;
                 if (progressBar) {
                    progressBar.style.width = scrolled + "%";
                 }
             });
        });
    </script>
    
    @yield('scripts')
</body>
</html>
