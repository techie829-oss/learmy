@extends('layouts.admin')

@section('title', 'Add Gallery Item')

@section('content')
<div class="max-w-3xl mx-auto bg-white rounded-[2.5rem] p-12 border border-gray-100 shadow-sm relative overflow-hidden">
    <div class="absolute top-0 right-0 w-64 h-64 bg-accent/5 rounded-full blur-3xl -mr-32 -mt-32"></div>

    <div class="relative z-10">
        <div class="mb-12">
            <h3 class="text-3xl font-bold text-gray-900 mb-2">Add Media Item</h3>
            <p class="text-gray-500 font-bold uppercase tracking-widest text-[10px]">Upload an image or add a video link to the gallery</p>
        </div>

        @if($errors->any())
            <div class="bg-red-50 border border-red-100 text-red-700 rounded-2xl p-6 mb-8">
                <ul class="list-disc list-inside text-sm space-y-1">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data" class="space-y-10" id="galleryForm">
            @csrf

            {{-- Title --}}
            <div class="space-y-2">
                <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Title / Caption <span class="text-gray-300">(Optional)</span></label>
                <input type="text" name="title" value="{{ old('title') }}"
                    class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-4 text-gray-900 outline-none transition-colors rounded-2xl"
                    placeholder="e.g. Annual Music Concert 2025">
            </div>

            {{-- Type Toggle --}}
            <div class="space-y-4">
                <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Media Type</label>
                <div class="flex gap-4">
                    <label class="flex items-center gap-3 cursor-pointer p-4 rounded-2xl border-2 border-gray-200 hover:border-accent transition-colors flex-1 group has-[:checked]:border-accent has-[:checked]:bg-accent/5">
                        <input type="radio" name="type" value="image" class="accent-yellow-600" {{ old('type', 'image') == 'image' ? 'checked' : '' }} onchange="toggleType(this.value)">
                        <span class="font-black text-sm text-gray-700">🖼️ Image Upload</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-4 rounded-2xl border-2 border-gray-200 hover:border-accent transition-colors flex-1 has-[:checked]:border-accent has-[:checked]:bg-accent/5">
                        <input type="radio" name="type" value="video" class="accent-yellow-600" {{ old('type') == 'video' ? 'checked' : '' }} onchange="toggleType(this.value)">
                        <span class="font-black text-sm text-gray-700">▶️ Video URL</span>
                    </label>
                </div>
            </div>

            {{-- Image Upload --}}
            <div id="imageField" class="space-y-2" style="{{ old('type') == 'video' ? 'display:none' : '' }}">
                <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Upload Image <span class="text-red-400">*</span></label>
                <div class="relative group cursor-pointer" onclick="document.getElementById('imgInput').click()">
                    <input type="file" name="image" id="imgInput" accept="image/*" class="hidden" onchange="previewImg(this)">
                    <div id="imgPreviewBox" class="w-full border-2 border-dashed border-gray-300 rounded-3xl overflow-hidden group-hover:border-accent transition-colors min-h-[200px] flex items-center justify-center bg-gray-50">
                        <div id="imgPlaceholder" class="text-center p-8">
                            <svg class="w-12 h-12 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <p class="text-gray-400 font-bold text-sm">Click to select image</p>
                            <p class="text-gray-300 text-xs mt-1">Max 5MB — JPG, PNG, WEBP</p>
                        </div>
                        <img id="imgPreview" src="" alt="Preview" class="hidden w-full max-h-64 object-cover">
                    </div>
                </div>
            </div>

            {{-- Video URL --}}
            <div id="videoField" class="space-y-2" style="{{ old('type') != 'video' ? 'display:none' : '' }}">
                <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">YouTube / Video Embed URL <span class="text-red-400">*</span></label>
                <input type="url" name="video_url" value="{{ old('video_url') }}"
                    class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-4 text-gray-900 outline-none transition-colors rounded-2xl"
                    placeholder="https://www.youtube.com/embed/VIDEO_ID">
                <p class="text-xs text-gray-400 ml-2">Use YouTube embed URL (e.g. <code>youtube.com/embed/abc123</code>)</p>
            </div>

            <div class="flex gap-6 mt-16">
                <button type="submit" class="flex-grow gold-button text-primary font-black py-5 rounded-3xl uppercase tracking-widest text-xs shadow-2xl transition-all">Add to Gallery</button>
                <a href="{{ route('admin.galleries.index') }}" class="px-10 py-5 bg-gray-100 text-gray-500 font-bold rounded-3xl uppercase tracking-widest text-xs hover:bg-gray-200 transition-all">Cancel</a>
            </div>
        </form>
    </div>
</div>

<script>
function toggleType(val) {
    document.getElementById('imageField').style.display = val === 'image' ? '' : 'none';
    document.getElementById('videoField').style.display = val === 'video' ? '' : 'none';
}
function previewImg(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = e => {
            document.getElementById('imgPreview').src = e.target.result;
            document.getElementById('imgPreview').classList.remove('hidden');
            document.getElementById('imgPlaceholder').classList.add('hidden');
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endsection
