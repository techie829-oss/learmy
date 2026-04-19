@extends('layouts.admin')

@section('title', 'Create New Course')

@section('content')
<div class="max-w-4xl mx-auto bg-white rounded-[2.5rem] p-12 border border-gray-100 shadow-sm relative overflow-hidden">
    <div class="absolute top-0 right-0 w-64 h-64 bg-accent/5 rounded-full blur-3xl -mr-32 -mt-32"></div>
    
    <div class="relative z-10">
        <div class="mb-12">
            <h3 class="text-3xl font-bold text-gray-900 mb-2">Module Initiation</h3>
            <p class="text-gray-500 font-bold uppercase tracking-widest text-[10px]">Step: Design a new academic or musical experience</p>
        </div>

        <form action="{{ route('admin.courses.store') }}" method="POST" enctype="multipart/form-data" class="space-y-10">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="space-y-4">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Course Title</label>
                    <input type="text" name="title" value="{{ old('title') }}" required class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-4 text-gray-900 outline-none transition-colors rounded-2xl" placeholder="Professional Piano Mastery">
                </div>

                <div class="space-y-4">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Category</label>
                    <select name="category_id" required class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-4 text-gray-900 outline-none transition-colors rounded-2xl appearance-none">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="space-y-4">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Display Order</label>
                    <input type="number" name="order" value="{{ old('order', 0) }}" class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-4 text-gray-900 outline-none transition-colors rounded-2xl" placeholder="0">
                </div>
            </div>

            <div class="space-y-4">
                <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Program Description</label>
                <textarea name="description" rows="5" required class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-6 text-gray-900 outline-none transition-colors rounded-3xl" placeholder="Describe the course objectives and journey..."></textarea>
            </div>

            <div class="space-y-4">
                <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Key Features (One per line)</label>
                <textarea name="features" rows="4" class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-6 text-gray-900 outline-none transition-colors rounded-3xl font-mono text-sm" placeholder="Feature 1&#10;Feature 2&#10;Feature 3"></textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="space-y-4">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Base Fee (Fallback ₹)</label>
                    <input type="number" name="price" value="{{ old('price') }}" class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-4 text-gray-900 outline-none transition-colors rounded-2xl" placeholder="9900.00">
                </div>

                <div class="space-y-4">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Thumbnail/Cover Image</label>
                    <div class="relative group">
                        <input type="file" name="image" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                        <div class="w-full bg-gray-50 border-2 border-dashed border-gray-300 rounded-2xl p-4 text-center group-hover:border-accent transition-colors">
                            <span class="text-xs text-gray-500 font-bold uppercase tracking-widest">Click to upload 2MB Max</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="space-y-4">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Indian Online (₹)</label>
                    <input type="number" step="0.01" name="indian_online_fee" value="{{ old('indian_online_fee') }}" class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-4 text-gray-900 outline-none transition-colors rounded-2xl" placeholder="₹">
                </div>
                <div class="space-y-4">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Indian Offline (₹)</label>
                    <input type="number" step="0.01" name="indian_offline_fee" value="{{ old('indian_offline_fee') }}" class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-4 text-gray-900 outline-none transition-colors rounded-2xl" placeholder="₹">
                </div>
                <div class="space-y-4">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Intl. Online ($)</label>
                    <input type="number" step="0.01" name="intl_online_fee" value="{{ old('intl_online_fee') }}" class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-4 text-gray-900 outline-none transition-colors rounded-2xl" placeholder="$">
                </div>
                <div class="space-y-4">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Intl. Offline ($)</label>
                    <input type="number" step="0.01" name="intl_offline_fee" value="{{ old('intl_offline_fee') }}" class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-4 text-gray-900 outline-none transition-colors rounded-2xl" placeholder="$">
                </div>
            </div>

            <div class="flex items-center gap-6 p-6 bg-gray-50 rounded-3xl border border-gray-100">
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="is_featured" value="1" class="sr-only peer">
                    <div class="w-14 h-7 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-accentLight"></div>
                    <span class="ml-4 text-[10px] font-black uppercase tracking-widest text-gray-700">Feature this course on Home Page</span>
                </label>
            </div>

            <div class="space-y-10 pt-10 border-t border-gray-100">
                <div>
                    <h4 class="text-xl font-bold text-gray-900">SEO Optimization</h4>
                    <p class="text-gray-500 font-bold uppercase tracking-widest text-[10px]">Customize how this page appears in search engines</p>
                </div>
                
                <div class="space-y-4">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Meta Title</label>
                    <input type="text" name="meta_title" value="{{ old('meta_title') }}" class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-4 text-gray-900 outline-none transition-colors rounded-2xl" placeholder="Best Piano Classes in... | Learmy Institute">
                </div>

                <div class="space-y-4">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Meta Description</label>
                    <textarea name="meta_description" rows="3" class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-6 text-gray-900 outline-none transition-colors rounded-3xl" placeholder="Join our professional piano mastery course to learn from experts...">{{ old('meta_description') }}</textarea>
                </div>

                <div class="space-y-4">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Meta Keywords (Comma separated)</label>
                    <input type="text" name="meta_keywords" value="{{ old('meta_keywords') }}" class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-4 text-gray-900 outline-none transition-colors rounded-2xl" placeholder="piano, music, education, institute">
                </div>
            </div>

            <div class="flex gap-6 mt-16">
                <button type="submit" class="flex-grow gold-button text-primary font-black py-5 rounded-3xl uppercase tracking-widest text-xs shadow-2xl transition-all">Publish Module</button>
                <a href="{{ route('admin.courses.index') }}" class="px-10 py-5 bg-gray-100 text-gray-500 font-bold rounded-3xl uppercase tracking-widest text-xs hover:bg-gray-200 transition-all">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
