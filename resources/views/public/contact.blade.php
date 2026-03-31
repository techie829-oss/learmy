@extends('layouts.public')

@section('title', 'Contact Learmy Educoach | Get in Touch Today')
@section('meta_description', 'Have questions? Contact Learmy Educoach Institute for admissions, music masterclasses, or academic coaching. Visit our Bengaluru campus.')
@section('meta_keywords', 'contact music school, learmy contact, bangalore education institute, admission query, music school address')

@section('content')
    <!-- Page Header -->
    <header class="pt-24 md:pt-40 lg:pt-48 pb-16 md:pb-24 lg:pb-32 @if($themeMode == 'dark') bg-black @else bg-surface @endif border-b @if($themeMode == 'dark') border-gray-900 @else border-gray-100 @endif overflow-hidden relative">
        @if($themeMode != 'dark')
        <div class="absolute top-0 right-0 w-[20rem] md:w-[40rem] h-[20rem] md:h-[40rem] bg-accent/5 rounded-full blur-[80px] md:blur-[100px] -mr-32 -mt-32 md:-mr-64 md:-mt-64"></div>
        @endif
        <div class="absolute inset-0 opacity-10 md:opacity-20 pointer-events-none select-none">
            <span class="text-[10rem] md:text-[20rem] font-serif font-black text-accent -top-10 md:-top-20 -right-10 md:-right-20 absolute rotate-12">CONTACT</span>
        </div>
        <div class="container relative z-10 text-center px-4 md:px-6">
            <span class="inline-block px-4 py-1.5 rounded-full border border-accent/20 bg-accent/5 text-accent uppercase tracking-[0.4em] text-[10px] md:text-xs font-black mb-6 md:mb-8 shadow-sm">Get in Touch</span>
            <h1 class="fluid-text-h1 font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-6 md:mb-8 leading-tight">We're Here for <span class="text-gradient">You</span></h1>
            <p class="fluid-text-p @if($themeMode == 'dark') text-gray-500 @else text-gray-700 @endif max-w-2xl mx-auto leading-relaxed font-light">
                Have questions about our programs? Our team is ready to help you find the perfect path for your child's growth.
            </p>
        </div>
    </header>

    <!-- Contact Form Section -->
    <section class="py-16 md:py-24 lg:py-32 @if($themeMode == 'dark') bg-primary @else bg-white @endif relative">
        <div class="container px-4 md:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 md:gap-20 items-stretch">
                <!-- Contact Info -->
                <div class="flex flex-col justify-center">
                    <div>
                        <h2 class="fluid-text-h2 font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-8 leading-tight">Reach Out to <span class="text-gradient italic font-normal underline underline-offset-8 decoration-accent/20">Our Experts</span></h2>
                        <p class="fluid-text-p @if($themeMode == 'dark') text-gray-400 @else text-gray-600 @endif mb-12 leading-relaxed max-w-md font-light">Whether it's music masterclasses or academic tutoring, we respond to all enquiries within 24 hours.</p>
                        
                        <div class="space-y-8 md:space-y-12">
                            <a href="https://www.google.com/maps?q=12.969560623168945,77.7711410522461&z=17&hl=en" target="_blank" class="flex gap-6 md:gap-8 group">
                                <div class="w-12 h-12 md:w-16 md:h-16 rounded-full bg-accent/10 border border-accent/20 flex items-center justify-center shrink-0 group-hover:bg-accent group-hover:text-primary transition-all duration-500">
                                    <svg class="w-6 h-6 md:w-8 md:h-8 text-accent group-hover:text-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-lg md:text-xl font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-2 group-hover:text-accent transition-colors">Our Campus</h4>
                                    <p class="text-sm md:text-base text-gray-700 leading-relaxed font-light group-hover:text-gray-300 transition-colors">Shop No-1, Ground Floor, Vasupradha Residency,<br>Kaithola Main Road, Nagondanahalli, Bengaluru, 560066</p>
                                </div>
                            </a>
    
                            <div class="flex gap-6 md:gap-8 group">
                                <div class="w-12 h-12 md:w-16 md:h-16 rounded-full bg-accent/10 border border-accent/20 flex items-center justify-center shrink-0 group-hover:bg-accent group-hover:text-primary transition-all duration-500">
                                    <svg class="w-6 h-6 md:w-8 md:h-8 text-accent group-hover:text-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-lg md:text-xl font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-2">Phone Lines</h4>
                                    <div class="flex flex-col text-sm md:text-base">
                                        <a href="tel:+917483424001" class="text-gray-700 leading-relaxed hover:text-accent transition-colors">+91 74834 24001</a>
                                        <a href="tel:+919696177843" class="text-gray-700 leading-relaxed hover:text-accent transition-colors">+91 96961 77843</a>
                                    </div>
                                </div>
                            </div>
    
                            <div class="flex gap-6 md:gap-8 group">
                                <div class="w-12 h-12 md:w-16 md:h-16 rounded-full bg-accent/10 border border-accent/20 flex items-center justify-center shrink-0 group-hover:bg-accent group-hover:text-primary transition-all duration-500">
                                    <svg class="w-6 h-6 md:w-8 md:h-8 text-accent group-hover:text-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-lg md:text-xl font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-2">Email Support</h4>
                                    <div class="flex flex-col text-sm md:text-base">
                                        <a href="mailto:learmymusic@gmail.com" class="text-gray-700 leading-relaxed hover:text-accent transition-colors">learmymusic@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Card -->
                <div class="@if($themeMode == 'dark') bg-black/40 border-gray-800 @else bg-gray-50 border-gray-100 @endif border p-8 md:p-12 lg:p-16 rounded-[2.5rem] md:rounded-[4rem] gold-border relative overflow-hidden group transition-all duration-500 hover:shadow-[0_40px_80px_-20px_rgba(212,175,55,0.1)]">
                    <div class="absolute -top-20 -right-20 w-64 h-64 bg-accent/5 rounded-full blur-[80px]"></div>
                    
                    @if(session('success'))
                        <div class="bg-accent/20 border border-accent/40 text-accent p-6 rounded-3xl mb-8 flex items-center gap-4 animate-bounce">
                            <svg class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="font-bold text-sm">{{ session('success') }}</span>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6 md:space-y-8 relative z-10">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                            <div class="space-y-2 md:space-y-3">
                                <label class="text-accent uppercase tracking-widest text-[10px] md:text-xs font-black block">Full Name</label>
                                <input type="text" name="name" required class="w-full @if($themeMode == 'dark') bg-[#111111] border-gray-800 @else bg-white border-gray-200 @endif border-b focus:border-accent p-4 md:p-5 @if($themeMode == 'dark') text-white @else text-gray-900 @endif outline-none transition-all rounded-xl font-bold shadow-sm" placeholder="John Doe">
                            </div>
                            <div class="space-y-2 md:space-y-3">
                                <label class="text-accent uppercase tracking-widest text-[10px] md:text-xs font-black block">Email Address</label>
                                <input type="email" name="email" required class="w-full @if($themeMode == 'dark') bg-[#111111] border-gray-800 @else bg-white border-gray-200 @endif border-b focus:border-accent p-4 md:p-5 @if($themeMode == 'dark') text-white @else text-gray-900 @endif outline-none transition-all rounded-xl font-bold shadow-sm" placeholder="john@example.com">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                            <div class="space-y-2 md:space-y-3">
                                <label class="text-accent uppercase tracking-widest text-[10px] md:text-xs font-black block">Phone Number</label>
                                <input type="text" name="phone" required class="w-full @if($themeMode == 'dark') bg-[#111111] border-gray-800 @else bg-white border-gray-200 @endif border-b focus:border-accent p-4 md:p-5 @if($themeMode == 'dark') text-white @else text-gray-900 @endif outline-none transition-all rounded-xl font-bold shadow-sm" placeholder="+91 XXXXX XXXXX">
                            </div>
                            <div class="space-y-2 md:space-y-3">
                                <label class="text-accent uppercase tracking-widest text-[10px] md:text-xs font-black block">Interested In</label>
                                <div class="relative">
                                    <select name="subject" class="w-full @if($themeMode == 'dark') bg-[#111111] border-gray-800 @else bg-white border-gray-200 @endif border-b focus:border-accent p-4 md:p-5 @if($themeMode == 'dark') text-white @else text-gray-900 @endif outline-none transition-all rounded-xl appearance-none font-bold shadow-sm cursor-pointer">
                                        <option value="Music Training">Music Training</option>
                                        <option value="Academic Coaching">Academic Coaching</option>
                                        <option value="Admission Query">Admission Query</option>
                                        <option value="Workshops">Workshops</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none">
                                        <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-2 md:space-y-3">
                            <label class="text-accent uppercase tracking-widest text-[10px] md:text-xs font-black block">Your Message</label>
                            <textarea name="message" rows="4" required class="w-full @if($themeMode == 'dark') bg-[#111111] border-gray-800 @else bg-white border-gray-200 @endif border-b focus:border-accent p-4 md:p-5 @if($themeMode == 'dark') text-white @else text-gray-900 @endif outline-none transition-all rounded-xl font-bold shadow-sm resize-none" placeholder="How can we help you?"></textarea>
                        </div>

                        <button type="submit" class="w-full gold-button text-primary-foreground font-black py-4 md:py-6 rounded-2xl md:rounded-3xl uppercase tracking-[0.2em] text-[11px] md:text-sm shadow-2xl group transition-all duration-500">
                            Send Enquiry
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Payment Link Section -->
    <section class="py-12 md:py-20 @if($themeMode == 'dark') bg-black @else bg-surface @endif border-t @if($themeMode == 'dark') border-gray-900 @else border-gray-100 @endif overflow-hidden relative">
        <div class="container px-4 md:px-6">
            <div class="relative bg-gradient-to-r from-accent/10 via-accent/5 to-transparent p-8 md:p-12 rounded-[2.5rem] border border-accent/20 flex flex-col md:flex-row items-center justify-between gap-8 group hover:border-accent/40 transition-all duration-500 shadow-sm">
                <div class="max-w-xl">
                    <h3 class="text-2xl md:text-3xl font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-4">Direct Enrollment <span class="text-gradient">Payment</span></h3>
                    <p class="text-sm md:text-base @if($themeMode == 'dark') text-gray-400 @else text-gray-600 @endif leading-relaxed">Ready to join our elite family? You can make a direct bank transfer or use our secure QR code for instant session bookings.</p>
                </div>
                <div class="shrink-0">
                    <a href="{{ route('payment') }}" class="gold-button font-black py-4 px-10 rounded-full text-sm uppercase tracking-widest flex items-center gap-3">
                        View Payment Methods
                        <svg class="w-4 h-4 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="h-[600px] w-full border-t @if($themeMode == 'dark') border-accent/20 @else border-gray-100 @endif">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.030352128387!2d77.76886277367147!3d12.969909614918182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae0d006f56d24d%3A0x445d5d92ceae948a!2sVasupradha%20residency!5e0!3m2!1sen!2sin!4v1773940742476!5m2!1sen!2sin" width="100%" height="100%" style="border:0; @if($themeMode == 'dark') filter: invert(90%) hue-rotate(180deg) contrast(90%); @endif" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
@endsection
