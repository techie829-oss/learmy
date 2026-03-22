@extends('layouts.admin')

@section('title', 'Enquiry Details: ' . $enquiry->name)

@section('content')
<div class="max-w-4xl mx-auto bg-white rounded-[2.5rem] p-12 border border-gray-100 shadow-sm relative overflow-hidden">
    <div class="absolute top-0 right-0 w-64 h-64 bg-accent/5 rounded-full blur-3xl -mr-32 -mt-32"></div>
    
    <div class="relative z-10">
        <div class="mb-12 flex items-center justify-between border-b pb-8 border-gray-100">
            <div>
                 <h3 class="text-3xl font-bold text-gray-900 mb-2">Message Analysis</h3>
                 <p class="text-gray-500 font-bold uppercase tracking-widest text-[10px]">Received on {{ $enquiry->created_at->format('d M, Y \a\t H:i') }}</p>
            </div>
            <div class="flex gap-4">
                <form action="{{ route('admin.enquiries.update', $enquiry->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="status" value="responded">
                    <button type="submit" class="px-6 py-3 bg-green-50 text-green-600 font-black rounded-2xl uppercase tracking-widest text-xs hover:bg-green-100 transition-colors">Mark as Responded</button>
                </form>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mb-12">
            <div class="p-8 bg-gray-50 rounded-3xl border border-gray-100">
                 <label class="text-[10px] font-black uppercase tracking-widest text-gray-400 block mb-4">Contact Profile</label>
                 <div class="font-bold text-gray-900 text-2xl mb-2">{{ $enquiry->name }}</div>
                 <div class="text-accent underline text-sm mb-1">{{ $enquiry->email }}</div>
                 <div class="text-gray-500 text-sm font-bold uppercase tracking-tighter">{{ $enquiry->phone ?: 'N/A' }}</div>
            </div>
            <div class="p-8 bg-gray-50 rounded-3xl border border-gray-100">
                 <label class="text-[10px] font-black uppercase tracking-widest text-gray-400 block mb-4">Query Subject</label>
                 <div class="font-bold text-gray-900 text-xl leading-relaxed">{{ $enquiry->subject ?: 'General Institute Inquiry' }}</div>
            </div>
        </div>

        <div class="bg-gray-50 rounded-[2.5rem] p-12 border border-accent/10 relative">
             <div class="absolute -top-6 -left-6 w-12 h-12 bg-accent/10 rounded-full flex items-center justify-center">
                 <svg class="w-6 h-6 text-accent" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"></path></svg>
             </div>
             <p class="text-gray-600 text-xl font-medium leading-relaxed italic border-l-4 border-accent/20 pl-8">
                 {{ $enquiry->message }}
             </p>
        </div>

        <div class="flex gap-6 mt-16 pt-12 border-t border-gray-100">
            <a href="mailto:{{ $enquiry->email }}" class="flex-grow gold-button text-primary font-black py-5 rounded-3xl uppercase tracking-widest text-xs shadow-2xl transition-all text-center">Reply via Email</a>
            <a href="{{ route('admin.enquiries.index') }}" class="px-10 py-5 bg-gray-100 text-gray-500 font-bold rounded-3xl uppercase tracking-widest text-xs hover:bg-gray-200 transition-all">Back to Inbox</a>
        </div>
    </div>
</div>
@endsection
