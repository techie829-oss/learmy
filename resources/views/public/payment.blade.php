@extends('layouts.public')

@section('title', 'Secure Payment | Learmy Educoach Institute')

@section('styles')
<style>
    .payment-premium-bg {
        background: radial-gradient(circle at 100% 0%, rgba(212, 175, 55, 0.08) 0%, transparent 40%),
                    radial-gradient(circle at 0% 100%, rgba(212, 175, 55, 0.05) 0%, transparent 40%),
                    #FDFAF5; /* Elegant cream background */
        position: relative;
    }
    
    .premium-light-card {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(212, 175, 55, 0.2);
        box-shadow: 0 30px 60px -12px rgba(212, 175, 55, 0.15);
        transition: all 0.5s cubic-bezier(0.2, 0.8, 0.2, 1);
    }
    
    .premium-light-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 40px 80px -15px rgba(212, 175, 55, 0.25);
        border-color: rgba(212, 175, 55, 0.4);
    }
    
    .scan-line-gold {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 3px;
        background: linear-gradient(to right, transparent, #D4AF37, transparent);
        box-shadow: 0 0 10px rgba(212, 175, 55, 0.6);
        animation: scanGold 3.5s ease-in-out infinite;
        z-index: 20;
    }
    
    @keyframes scanGold {
        0%, 100% { top: 0%; opacity: 0; }
        10%, 90% { opacity: 1; }
        50% { top: 100%; }
    }

    .border-gradient-gold {
        border-image: linear-gradient(to bottom, #D4AF37, transparent) 1;
    }

    .shimmer-gold {
        background: linear-gradient(90deg, #B8941E, #D4AF37, #B8941E);
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: shimmer 3s linear infinite;
    }

    @keyframes shimmer {
        0% { background-position: -200% center; }
        100% { background-position: 200% center; }
    }

    .paper-texture {
        background-image: url('https://www.transparenttextures.com/patterns/clean-gray-paper.png');
        background-repeat: repeat;
        opacity: 0.4;
    }
</style>
@endsection

@section('content')
    <!-- Page Header (Light Premium) -->
    <header class="pt-24 md:pt-48 pb-12 md:pb-32 bg-[#FDFAF5] overflow-hidden relative border-b border-accent/10">
        <!-- Textural background -->
        <div class="absolute inset-0 paper-texture pointer-events-none"></div>
        <div class="absolute top-0 right-0 w-[20rem] md:w-[40rem] h-[20rem] md:h-[40rem] bg-accent/5 rounded-full blur-[80px] md:blur-[120px] -mr-20 -mt-20 md:-mr-40 md:-mt-40"></div>
        
        <div class="container relative z-10 text-center px-4">
            <div class="inline-flex items-center gap-3 px-4 md:px-6 py-2 rounded-full border border-accent/20 bg-white mb-6 md:mb-8 shadow-sm" data-aos="fade-down">
                <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-accent"></span>
                <span class="text-accent uppercase tracking-[0.3em] md:tracking-[0.5em] text-[8px] md:text-[10px] font-black italic">ELITE ENROLLMENT</span>
            </div>
            <h1 class="text-4xl md:text-7xl font-serif font-bold text-gray-900 mb-6 md:mb-8 leading-tight tracking-tighter" data-aos="zoom-out">
                Secure <br> <span class="shimmer-gold italic font-normal">Transaction</span>
            </h1>
            <p class="text-sm md:text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed font-light px-2" data-aos="fade-up" data-aos-delay="200">
                Complete your admission process with secure bank transfer or instant QR payment. Our financial portal ensures a seamless experience.
            </p>
        </div>
    </header>

    <!-- Main Payment (Light Premium) -->
    <section class="py-12 md:py-32 payment-premium-bg">
        <div class="container relative z-10 px-4 md:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-24 items-stretch">
                
                <!-- Bank Info Card -->
                <div data-aos="fade-right" class="mb-12 lg:mb-0">
                    <div class="mb-6 md:mb-10 text-center md:text-left">
                        <h2 class="text-accent uppercase tracking-[0.4em] font-black text-xs mb-2 md:mb-4">Method 01</h2>
                        <h3 class="text-2xl md:text-5xl font-serif font-bold text-gray-900">Bank <span class="text-accent italic font-normal">Transfer</span></h3>
                    </div>

                    <div class="premium-light-card p-6 md:p-14 rounded-[2rem] md:rounded-[3rem] border border-accent/10 flex flex-col shadow-lg">
                        <div class="space-y-6 md:space-y-10">
                            <!-- Holder Name -->
                            <div class="pb-6 md:pb-8 border-b border-gray-100">
                                <p class="text-accent uppercase tracking-[0.2em] text-[8px] md:text-[9px] font-black mb-3 md:mb-4">Account Holder Name</p>
                                <p class="text-lg md:text-2xl font-serif font-bold text-gray-900 leading-tight">LEARMY EDUCOACH INSTITUTE OF MUSIC & ACADEMIC</p>
                            </div>

                            <!-- Account Details Grid -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-12">
                                <div class="space-y-3 md:space-y-4">
                                    <p class="text-accent uppercase tracking-[0.2em] text-[8px] md:text-[9px] font-black">Account Number</p>
                                    <div class="flex items-center justify-between p-3 md:p-4 bg-gray-50 rounded-xl md:rounded-2xl border border-gray-100 group transition-all hover:bg-white hover:shadow-md">
                                        <span class="text-base md:text-xl font-mono font-bold text-gray-800 break-all" id="accNumber">50200115320970</span>
                                        <button onclick="copyToClipboard('accNumber')" class="text-accent/40 hover:text-accent transition-colors p-2 shrink-0">
                                            <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="space-y-3 md:space-y-4">
                                    <p class="text-accent uppercase tracking-[0.2em] text-[8px] md:text-[9px] font-black">IFSC Code</p>
                                    <div class="flex items-center justify-between p-3 md:p-4 bg-gray-50 rounded-xl md:rounded-2xl border border-gray-100 group transition-all hover:bg-white hover:shadow-md">
                                        <span class="text-base md:text-xl font-mono font-bold text-gray-800" id="ifscCode">HDFC003637</span>
                                        <button onclick="copyToClipboard('ifscCode')" class="text-accent/40 hover:text-accent transition-colors p-2 shrink-0">
                                            <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Branch/Type -->
                            <div class="flex flex-wrap gap-6 md:gap-10">
                                <div>
                                    <p class="text-accent uppercase tracking-[0.2em] text-[8px] md:text-[9px] font-black mb-1">Branch</p>
                                    <p class="text-sm md:text-base text-gray-700 font-bold">KADUGODI</p>
                                </div>
                                <div>
                                    <p class="text-accent uppercase tracking-[0.2em] text-[8px] md:text-[9px] font-black mb-1">Account Type</p>
                                    <p class="text-sm md:text-base text-gray-700 font-bold">Current Account</p>
                                </div>
                            </div>
                        </div>

                        <!-- Instruction -->
                        <div class="mt-8 md:mt-12 p-4 md:p-6 bg-accent/5 rounded-xl md:rounded-2xl border border-accent/10 flex gap-4">
                            <svg class="w-5 h-5 text-accent shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <p class="text-[11px] md:text-xs text-gray-500 leading-relaxed italic">Kindly share the transaction receipt with the student's name on our official email or WhatsApp for quick enrollment approval.</p>
                        </div>
                    </div>
                </div>

                <!-- QR Card -->
                <div data-aos="fade-left" data-aos-delay="200" class="h-full">
                    <div class="mb-6 md:mb-10 text-center md:text-left">
                        <h2 class="text-accent uppercase tracking-[0.4em] font-black text-xs mb-2 md:mb-4">Method 02</h2>
                        <h3 class="text-2xl md:text-5xl font-serif font-bold text-gray-900">Instant <span class="text-accent italic font-normal">Scan Pay</span></h3>
                    </div>

                    <div class="premium-light-card p-6 md:p-14 rounded-[2rem] md:rounded-[3rem] border border-accent/10 flex flex-col items-center justify-center space-y-8 md:space-y-12">
                        <div class="relative group w-full max-w-[320px] md:max-w-none">
                            <!-- Premium holder -->
                            <div class="absolute -inset-2 bg-gradient-to-tr from-accent/40 via-transparent to-accent/40 rounded-[2.5rem] md:rounded-[3.5rem] p-[1px] opacity-40 group-hover:opacity-100 transition-opacity"></div>
                            
                            <div class="relative bg-white p-3 md:p-6 rounded-[2.2rem] md:rounded-[3.2rem] shadow-sm border border-accent/10">
                                <div class="relative overflow-hidden rounded-[1.5rem] md:rounded-[2rem] w-full max-w-[380px] mx-auto bg-white">
                                    <div class="scan-line-gold"></div>
                                    <img src="{{ asset('learmyimages/learmypayment.jpeg') }}" alt="Learmy Payment QR Code" class="w-full h-auto block object-contain transition-all duration-700 group-hover:scale-[1.02]">
                                </div>
                            </div>

                            <!-- Floating badge -->
                            <div class="absolute -bottom-4 md:-bottom-6 -right-2 md:-right-6 bg-white p-3 md:p-5 rounded-xl md:rounded-2xl shadow-xl border border-accent/10 flex items-center gap-2 md:gap-3 anime-bounce shadow-accent/5">
                                <div class="w-2 md:w-3 h-2 md:h-3 rounded-full bg-green-500"></div>
                                <span class="text-[8px] md:text-[10px] font-black uppercase tracking-widest text-gray-800">Verified UPI</span>
                            </div>
                        </div>

                        <div class="text-center space-y-4 md:space-y-6">
                            <p class="text-base md:text-lg font-serif italic text-gray-600 px-4">Scan using GPay, PhonePe, or BHIM</p>
                            <div class="flex items-center justify-center gap-4 md:gap-6 opacity-60">
                                <span class="text-[9px] md:text-xs font-bold uppercase tracking-widest text-accent flex items-center gap-2">
                                    <div class="w-1 md:w-1.5 h-1 md:h-1.5 rounded-full bg-accent"></div>
                                    Encrypted
                                </span>
                                <span class="text-[9px] md:text-xs font-bold uppercase tracking-widest text-accent flex items-center gap-2">
                                    <div class="w-1 md:w-1.5 h-1 md:h-1.5 rounded-full bg-accent"></div>
                                    Official
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Support Help Section (Light Premium) -->
    <section class="py-12 md:py-32 bg-white px-4">
        <div class="container">
            <div class="relative rounded-[2rem] md:rounded-[4rem] overflow-hidden bg-gradient-to-br from-gray-900 to-black p-8 md:p-24 shadow-2xl text-center">
                <div class="absolute top-0 right-0 w-[20rem] md:w-[30rem] h-[20rem] md:h-[30rem] bg-accent/10 rounded-full blur-[80px] md:blur-[120px] -mr-20 -mt-20 md:-mr-40 md:-mt-40"></div>
                
                <div class="relative z-10 max-w-3xl mx-auto">
                    <h3 class="text-2xl md:text-5xl font-serif font-bold text-white mb-4 md:mb-6">Encountering an <span class="text-accent italic font-normal">Issue?</span></h3>
                    <p class="text-gray-400 text-sm md:text-lg mb-8 md:mb-12 font-light leading-relaxed">Our enrollment concierge is available to guide you through the process. Reach out for immediate assistance.</p>
                    
                    <div class="flex flex-col sm:flex-row justify-center gap-4 md:gap-6">
                        <a href="https://wa.me/917483424001" target="_blank" class="gold-button font-black py-4 px-8 md:px-12 rounded-full uppercase tracking-widest text-[10px] md:text-xs shadow-xl flex items-center justify-center gap-3 group">
                            Help on WhatsApp
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                        <a href="tel:+917483424001" class="px-8 md:px-12 py-4 rounded-full border border-white/20 text-white font-black uppercase tracking-widest text-[10px] md:text-xs hover:bg-white/5 transition-all">
                            Direct Support Call
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Feedback Overlay -->
    <div id="copyToast" class="fixed bottom-10 left-1/2 -translate-x-1/2 bg-gray-900 text-white px-8 py-3 rounded-full font-black text-xs uppercase tracking-[0.2em] transform translate-y-20 opacity-0 transition-all duration-300 z-[999] shadow-2xl">
        Copied to Clipboard
    </div>
@endsection

@section('scripts')
<script>
    function copyToClipboard(elementId) {
        const text = document.getElementById(elementId).innerText;
        navigator.clipboard.writeText(text).then(() => {
            const toast = document.getElementById('copyToast');
            toast.classList.remove('translate-y-20', 'opacity-0');
            toast.classList.add('translate-y-0', 'opacity-100');
            
            setTimeout(() => {
                toast.classList.add('translate-y-20', 'opacity-0');
                toast.classList.remove('translate-y-0', 'opacity-100');
            }, 2000);
        });
    }
</script>
@endsection
