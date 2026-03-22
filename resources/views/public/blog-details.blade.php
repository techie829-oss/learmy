@extends('layouts.public')

@section('title', $blog->meta_title ?: $blog->title . ' - ' . config('app.name'))
@section('meta_description', $blog->meta_description ?: \Illuminate\Support\Str::limit(strip_tags($blog->content), 160))
@section('meta_keywords', $blog->meta_keywords ?: 'blog, insights, ' . $blog->title)

@section('content')
    <!-- Page Header -->
    <header class="pt-48 pb-32 @if($themeMode == 'dark') bg-black @else bg-gray-50 @endif border-b @if($themeMode == 'dark') border-gray-900 @else border-gray-100 @endif overflow-hidden relative">
        <div class="container mx-auto px-6 relative z-10 text-center">
            <div class="flex flex-col items-center gap-6 mb-12">
                  <div class="flex gap-4 mb-4">
                      <span class="bg-accent text-primary-foreground px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest">{{ $blog->created_at ? $blog->created_at->format('M d, Y') : 'Recent Post' }}</span>
                      <span class="@if($themeMode == 'dark') bg-white/20 @else bg-gray-800/10 @endif backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-black @if($themeMode == 'dark') text-white @else text-gray-900 @endif uppercase tracking-widest border @if($themeMode == 'dark') border-white/10 @else border-gray-900/10 @endif">By {{ $blog->author ?: 'Learmy Admin' }}</span>
                  </div>
                  <h1 class="text-5xl md:text-8xl font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-8 leading-tight max-w-5xl">{{ $blog->title }}</h1>
                 <div class="w-24 h-1 bg-accent/40 rounded-full mx-auto"></div>
            </div>
        </div>
    </header>

    <!-- Main Blog Content -->
    <section class="py-24 @if($themeMode == 'dark') bg-primary @else bg-white @endif px-6 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 pointer-events-none select-none">
            <span class="text-[30rem] font-serif font-black text-accent -right-40 -top-40 absolute rotate-12">BLOG</span>
        </div>
        <div class="container mx-auto">
            <article class="max-w-4xl mx-auto relative z-10">
                <div class="group relative rounded-[4rem] overflow-hidden gold-border h-[500px] md:h-[700px] mb-20 transition-all duration-700">
                    <img src="{{ $blog->image_path ? asset($blog->image_path) : 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80' }}" alt="{{ $blog->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-40"></div>
                </div>
                
                <div class="prose prose-invert prose-xl text-gray-400 mb-20 leading-relaxed max-w-none border-l-4 border-accent/20 pl-12">
                    <p class="mb-10 @if($themeMode == 'dark') text-white @else text-gray-900 @endif italic text-3xl font-serif leading-relaxed">
                        {{ Str::limit(strip_tags($blog->content), 200) }}
                    </p>
                    <div class="blog-content text-gray-500 space-y-8">
                         {!! nl2br(e($blog->content)) !!}
                    </div>
                </div>

                <div class="border-t @if($themeMode == 'dark') border-gray-800 @else border-gray-100 @endif pt-20 mt-20 flex flex-col md:flex-row items-center justify-between gap-12 text-center md:text-left">
                    <div class="flex items-center gap-6">
                        <div class="w-20 h-20 rounded-full overflow-hidden border-2 border-accent/20">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($blog->author ?: 'Admin') }}&background=D4AF37&color=1A1A1A" alt="{{ $blog->author }}">
                        </div>
                        <div>
                             <h4 class="@if($themeMode == 'dark') text-white @else text-gray-900 @endif font-serif font-bold text-2xl mb-1">{{ $blog->author ?: 'Learmy Editorial Team' }}</h4>
                             <p class="text-accent text-[10px] uppercase tracking-widest font-black">Senior Content Strategist</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                         <a href="{{ route('blog') }}" class="text-gray-600 hover:text-accent font-black uppercase tracking-widest text-xs transition-colors flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                            Explore More Posts
                         </a>
                    </div>
                </div>
            </article>

            <!-- Final Blog Call to Action -->
            <div class="mt-40 max-w-5xl mx-auto @if($themeMode == 'dark') bg-black @else bg-gray-50 @endif p-12 md:p-24 rounded-[5rem] @if($themeMode == 'dark') border-accent/20 @else border-gray-200 @endif border text-center overflow-hidden relative group">
                <div class="absolute -bottom-20 -right-20 w-80 h-80 bg-accent/10 rounded-full blur-[100px] group-hover:bg-accent/20 transition-all duration-700"></div>
                <h3 class="text-4xl md:text-7xl font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-8">Join the Conversation</h3>
                <p class="text-gray-500 mb-12 max-w-2xl mx-auto text-xl">Get our latest insights on music, academics, and success directly in your inbox. No spam, only excellence.</p>
                <div class="flex flex-col sm:flex-row justify-center gap-6 relative z-10">
                     <input type="email" placeholder="Enter your email" class="px-10 py-5 @if($themeMode == 'dark') bg-primary border-gray-800 @else bg-white border-gray-200 @endif border-b rounded-3xl outline-none focus:border-accent @if($themeMode == 'dark') text-white @else text-gray-900 @endif transition-colors flex-grow max-w-md">
                     <button class="gold-button text-primary-foreground font-black py-5 px-12 rounded-3xl uppercase tracking-widest text-xs shadow-2xl">Subscribe Journal</button>
                </div>
            </div>
        </div>
    </section>
@endsection
