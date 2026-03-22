@extends('layouts.admin')

@section('title', 'Manage Faculty')

@section('content')
<div class="bg-white rounded-[2.5rem] p-10 border border-gray-100 shadow-sm">
    <div class="flex items-center justify-between mb-10">
        <h3 class="text-2xl font-bold text-gray-900">Faculty Registry</h3>
        <a href="{{ route('admin.faculty.create') }}" class="gold-button text-primary font-black px-8 py-3 rounded-2xl uppercase tracking-widest text-xs shadow-xl transition-all">Add Faculty Member</a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead>
                <tr class="border-b border-gray-50">
                    <th class="pb-6 text-[10px] font-black uppercase tracking-widest text-gray-400">Mentor</th>
                    <th class="pb-6 text-[10px] font-black uppercase tracking-widest text-gray-400">Designation</th>
                    <th class="pb-6 text-[10px] font-black uppercase tracking-widest text-gray-400">Specialization</th>
                    <th class="pb-6 text-[10px] font-black uppercase tracking-widest text-gray-400">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-50">
                @foreach($faculties as $faculty)
                <tr class="group">
                    <td class="py-6">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full border border-gray-100 overflow-hidden shrink-0">
                                <img src="{{ $faculty->image_path ? asset($faculty->image_path) : 'https://ui-avatars.com/api/?name='.urlencode($faculty->name).'&background=D4AF37&color=1A1A1A' }}" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 group-hover:text-accent transition-colors">{{ $faculty->name }}</h4>
                            </div>
                        </div>
                    </td>
                    <td class="py-6 font-bold text-gray-600">
                        {{ $faculty->designation }}
                    </td>
                    <td class="py-6 font-bold text-accent">
                        {{ $faculty->specialization }}
                    </td>
                    <td class="py-6">
                        <div class="flex items-center gap-3">
                            <a href="{{ route('admin.faculty.edit', $faculty->id) }}" class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                            </a>
                            <form action="{{ route('admin.faculty.destroy', $faculty->id) }}" method="POST" onsubmit="return confirm('Remove this faculty member?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors">
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
        {{ $faculties->links() }}
    </div>
</div>
@endsection
