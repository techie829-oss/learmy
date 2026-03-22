@extends('layouts.admin')

@section('title', 'Admin Dashboard Overview')

@section('content')
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
        <div class="bg-white p-8 rounded-[2rem] border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between mb-6">
                <span class="text-xs font-bold text-gray-500 uppercase tracking-widest">Total Courses</span>
                <div class="p-3 bg-blue-50 text-blue-600 rounded-2xl">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.168.477 4.5 1.253m0-1.3l1.832-2.547C14.168 14.477 15.754 14 17.5 14s3.168.477 4.5 1.253V6.253C20.832 5.477 19.246 5 17.5 5s-3.168.477-4.5 1.253"></path></svg>
                </div>
            </div>
            <div class="text-4xl font-bold text-gray-900">{{ $stats['total_courses'] }}</div>
            <p class="text-xs text-gray-500 mt-2">Active academic & music modules</p>
        </div>

        <div class="bg-white p-8 rounded-[2rem] border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between mb-6">
                <span class="text-xs font-bold text-gray-500 uppercase tracking-widest">Faculty Members</span>
                <div class="p-3 bg-accent text-primary rounded-2xl">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
            </div>
            <div class="text-4xl font-bold text-gray-900">{{ $stats['total_faculty'] }}</div>
            <p class="text-xs text-gray-500 mt-2">Certified trainers & educators</p>
        </div>

        <div class="bg-white p-8 rounded-[2rem] border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between mb-6">
                <span class="text-xs font-bold text-gray-500 uppercase tracking-widest">Enquiries</span>
                <div class="p-3 bg-red-50 text-red-600 rounded-2xl relative">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    @if($stats['pending_enquiries'] > 0)
                        <span class="absolute top-0 right-0 w-3 h-3 bg-red-500 rounded-full border-2 border-white"></span>
                    @endif
                </div>
            </div>
            <div class="text-4xl font-bold text-gray-900">{{ $stats['pending_enquiries'] }}</div>
            <p class="text-xs text-gray-500 mt-2">Pending responses required</p>
        </div>

        <div class="bg-white p-8 rounded-[2rem] border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between mb-6">
                <span class="text-xs font-bold text-gray-500 uppercase tracking-widest">News & Blog</span>
                <div class="p-3 bg-purple-50 text-purple-600 rounded-2xl">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                </div>
            </div>
            <div class="text-4xl font-bold text-gray-900">{{ $stats['total_blogs'] }}</div>
            <p class="text-xs text-gray-500 mt-2">Published journal articles</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <!-- Recent Enquiries -->
        <div class="bg-white rounded-[2.5rem] p-10 border border-gray-100 shadow-sm flex flex-col h-full">
            <div class="flex items-center justify-between mb-10">
                <h3 class="text-2xl font-bold">Recent Enquiries</h3>
                <a href="{{ route('admin.enquiries.index') }}" class="text-xs font-black uppercase text-accent hover:underline">View All</a>
            </div>
            
            <div class="space-y-6 flex-grow overflow-y-auto">
                @forelse($recentEnquiries as $enquiry)
                    <div class="flex gap-6 items-start pb-6 border-b border-gray-50 last:border-0 hover:bg-gray-50 transition-colors p-4 rounded-2xl group">
                        <div class="w-12 h-12 rounded-full bg-gray-100 flex items-center justify-center shrink-0">
                            <span class="text-sm font-bold text-gray-500">{{ strtoupper(substr($enquiry->name,0,1)) }}</span>
                        </div>
                        <div class="flex-grow">
                            <div class="flex items-center justify-between mb-1">
                                <h4 class="font-bold text-gray-900 group-hover:text-accent transition-colors">{{ $enquiry->name }}</h4>
                                <span class="text-[10px] text-gray-400 font-bold uppercase">{{ $enquiry->created_at->diffForHumans() }}</span>
                            </div>
                            <p class="text-sm text-gray-600 line-clamp-1 mb-2">{{ $enquiry->subject ?: 'General Enquiry' }}</p>
                            <span class="text-[10px] px-3 py-1 rounded-full border border-gray-200 uppercase font-black text-gray-500">{{ $enquiry->status }}</span>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-20 text-gray-400 italic">No enquiries yet</div>
                @endforelse
            </div>
        </div>

        <!-- Upcoming Events -->
        <div class="bg-white rounded-[2.5rem] p-10 border border-gray-100 shadow-sm flex flex-col h-full">
            <div class="flex items-center justify-between mb-10">
                <h3 class="text-2xl font-bold">Upcoming Workshops</h3>
                <a href="{{ route('admin.events.index') }}" class="text-xs font-black uppercase text-accent hover:underline">Manage Events</a>
            </div>
            
            <div class="space-y-6 flex-grow overflow-y-auto">
                @forelse($upcomingEvents as $event)
                    <div class="flex gap-6 items-center pb-6 border-b border-gray-50 last:border-0 hover:bg-gray-50 transition-colors p-4 rounded-2xl group">
                        <div class="w-16 h-16 rounded-2xl overflow-hidden shrink-0">
                            <img src="{{ $event->image_path ?: 'https://images.unsplash.com/photo-1540575861501-7cf05a4b125a?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80' }}" alt="{{ $event->title }}" class="w-full h-full object-cover">
                        </div>
                        <div class="flex-grow">
                            <h4 class="font-bold text-gray-900 group-hover:text-accent transition-colors">{{ $event->title }}</h4>
                            <p class="text-[10px] text-gray-500 uppercase tracking-widest font-black mt-1">{{ $event->event_date->format('d M, Y') }} • {{ $event->location }}</p>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-20 text-gray-400 italic">No upcoming events scheduled</div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
