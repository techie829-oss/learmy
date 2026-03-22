@extends('layouts.admin')

@section('title', 'Add Testimonial')

@section('content')
<div class="max-w-3xl mx-auto bg-white rounded-[2.5rem] p-12 border border-gray-100 shadow-sm relative overflow-hidden">
    <div class="absolute top-0 right-0 w-64 h-64 bg-accent/5 rounded-full blur-3xl -mr-32 -mt-32"></div>

    <div class="relative z-10">
        <div class="mb-12">
            <h3 class="text-3xl font-bold text-gray-900 mb-2">Add Testimonial</h3>
            <p class="text-gray-500 font-bold uppercase tracking-widest text-[10px]">Add a student or parent success story</p>
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

        <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data" class="space-y-10">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="space-y-2">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Student Name <span class="text-red-400">*</span></label>
                    <input type="text" name="student_name" value="{{ old('student_name') }}" required
                        class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-4 text-gray-900 outline-none transition-colors rounded-2xl"
                        placeholder="e.g. Rahul Sharma">
                </div>
                <div class="space-y-2">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Parent Name <span class="text-gray-300">(Optional)</span></label>
                    <input type="text" name="parent_name" value="{{ old('parent_name') }}"
                        class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-4 text-gray-900 outline-none transition-colors rounded-2xl"
                        placeholder="e.g. Mr. Anil Sharma">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="space-y-2">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Program / Course <span class="text-gray-300">(Optional)</span></label>
                    <input type="text" name="program" value="{{ old('program') }}"
                        class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-4 text-gray-900 outline-none transition-colors rounded-2xl"
                        placeholder="e.g. Piano Mastery">
                </div>

                <div class="space-y-2">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Star Rating <span class="text-red-400">*</span></label>
                    <div class="flex gap-3 items-center p-2" id="starRating">
                        @for($i = 1; $i <= 5; $i++)
                            <label class="cursor-pointer text-3xl star-label" for="star{{ $i }}">
                                <input type="radio" name="rating" id="star{{ $i }}" value="{{ $i }}" class="hidden" {{ old('rating', 5) == $i ? 'checked' : '' }}>
                                <span class="star-icon {{ old('rating', 5) >= $i ? 'text-accent' : 'text-gray-200' }} hover:text-accent transition-colors">★</span>
                            </label>
                        @endfor
                        <span class="text-sm text-gray-400 font-bold ml-2" id="ratingLabel">{{ old('rating', 5) }}/5 Stars</span>
                    </div>
                </div>
            </div>

            {{-- Profile Photo --}}
            <div class="space-y-2">
                <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Student / Parent Photo <span class="text-gray-300">(Optional)</span></label>
                <div class="flex gap-6 items-center">
                    <div class="w-20 h-20 rounded-3xl overflow-hidden border-2 border-gray-200 bg-gray-50 flex items-center justify-center shrink-0">
                        <img id="photoPreview" src="https://ui-avatars.com/api/?name=Preview&background=D4AF37&color=1A1A1A" class="w-full h-full object-cover" alt="preview">
                    </div>
                    <div class="relative group flex-1 cursor-pointer" onclick="document.getElementById('photoInput').click()">
                        <input type="file" name="image" id="photoInput" accept="image/*" class="hidden" onchange="previewPhoto(this)">
                        <div class="w-full border-2 border-dashed border-gray-300 rounded-2xl p-4 text-center group-hover:border-accent transition-colors bg-gray-50">
                            <p class="text-gray-400 font-bold text-sm">Click to upload photo</p>
                            <p class="text-gray-300 text-xs mt-1">Max 2MB — JPG, PNG</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Feedback --}}
            <div class="space-y-2">
                <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Testimonial Feedback <span class="text-red-400">*</span></label>
                <textarea name="feedback" rows="5" required
                    class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-6 text-gray-900 outline-none transition-colors rounded-3xl"
                    placeholder="Write the student or parent's testimonial here...">{{ old('feedback') }}</textarea>
            </div>

            <div class="flex gap-6 mt-16">
                <button type="submit" class="flex-grow gold-button text-primary font-black py-5 rounded-3xl uppercase tracking-widest text-xs shadow-2xl transition-all">Save Testimonial</button>
                <a href="{{ route('admin.testimonials.index') }}" class="px-10 py-5 bg-gray-100 text-gray-500 font-bold rounded-3xl uppercase tracking-widest text-xs hover:bg-gray-200 transition-all">Cancel</a>
            </div>
        </form>
    </div>
</div>

<script>
function previewPhoto(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = e => { document.getElementById('photoPreview').src = e.target.result; };
        reader.readAsDataURL(input.files[0]);
    }
}

// Interactive star rating
document.querySelectorAll('#starRating input[type=radio]').forEach(radio => {
    radio.addEventListener('change', function() {
        const val = parseInt(this.value);
        document.querySelectorAll('#starRating .star-icon').forEach((star, idx) => {
            star.classList.toggle('text-accent', idx < val);
            star.classList.toggle('text-gray-200', idx >= val);
        });
        document.getElementById('ratingLabel').textContent = val + '/5 Stars';
    });
});
</script>
@endsection
