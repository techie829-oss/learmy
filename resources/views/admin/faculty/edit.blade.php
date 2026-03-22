@extends('layouts.admin')

@section('title', 'Edit Faculty: ' . $faculty->name)

@section('content')
<div class="max-w-4xl mx-auto bg-white rounded-[2.5rem] p-12 border border-gray-100 shadow-sm relative overflow-hidden">
    <div class="absolute top-0 right-0 w-64 h-64 bg-accent/5 rounded-full blur-3xl -mr-32 -mt-32"></div>
    
    <div class="relative z-10">
        <div class="mb-12">
            <h3 class="text-3xl font-bold text-gray-900 mb-2">Mentor Profile Enhancement</h3>
            <p class="text-gray-500 font-bold uppercase tracking-widest text-[10px]">Step: Update personal and professional details</p>
        </div>

        <form action="{{ route('admin.faculty.update', $faculty->id) }}" method="POST" enctype="multipart/form-data" class="space-y-10">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="space-y-4">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Full Name</label>
                    <input type="text" name="name" value="{{ old('name', $faculty->name) }}" required class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-4 text-gray-900 outline-none transition-colors rounded-2xl" placeholder="Dr. Sarah Mitchell">
                </div>

                <div class="space-y-4">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Designation</label>
                    <input type="text" name="designation" value="{{ old('designation', $faculty->designation) }}" required class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-4 text-gray-900 outline-none transition-colors rounded-2xl" placeholder="Head of Music Department">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="space-y-4">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Specialization</label>
                    <input type="text" name="specialization" value="{{ old('specialization', $faculty->specialization) }}" required class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-4 text-gray-900 outline-none transition-colors rounded-2xl" placeholder="Classical Piano / Advanced Physics">
                </div>

                <div class="space-y-4">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Profile Picture</label>
                    <div class="relative group">
                        @if($faculty->image_path)
                            <div class="mb-4">
                                 <img src="{{ asset($faculty->image_path) }}" class="h-20 w-auto rounded-full border border-gray-100 mb-4 group-hover:scale-105 transition-transform shadow-lg">
                            </div>
                        @endif
                        <input type="file" name="image" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                        <div class="w-full bg-gray-50 border-2 border-dashed border-gray-300 rounded-2xl p-4 text-center group-hover:border-accent transition-colors">
                            <span class="text-xs text-gray-500 font-bold uppercase tracking-widest">Update to change image Max 2MB</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-4">
                <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 block ml-2">Professional Bio</label>
                <textarea name="bio" rows="6" class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-accent p-6 text-gray-900 outline-none transition-colors rounded-3xl" placeholder="Describe the mentor's background, achievements, and teaching philosophy...">{{ old('bio', $faculty->bio) }}</textarea>
            </div>

            <div class="flex gap-6 mt-16">
                <button type="submit" class="flex-grow gold-button text-primary font-black py-5 rounded-3xl uppercase tracking-widest text-xs shadow-2xl transition-all">Update Profile</button>
                <a href="{{ route('admin.faculty.index') }}" class="px-10 py-5 bg-gray-100 text-gray-500 font-bold rounded-3xl uppercase tracking-widest text-xs hover:bg-gray-200 transition-all">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
