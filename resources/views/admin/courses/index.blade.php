@extends('layouts.admin')

@section('title', 'Manage Courses')

@section('content')
<div class="bg-white rounded-[2.5rem] p-10 border border-gray-100 shadow-sm">
    <div class="flex items-center justify-between mb-10">
        <h3 class="text-2xl font-bold text-gray-900">Course Inventory</h3>
        <a href="{{ route('admin.courses.create') }}" class="gold-button text-primary font-black px-8 py-3 rounded-2xl uppercase tracking-widest text-xs shadow-xl transition-all">Add New Course</a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead>
                <tr class="border-b border-gray-50">
                    <th class="pb-6 text-[10px] font-black uppercase tracking-widest text-gray-400">Course</th>
                    <th class="pb-6 text-[10px] font-black uppercase tracking-widest text-gray-400">Category</th>
                    <th class="pb-6 text-[10px] font-black uppercase tracking-widest text-gray-400">Featured</th>
                    <th class="pb-6 text-[10px] font-black uppercase tracking-widest text-gray-400">Price</th>
                    <th class="pb-6 text-[10px] font-black uppercase tracking-widest text-gray-400">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-50">
                @foreach($courses as $course)
                <tr class="group">
                    <td class="py-6">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl border border-gray-100 overflow-hidden shrink-0">
                                <img src="{{ $course->image_path ? asset($course->image_path) : 'https://images.unsplash.com/photo-1511379938547-c1f69419868d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80' }}" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 group-hover:text-accent transition-colors">{{ $course->title }}</h4>
                                <p class="text-[10px] text-gray-400 font-bold uppercase">{{ $course->slug }}</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-6">
                        <span class="px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest {{ $course->category == 'music' ? 'bg-blue-50 text-blue-600' : 'bg-purple-50 text-purple-600' }}">{{ $course->category }}</span>
                    </td>
                    <td class="py-6">
                        @if($course->is_featured)
                            <span class="text-accent">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            </span>
                        @else
                            <span class="text-gray-200">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            </span>
                        @endif
                    </td>
                    <td class="py-6 font-bold text-gray-700">
                        {{ $course->price ? '₹'.number_format($course->price) : 'N/A' }}
                    </td>
                    <td class="py-6">
                        <div class="flex items-center gap-3">
                            <a href="{{ route('admin.courses.edit', $course->id) }}" class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                            </a>
                            <form action="{{ route('admin.courses.destroy', $course->id) }}" method="POST" onsubmit="return confirm('Delete this course?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-10">
        {{ $courses->links() }}
    </div>
</div>
@endsection
