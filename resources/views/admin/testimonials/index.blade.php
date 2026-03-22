@extends('layouts.admin')

@section('title', 'Manage Testimonials')

@section('content')
@if(session('success'))
    <div class="mb-6 bg-green-50 border border-green-100 text-green-700 rounded-2xl p-5 flex items-center gap-3">
        <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
        {{ session('success') }}
    </div>
@endif
<div class="bg-white rounded-[2.5rem] p-10 border border-gray-100 shadow-sm">
    <div class="flex items-center justify-between mb-10">
        <h3 class="text-2xl font-bold text-gray-900">Student & Parent Feedback</h3>
        <a href="{{ route('admin.testimonials.create') }}" class="gold-button text-primary font-black px-8 py-3 rounded-2xl uppercase tracking-widest text-xs shadow-xl transition-all">Add Testimonial</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        @foreach($testimonials as $testim)
        <div class="bg-gray-50 border border-gray-100 rounded-[3rem] p-10 flex flex-col justify-between hover:border-accent/40 transition-colors">
            <div>
                <div class="flex items-center gap-6 mb-8">
                    <div class="w-16 h-16 rounded-3xl overflow-hidden border-2 border-accent/20">
                        <img src="{{ $testim->image_path ? asset($testim->image_path) : 'https://ui-avatars.com/api/?name='.urlencode($testim->student_name).'&background=D4AF37&color=1A1A1A' }}" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-gray-900 leading-none mb-1">{{ $testim->student_name }}</h4>
                        <span class="text-[10px] font-black uppercase tracking-widest text-accent">{{ $testim->program }}</span>
                    </div>
                </div>
                
                <div class="flex gap-1 mb-6">
                    @for($i=1; $i<=5; $i++)
                        <svg class="w-4 h-4 {{ $i <= $testim->rating ? 'text-accent' : 'text-gray-200' }}" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    @endfor
                </div>

                <p class="text-gray-600 italic leading-relaxed mb-8 flex-grow">"{{ $testim->feedback }}"</p>
            </div>
            
            <div class="flex items-center justify-between pt-8 border-t border-gray-100">
                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">{{ $testim->parent_name ? 'Parent: '.$testim->parent_name : 'Self Profile' }}</span>
                <div class="flex gap-4">
                    <a href="{{ route('admin.testimonials.edit', $testim->id) }}" class="text-xs font-black uppercase text-blue-600 tracking-widest hover:underline">Edit</a>
                    <form action="{{ route('admin.testimonials.destroy', $testim->id) }}" method="POST">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-xs font-black uppercase text-red-500 tracking-widest hover:underline">Remove</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-10">
        {{ $testimonials->links() }}
    </div>
</div>
@endsection
