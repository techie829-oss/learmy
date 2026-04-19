@extends('layouts.public')

@section('title', 'Music & Academic Programs | Learmy Educoach Institute')
@section('meta_description', 'Explore our elite curriculum at Learmy Educoach. From professional instrument training to advanced academic coaching for toppers. Find your course today.')
@section('meta_keywords', 'music courses, academic programs, piano training, guitar classes, science coaching, mathematics tuition, learmy curriculum')

@section('content')
    <!-- Page Header -->
    <header class="pt-24 md:pt-40 lg:pt-48 pb-16 md:pb-24 lg:pb-32 @if($themeMode == 'dark') bg-black @else bg-surface @endif border-b @if($themeMode == 'dark') border-gray-900 @else border-gray-100 @endif overflow-hidden relative">
        @if($themeMode != 'dark')
        <div class="absolute top-0 right-0 w-[20rem] md:w-[40rem] h-[20rem] md:h-[40rem] bg-accent/5 rounded-full blur-[80px] md:blur-[100px] -mr-32 -mt-32 md:-mr-64 md:-mt-64"></div>
        @endif
        <div class="absolute inset-0 opacity-10 md:opacity-20 pointer-events-none select-none">
            <span class="text-[10rem] md:text-[20rem] font-serif font-black text-accent -top-10 md:-top-20 -right-10 md:-right-20 absolute rotate-12">COURSES</span>
        </div>
        <div class="container relative z-10 text-center px-4 md:px-6">
            <span class="inline-block px-4 py-1.5 rounded-full border border-accent/20 bg-accent/5 text-accent uppercase tracking-[0.4em] text-[10px] md:text-xs font-black mb-6 md:mb-8 shadow-sm">Our Expertise</span>
            <h1 class="fluid-text-h1 font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-6 md:mb-8 leading-tight">Nurturing <span class="text-gradient">Potential</span></h1>
            <p class="fluid-text-p @if($themeMode == 'dark') text-gray-500 @else text-gray-700 @endif max-w-2xl mx-auto leading-relaxed font-light">
                From basic instrument training to advanced academic coaching, explore our wide range of professional programs.
            </p>
        </div>
    </header>

    <!-- Courses Grid -->
    <section class="py-24 @if($themeMode == 'dark') bg-primary @else bg-white @endif">
        <div class="container mx-auto px-6">
            
            <!-- Category Tabs -->
            <div class="flex flex-wrap md:flex-row justify-center gap-3 md:gap-6 mb-12 md:mb-20 px-4">
                <button onclick="filterCourses('all')" id="tab-all" class="course-tab active-tab px-6 md:px-10 py-3 md:py-4 rounded-full bg-accent text-primary-foreground font-black uppercase tracking-widest text-[10px] md:text-sm shadow-xl transition-all hover:scale-105 active:scale-95 whitespace-nowrap">All Programs</button>
                @foreach($categories as $category)
                    <button onclick="filterCourses('{{ $category->slug }}')" id="tab-{{ $category->slug }}" class="course-tab px-6 md:px-10 py-3 md:py-4 rounded-full @if($themeMode == 'dark') bg-black/50 border-gray-800 @else bg-gray-50 border-gray-200 @endif border @if($themeMode == 'dark') text-gray-400 @else text-gray-600 @endif font-black uppercase tracking-widest text-[10px] md:text-sm hover:border-accent hover:text-accent transition-all hover:scale-105 active:scale-95 whitespace-nowrap">{{ $category->name }}</button>
                @endforeach
            </div>

            <div id="courses-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-12 px-4 md:px-0">
                @foreach($courses as $course)
                    <div class="course-card @if($themeMode == 'dark') bg-black/20 @else bg-white @endif rounded-[2rem] md:rounded-[2.5rem] overflow-hidden group transition-all duration-700 gold-border flex flex-col h-full relative shadow-sm hover:translate-y-[-10px] hover:shadow-2xl" data-category="{{ $course->category->slug ?? '' }}">
                        <div class="relative h-60 md:h-72 overflow-hidden">
                            <img src="{{ $course->image_path ? asset($course->image_path) : 'https://images.unsplash.com/photo-1511379938547-c1f69419868d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80' }}" alt="{{ $course->title }}" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000">
                            <div class="absolute top-4 left-4 md:top-6 md:left-6 flex flex-col gap-2 md:gap-3">
                                <span class="bg-black/90 backdrop-blur-xl px-3 py-1 md:px-4 md:py-1.5 rounded-full text-[9px] md:text-[10px] font-black text-accent uppercase tracking-widest border border-accent/20 shrink-0">{{ $course->category->name ?? 'Course' }}</span>
                                @if($course->is_featured)
                                    <span class="bg-accent/20 backdrop-blur-xl px-3 py-1 md:px-4 md:py-1.5 rounded-full text-[9px] md:text-[10px] font-black text-accentLight uppercase tracking-widest border border-accent/40 shrink-0">Best Seller</span>
                                @endif
                            </div>
                        </div>

                        <div class="p-8 md:p-10 relative z-10 flex-grow flex flex-col">
                            <h4 class="text-2xl md:text-3xl font-serif font-bold @if($themeMode == 'dark') text-white @else text-gray-900 @endif mb-4 md:mb-6 group-hover:text-accent transition-colors leading-tight">{{ $course->title }}</h4>
                            <p class="@if($themeMode == 'dark') text-gray-500 @else text-gray-700 @endif mb-6 md:mb-8 line-clamp-3 leading-relaxed fluid-text-p font-light">
                                {{ $course->description }}
                            </p>
                            
                            <div class="space-y-3 md:space-y-4 mb-8 md:mb-10 mt-auto">
                                @if($course->features)
                                    @foreach(explode("\n", $course->features) as $feature)
                                        @if($loop->index < 3)
                                            <div class="flex items-center gap-3 text-xs md:text-sm @if($themeMode == 'dark') text-gray-400 @else text-gray-600 @endif transition-colors font-medium">
                                                <div class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-accent/40 group-hover:bg-accent transition-colors"></div>
                                                {{ $feature }}
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            </div>

                            <a href="{{ route('course.show', $course->slug) }}" class="flex items-center justify-between group/link py-5 md:py-6 border-t @if($themeMode == 'dark') border-gray-800 @else border-gray-100 @endif hover:border-accent/40 mt-auto transition-colors">
                                <div class="flex flex-col">
                                    <span class="@if($themeMode == 'dark') text-white @else text-gray-900 @endif font-black uppercase tracking-[0.2em] text-[10px] md:text-xs">Explore Module</span>
                                    @if($course->indian_online_fee || $course->price)
                                        <span class="text-accent font-serif font-bold text-lg">₹{{ number_format($course->indian_online_fee ?: $course->price) }}</span>
                                    @endif
                                </div>
                                <div class="w-8 h-8 md:w-10 md:h-10 rounded-full @if($themeMode == 'dark') bg-gray-900 @else bg-gray-100 @endif flex items-center justify-center group-hover/link:bg-accent group-hover/link:text-primary-foreground transition-all duration-500 shrink-0">
                                    <svg class="w-3 h-3 md:w-4 md:h-4 group-hover/link:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination Support -->
            <div class="mt-24 flex justify-center">
                {{ $courses->links() }}
            </div>
        </div>
    </section>

    <script>
        function filterCourses(category) {
            const cards = document.querySelectorAll('.course-card');
            const tabs = document.querySelectorAll('.course-tab');

            // Update active tab styles
            tabs.forEach(tab => {
                tab.classList.remove('bg-accent', 'text-primary-foreground', 'shadow-2xl');
                @if($themeMode == 'dark')
                    tab.classList.add('bg-black/50', 'border', 'border-gray-800', 'text-gray-400');
                @else
                    tab.classList.add('bg-gray-50', 'border', 'border-gray-200', 'text-gray-600');
                @endif
            });

            const activeTab = document.getElementById('tab-' + category);
            if(activeTab) {
                @if($themeMode == 'dark')
                    activeTab.classList.remove('bg-black/50', 'border', 'border-gray-800', 'text-gray-400');
                @else
                    activeTab.classList.remove('bg-gray-50', 'border', 'border-gray-200', 'text-gray-600');
                @endif
                activeTab.classList.add('bg-accent', 'text-primary-foreground', 'shadow-2xl');
            }

            // Filter course cards with animation
            cards.forEach(card => {
                if (category === 'all' || card.dataset.category === category) {
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.95) translateY(20px)';
                    card.style.display = '';
                    setTimeout(() => {
                        card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                        card.style.opacity = '1';
                        card.style.transform = 'scale(1) translateY(0)';
                    }, 50);
                } else {
                    card.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.95) translateY(20px)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        }
    </script>
@endsection
