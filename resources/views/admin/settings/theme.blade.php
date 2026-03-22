@extends('layouts.admin')

@section('title', 'Theme Settings')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="bg-white rounded-[2.5rem] p-10 md:p-16 border border-gray-100 shadow-sm relative overflow-hidden">
        <div class="absolute -top-20 -right-20 w-64 h-64 bg-accent/5 rounded-full blur-[80px]"></div>
        
        <div class="relative z-10">
            <h3 class="text-3xl font-serif font-bold text-gray-900 mb-4">Website <span class="text-accent underline underline-offset-8 decoration-accent/20 italic font-normal">Appearance</span></h3>
            <p class="text-gray-500 mb-12 max-w-lg leading-relaxed">Customize the frontend look and feel of your website. Switch between elegant dark mode and clean light mode.</p>

            @if(session('success'))
                <div class="bg-green-50 border border-green-100 text-green-600 p-6 rounded-3xl mb-10 flex items-center gap-4 animate-fade-in">
                    <svg class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span class="font-bold">{{ session('success') }}</span>
                </div>
            @endif

            <form action="{{ route('admin.settings.theme.update') }}" method="POST" class="space-y-12">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Light Mode Option -->
                    <label class="relative group cursor-pointer">
                        <input type="radio" name="theme_mode" value="light" class="peer hidden" {{ $themeMode == 'light' ? 'checked' : '' }}>
                        <div class="p-8 rounded-[2rem] border-2 border-gray-100 bg-gray-50 transition-all duration-300 peer-checked:border-accent peer-checked:bg-white peer-checked:shadow-xl group-hover:border-accent/40">
                            <div class="w-16 h-16 rounded-2xl bg-white shadow-sm flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                                <svg class="w-8 h-8 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m12.728 0l-.707-.707M6.343 6.343l-.707-.707M12 5a7 7 0 100 14 7 7 0 000-14z"></path></svg>
                            </div>
                            <h4 class="text-xl font-bold text-gray-900 mb-2">Light Brilliance</h4>
                            <p class="text-sm text-gray-500 leading-relaxed">A clean, high-contrast look suitable for academic clarity and bright environments.</p>
                            
                            <div class="mt-6 flex gap-2">
                                <div class="w-6 h-6 rounded-full bg-white border border-gray-200 shadow-sm"></div>
                                <div class="w-6 h-6 rounded-full bg-gray-100"></div>
                                <div class="w-6 h-6 rounded-full bg-accent"></div>
                            </div>
                        </div>
                        <div class="absolute top-6 right-6 opacity-0 peer-checked:opacity-100 transition-opacity">
                            <div class="w-8 h-8 bg-accent text-white rounded-full flex items-center justify-center shadow-lg">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            </div>
                        </div>
                    </label>

                    <!-- Dark Mode Option -->
                    <label class="relative group cursor-pointer">
                        <input type="radio" name="theme_mode" value="dark" class="peer hidden" {{ $themeMode == 'dark' ? 'checked' : '' }}>
                        <div class="p-8 rounded-[2rem] border-2 border-gray-100 bg-gray-50 transition-all duration-300 peer-checked:border-accent peer-checked:bg-white peer-checked:shadow-xl group-hover:border-accent/40">
                            <div class="w-16 h-16 rounded-2xl bg-primary shadow-sm flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                                <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                            </div>
                            <h4 class="text-xl font-bold text-gray-900 mb-2">Dark Elegance</h4>
                            <p class="text-sm text-gray-500 leading-relaxed">A premium, low-light aesthetic that emphasizes artistic focus and modern luxury.</p>
                            
                            <div class="mt-6 flex gap-2">
                                <div class="w-6 h-6 rounded-full bg-primary border shadow-sm"></div>
                                <div class="w-6 h-6 rounded-full bg-gray-800"></div>
                                <div class="w-6 h-6 rounded-full bg-accent"></div>
                            </div>
                        </div>
                        <div class="absolute top-6 right-6 opacity-0 peer-checked:opacity-100 transition-opacity">
                            <div class="w-8 h-8 bg-accent text-white rounded-full flex items-center justify-center shadow-lg">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            </div>
                        </div>
                    </label>
                </div>

                <div class="pt-8 border-t border-gray-50 flex items-center justify-between">
                    <div>
                        <p class="text-xs font-black uppercase tracking-widest text-gray-400 mb-1">Global Impact</p>
                        <p class="text-sm text-gray-500 italic">This will update all public pages instantly.</p>
                    </div>
                    <button type="submit" class="bg-gray-900 text-white font-bold py-5 px-12 rounded-[1.5rem] hover:bg-accent hover:text-primary transition-all shadow-2xl uppercase tracking-widest text-sm">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
