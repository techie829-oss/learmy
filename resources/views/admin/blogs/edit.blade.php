@extends('layouts.admin')

@section('title', 'Edit Journal: ' . $blog->title)

@section('content')
<div class="max-w-5xl mx-auto bg-white rounded-[2.5rem] p-12 border border-gray-100 shadow-sm relative overflow-hidden">
    <div class="absolute top-0 right-0 w-64 h-64 bg-accent/5 rounded-full blur-3xl -mr-32 -mt-32"></div>
    
    <div class="relative z-10">
        <div class="mb-12">
            <h3 class="text-3xl font-bold text-gray-900 mb-2">Article Refinement</h3>
            <p class="text-gray-500 font-bold uppercase tracking-widest text-[10px]">Step: Update content and publication details</p>
        </div>

        <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data" class="space-y-10">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="space-y-4">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Article Title</label>
                    <input type="text" name="title" value="{{ old('title', $blog->title) }}" required class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-4 text-gray-900 outline-none transition-colors rounded-2xl" placeholder="Top 5 Techniques for Piano Performance">
                </div>

                <div class="space-y-4">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Author Name</label>
                    <input type="text" name="author" value="{{ old('author', $blog->author) }}" required class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-4 text-gray-900 outline-none transition-colors rounded-2xl" placeholder="Learmy Editorial Team">
                </div>
            </div>

            <div class="space-y-4">
                <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Featured Image</label>
                <div class="relative group">
                    @if($blog->image_path)
                        <div class="mb-4">
                             <img src="{{ asset($blog->image_path) }}" class="h-40 w-auto rounded-3xl border border-gray-100 mb-4 group-hover:scale-105 transition-transform shadow-lg">
                        </div>
                    @endif
                    <input type="file" name="image" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                    <div class="w-full bg-gray-50 border-2 border-dashed border-gray-300 rounded-2xl p-4 text-center group-hover:border-accent transition-colors">
                        <span class="text-xs text-gray-500 font-bold uppercase tracking-widest">Update Banner 2MB Max</span>
                    </div>
                </div>
            </div>

            <div class="space-y-4">
                <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Article Content</label>
                <textarea name="content" rows="15" required class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-8 text-gray-900 outline-none transition-colors rounded-[2.5rem] leading-relaxed" placeholder="Share your knowledge and insights here...">{{ old('content', $blog->content) }}</textarea>
            </div>

            <div class="space-y-10 pt-10 border-t border-gray-100">
                <div>
                    <h4 class="text-xl font-bold text-gray-900">SEO Optimization</h4>
                    <p class="text-gray-500 font-bold uppercase tracking-widest text-[10px]">Customize how this page appears in search engines</p>
                </div>
                
                <div class="space-y-4">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Meta Title</label>
                    <input type="text" name="meta_title" value="{{ old('meta_title', $blog->meta_title) }}" class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-4 text-gray-900 outline-none transition-colors rounded-2xl" placeholder="Top Piano Tips | Learmy Blog">
                </div>

                <div class="space-y-4">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Meta Description</label>
                    <textarea name="meta_description" rows="3" class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-6 text-gray-900 outline-none transition-colors rounded-3xl" placeholder="Read our latest insights on music education...">{{ old('meta_description', $blog->meta_description) }}</textarea>
                </div>

                <div class="space-y-4">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Meta Keywords (Comma separated)</label>
                    <input type="text" name="meta_keywords" value="{{ old('meta_keywords', $blog->meta_keywords) }}" class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-4 text-gray-900 outline-none transition-colors rounded-2xl" placeholder="blog, tips, music, education">
                </div>
            </div>

            <div class="flex gap-6 mt-16">
                <button type="submit" class="flex-grow gold-button text-primary font-black py-5 rounded-3xl uppercase tracking-widest text-xs shadow-2xl transition-all">Update Publication</button>
                <a href="{{ route('admin.blogs.index') }}" class="px-10 py-5 bg-gray-100 text-gray-500 font-bold rounded-3xl uppercase tracking-widest text-xs hover:bg-gray-200 transition-all">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
