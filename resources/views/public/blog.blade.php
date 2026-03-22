@extends('layouts.public')

@section('title', 'Insights & Articles | Learmy Educoach Institute')
@section('meta_description', 'Read our latest articles on music theory, academic strategies, and student success stories. Stay informed with Learmy Educoach Journal.')
@section('meta_keywords', 'music blog, education articles, learny journal, music tips, study strategies, learmy insights')

@section('content')
    <!-- Page Header -->
    <header class="pt-48 pb-32 @if($themeMode == 'dark') bg-black @else bg-gray-50 @endif border-b @if($themeMode == 'dark') border-gray-900 @else border-gray-100 @endif overflow-hidden relative">
        <div class="absolute inset-0 opacity-20 pointer-events-none select-none">
            <span class="text-[20rem] font-serif font-black text-accent -top-20 -right-20 absolute rotate-12">JOURNAL</span>
        </div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <span class="inline-block px-4 py-1 rounded-full border border-accent text-accent uppercase tracking-widest text-xs font-black mb-6">Read & Explore</span>
            <h1 class="text-5xl md:text-7xl font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-8 leading-tight">Insightful <span class="text-gradient">Articles</span></h1>
            <p class="text-lg md:text-xl text-gray-500 max-w-2xl mx-auto leading-relaxed">
                Stay updated with our research-backed articles on education, music, and performance.
            </p>
        </div>
    </header>

    <!-- Blogs Grid -->
    <section class="py-24 @if($themeMode == 'dark') bg-primary @else bg-white @endif px-6">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-16">
                @foreach($blogs as $blog)
                    <article class="group">
                        <div class="relative h-96 rounded-[3rem] overflow-hidden mb-10 gold-border flex flex-col justify-end p-10 transition-all duration-700">
                            <img src="{{ $blog->image_path ? asset($blog->image_path) : 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80' }}" alt="{{ $blog->title }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000">
                            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                            
                            <div class="relative z-10 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                <div class="flex gap-4 mb-4">
                                    <span class="bg-accent text-primary px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest">{{ $blog->created_at->format('M d, Y') }}</span>
                                    <span class="bg-white/20 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-black text-white uppercase tracking-widest border border-white/10">By {{ $blog->author }}</span>
                                </div>
                                <h2 class="text-3xl font-serif font-bold text-white group-hover:text-accent transition-colors leading-tight">{{ $blog->title }}</h2>
                                <p class="text-gray-400 mt-4 line-clamp-2 opacity-0 group-hover:opacity-100 transition-opacity duration-700 delay-100">
                                    {{ Str::limit(strip_tags($blog->content), 120) }}
                                </p>
                                <a href="{{ route('blog.show', $blog->slug) }}" class="mt-8 flex items-center gap-2 text-accent font-black uppercase text-xs tracking-widest border border-accent/20 pb-2 w-fit hover:border-accent transition-all">
                                    Read Article
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            <!-- Pagination Support -->
            <div class="mt-24 flex justify-center">
                {{ $blogs->links() }}
            </div>
        </div>
    </section>

    <!-- Detailed Post Layout -->
    <section class="hidden">
        <!-- Placeholder for individual post layout reference -->
    </section>
@endsection
