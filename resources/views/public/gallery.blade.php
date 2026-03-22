@extends('layouts.public')

@section('title', 'Art & Excellence Gallery | Learmy Educoach Institute')
@section('meta_description', 'Explore the visual journey of Learmy Educoach Institute. Photos and videos of our music performances, academic workshops, and student achievements.')
@section('meta_keywords', 'music gallery, learmy photos, music performances, academic workshops, bangalore music school')

@section('content')
    <!-- Page Header -->
    <header class="pt-24 md:pt-40 lg:pt-48 pb-16 md:pb-24 lg:pb-32 @if($themeMode == 'dark') bg-black @else bg-surface @endif border-b @if($themeMode == 'dark') border-gray-900 @else border-gray-100 @endif overflow-hidden relative">
        <div class="absolute inset-0 opacity-20 pointer-events-none select-none">
            <span class="text-[20rem] font-serif font-black text-accent -top-20 -right-20 absolute rotate-12">GALLERY</span>
        </div>
        <div class="container relative z-10 text-center px-4 md:px-6">
            <span class="inline-block px-4 py-1.5 rounded-full border border-accent/20 bg-accent/5 text-accent uppercase tracking-[0.4em] text-[10px] md:text-xs font-black mb-6 md:mb-8 shadow-sm">Visual Journey</span>
            <h1 class="fluid-text-h1 font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-6 md:mb-8 leading-tight">Art & <span class="text-gradient">Excellence</span></h1>
            <p class="fluid-text-p @if($themeMode == 'dark') text-gray-500 @else text-gray-700 @endif max-w-2xl mx-auto leading-relaxed font-light">
                Capturing the moments of creativity, discipline, and achievement at Learmy Educoach Institute.
            </p>
        </div>
    </header>

    <!-- Photo Gallery Section -->
    <section class="py-16 md:py-24 lg:py-32 @if($themeMode == 'dark') bg-primary @else bg-white @endif">
        <div class="container px-4 md:px-6">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12 md:mb-16">
                <div class="mb-6 md:mb-0">
                    <h2 class="text-accent uppercase tracking-[0.3em] font-black text-[10px] md:text-xs mb-4">Our Moments</h2>
                    <h3 class="fluid-text-h2 font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif">Photo <span class="text-gradient italic font-normal">Gallery</span></h3>
                </div>
                <p class="@if($themeMode == 'dark') text-gray-500 @else text-gray-700 @endif max-w-sm leading-relaxed italic border-l border-accent/20 pl-6 text-sm md:text-base font-light">
                    Performances, classroom moments, concerts and more memories captured forever.
                </p>
            </div>
    
            @php $imageCount = $images->count(); @endphp
    
            @if($imageCount > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                    @foreach($images as $index => $image)
                        <div class="group relative {{ $index === 0 && $imageCount > 2 ? 'md:col-span-2 h-[350px] md:h-[500px]' : 'h-[300px] md:h-[380px]' }} border gold-border rounded-[2rem] md:rounded-[3rem] overflow-hidden transition-all duration-700 cursor-pointer shadow-sm hover:shadow-2xl"
                             onclick="openLightbox('{{ asset($image->file_path) }}', '{{ addslashes($image->title ?? 'Gallery') }}')">
                            <img src="{{ asset($image->file_path) }}"
                                 alt="{{ $image->title ?? 'Gallery Image' }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000">
                            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/10 to-transparent opacity-60 md:opacity-0 md:group-hover:opacity-100 transition-opacity"></div>
                            <div class="absolute bottom-6 left-6 p-2 md:p-4 opacity-100 md:opacity-0 md:group-hover:opacity-100 transition-all duration-500 translate-y-0 md:translate-y-4 md:group-hover:translate-y-0">
                                <span class="text-accent uppercase tracking-[0.2em] text-[9px] md:text-[10px] font-black block">{{ $image->title ?: 'Art & Performance' }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <!-- Empty State -->
                <div class="py-16 md:py-24 text-center border @if($themeMode == 'dark') border-gray-800 @else border-gray-100 @endif rounded-[2.5rem] md:rounded-[3rem] bg-gray-50/50">
                    <svg class="w-12 h-12 md:w-16 md:h-16 text-accent/20 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <h3 class="text-xl md:text-2xl font-serif @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-2">Gallery Coming Soon</h3>
                    <p class="text-sm md:text-base @if($themeMode == 'dark') text-gray-500 @else text-gray-700 @endif font-light">Photos from our events and classes will appear here.</p>
                </div>
            @endif
        </div>
    </section>

    <!-- Video Section -->
    <section class="py-24 @if($themeMode == 'dark') bg-black @else bg-gray-50 @endif border-t @if($themeMode == 'dark') border-gray-900 @else border-gray-100 @endif">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16">
                <div>
                    <h2 class="text-accent uppercase tracking-widest font-bold text-sm mb-4">Live Moments</h2>
                    <h3 class="text-4xl md:text-5xl font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif">Video <span class="text-gradient italic font-normal">Showcase</span></h3>
                </div>
                <p class="@if($themeMode == 'dark') text-gray-500 @else text-gray-700 @endif max-w-sm mt-6 md:mt-0 leading-relaxed italic border-l border-accent/20 pl-6 border-r border-accent/20 pr-6">
                    Watch our students and faculty in action during performances and special seminars.
                </p>
            </div>

            @if($videos->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    @foreach($videos as $video)
                        <div class="group border gold-border rounded-[3rem] overflow-hidden relative">
                            <div class="aspect-video">
                                @if($video->video_url)
                                    <iframe class="w-full h-full"
                                        src="{{ $video->video_url }}"
                                        title="{{ $video->title ?? 'Video' }}"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen>
                                    </iframe>
                                @endif
                            </div>
                            @if($video->title)
                                <div class="p-6 @if($themeMode == 'dark') bg-primary @else bg-white @endif">
                                    <p class="text-accent uppercase tracking-widest text-[10px] font-black">{{ $video->title }}</p>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            @else
                <!-- Empty Video State -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    <div class="group h-[350px] border @if($themeMode == 'dark') border-accent/20 @else border-gray-200 @endif rounded-[3rem] overflow-hidden relative bg-black/5 flex flex-col items-center justify-center">
                        <div class="text-accent/20 mb-6">
                            <svg class="w-24 h-24" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                        </div>
                        <p class="text-gray-600 font-bold uppercase tracking-widest text-xs">Video Content Coming Soon</p>
                    </div>
                    <div class="group h-[350px] border @if($themeMode == 'dark') border-accent/20 @else border-gray-200 @endif rounded-[3rem] overflow-hidden relative bg-black/5 flex flex-col items-center justify-center">
                        <div class="text-accent/20 mb-6">
                            <svg class="w-24 h-24" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                        </div>
                        <p class="text-gray-600 font-bold uppercase tracking-widest text-xs">Stay Tuned for Performances</p>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div id="lightbox" class="fixed inset-0 z-[100] bg-black/95 backdrop-blur-xl flex items-center justify-center hidden p-4" onclick="closeLightbox()">
        <button class="absolute top-6 right-6 w-12 h-12 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center text-white transition-all active:scale-90" onclick="closeLightbox()">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
        <div class="max-w-5xl w-full max-h-[85vh] flex flex-col items-center" onclick="event.stopPropagation()">
            <div class="relative w-full h-full flex items-center justify-center">
                <img id="lightboxImg" src="" alt="" class="max-w-full max-h-[75vh] object-contain rounded-xl md:rounded-2xl shadow-2xl transition-transform duration-500 scale-95 md:scale-100">
            </div>
            <p id="lightboxCaption" class="text-center text-accent uppercase tracking-widest text-[10px] md:text-sm font-black mt-6 px-4 py-2 border border-accent/20 rounded-full bg-accent/5"></p>
        </div>
    </div>

    <script>
    function openLightbox(src, caption) {
        document.getElementById('lightboxImg').src = src;
        document.getElementById('lightboxCaption').textContent = caption;
        document.getElementById('lightbox').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }
    function closeLightbox() {
        document.getElementById('lightbox').classList.add('hidden');
        document.body.style.overflow = '';
    }
    document.addEventListener('keydown', e => { if (e.key === 'Escape') closeLightbox(); });
    </script>
@endsection
