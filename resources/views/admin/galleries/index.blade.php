@extends('layouts.admin')

@section('title', 'Gallery Management')

@section('content')
@if(session('success'))
    <div class="mb-6 bg-green-50 border border-green-100 text-green-700 rounded-2xl p-5 flex items-center gap-3">
        <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
        {{ session('success') }}
    </div>
@endif
<div class="bg-white rounded-[2.5rem] p-10 border border-gray-100 shadow-sm">
    <div class="flex items-center justify-between mb-10">
        <h3 class="text-2xl font-bold text-gray-900">Media Gallery</h3>
        <a href="{{ route('admin.galleries.create') }}" class="gold-button text-primary font-black px-8 py-3 rounded-2xl uppercase tracking-widest text-xs shadow-xl transition-all">Add Media Item</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        @foreach($galleries as $item)
        <div class="group relative bg-gray-50 rounded-[2.5rem] overflow-hidden border border-gray-100 hover:border-accent/40 transition-all duration-500">
            <div class="aspect-square overflow-hidden">
                @if($item->type == 'image')
                    <img src="{{ asset($item->file_path) }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                @else
                    <div class="w-full h-full bg-dark flex flex-col items-center justify-center text-accent">
                        <svg class="w-12 h-12 mb-2" fill="currentColor" viewBox="0 0 24 24"><path d="M21.584 7.176l-4.584 2.292v-1.468c0-1.104-.896-2-2-2h-12c-1.104 0-2 .896-2 2v10c0 1.104.896 2 2 2h12c1.104 0 2-.896 2-2v-1.468l4.584 2.292c.452.226.916-.07.916-.572v-10.476c0-.502-.464-.798-.916-.572z"/></svg>
                        <span class="text-[10px] uppercase font-black tracking-widest">Video Link</span>
                    </div>
                @endif
            </div>
            
            <div class="p-6">
                <h4 class="font-bold text-gray-900 mb-4 truncate">{{ $item->title ?: 'Untitled Media' }}</h4>
                <div class="flex justify-between items-center">
                    <span class="text-[10px] font-black uppercase tracking-widest {{ $item->type == 'image' ? 'text-blue-500' : 'text-accent' }}">{{ $item->type }}</span>
                    <div class="flex gap-2">
                        <a href="{{ route('admin.galleries.edit', $item->id) }}" class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                        </a>
                        <form action="{{ route('admin.galleries.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Remove this item?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="p-2 text-red-600 hover:bg-red-50 rounded-lg">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-10">
        {{ $galleries->links() }}
    </div>
</div>
@endsection
