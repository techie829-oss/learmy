@extends('layouts.admin')

@section('title', 'Edit Category: ' . $category->name)

@section('content')
<div class="max-w-2xl mx-auto bg-white rounded-[2.5rem] p-12 border border-gray-100 shadow-sm relative overflow-hidden">
    <div class="absolute top-0 right-0 w-64 h-64 bg-accent/5 rounded-full blur-3xl -mr-32 -mt-32"></div>
    
    <div class="relative z-10">
        <div class="mb-12">
            <h3 class="text-3xl font-bold text-gray-900 mb-2">Category Modification</h3>
            <p class="text-gray-500 font-bold uppercase tracking-widest text-[10px]">Step: Update program classification details</p>
        </div>

        <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" class="space-y-10">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="space-y-4">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Category Name</label>
                    <input type="text" name="name" value="{{ old('name', $category->name) }}" required class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-4 text-gray-900 outline-none transition-colors rounded-2xl" placeholder="e.g. Competitive Exams">
                    @error('name')
                        <p class="text-red-500 text-[10px] font-bold mt-1 ml-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-4">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Display Order</label>
                    <input type="number" name="order" value="{{ old('order', $category->order) }}" class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-4 text-gray-900 outline-none transition-colors rounded-2xl" placeholder="0">
                </div>
            </div>

            <div class="flex gap-6 mt-16">
                <button type="submit" class="flex-grow gold-button text-primary font-black py-5 rounded-3xl uppercase tracking-widest text-xs shadow-2xl transition-all">Update Category</button>
                <a href="{{ route('admin.categories.index') }}" class="px-10 py-5 bg-gray-100 text-gray-500 font-bold rounded-3xl uppercase tracking-widest text-xs hover:bg-gray-200 transition-all">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
