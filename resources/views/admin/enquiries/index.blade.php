@extends('layouts.admin')

@section('title', 'Enquiry Inbox')

@section('content')
<div class="bg-white rounded-[2.5rem] p-10 border border-gray-100 shadow-sm flex flex-col h-full">
    <div class="flex items-center justify-between mb-10">
        <h3 class="text-2xl font-bold text-gray-900">Communication Hub</h3>
        <p class="text-[10px] font-black uppercase tracking-widest text-gray-400">Manage student and parent queries</p>
    </div>

    <div class="overflow-x-auto flex-grow">
        <table class="w-full text-left">
            <thead>
                <tr class="border-b border-gray-50">
                    <th class="pb-6 text-[10px] font-black uppercase tracking-widest text-gray-400">Sender</th>
                    <th class="pb-6 text-[10px] font-black uppercase tracking-widest text-gray-400">Subject</th>
                    <th class="pb-6 text-[10px] font-black uppercase tracking-widest text-gray-400">Date</th>
                    <th class="pb-6 text-[10px] font-black uppercase tracking-widest text-gray-400">Status</th>
                    <th class="pb-6 text-[10px] font-black uppercase tracking-widest text-gray-400">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-50 font-medium">
                @foreach($enquiries as $enquiry)
                <tr class="group hover:bg-gray-50 transition-colors {{ $enquiry->status == 'pending' ? 'bg-orange-50/20' : '' }}">
                    <td class="py-6">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center shrink-0">
                                <span class="text-xs font-bold text-gray-500">{{ strtoupper(substr($enquiry->name,0,1)) }}</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 group-hover:text-accent transition-colors">{{ $enquiry->name }}</h4>
                                <p class="text-[10px] text-gray-400 font-bold lowercase">{{ $enquiry->email }}</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-6">
                        <span class="text-sm text-gray-700 block max-w-xs truncate">{{ $enquiry->subject ?: 'General Enquiry' }}</span>
                    </td>
                    <td class="py-6 text-xs text-gray-400">
                        {{ $enquiry->created_at->format('d M, Y') }}
                    </td>
                    <td class="py-6">
                        <span class="px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest 
                            {{ $enquiry->status == 'pending' ? 'bg-orange-100 text-orange-600' : 
                               ($enquiry->status == 'read' ? 'bg-blue-100 text-blue-600' : 'bg-green-100 text-green-600') }}">
                            {{ $enquiry->status }}
                        </span>
                    </td>
                    <td class="py-6 text-right">
                        <div class="flex items-center justify-end gap-3">
                            <a href="{{ route('admin.enquiries.show', $enquiry->id) }}" class="p-2 text-blue-600 hover:bg-blue-100 rounded-lg transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                            </a>
                            <form action="{{ route('admin.enquiries.destroy', $enquiry->id) }}" method="POST" onsubmit="return confirm('Delete this record?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-2 text-red-600 hover:bg-red-100 rounded-lg transition-colors">
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
        {{ $enquiries->links() }}
    </div>
</div>
@endsection
