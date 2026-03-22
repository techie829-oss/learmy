<x-guest-layout>
    <div class="mb-10 text-center">
        <h2 class="text-3xl font-serif font-bold text-white mb-2">Admin Portal</h2>
        <p class="text-gray-500 text-sm tracking-widest uppercase">Secure Access Required</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-accent text-[10px] font-black uppercase tracking-[0.3em] mb-2 px-1">Identity (Email)</label>
            <input id="email" class="block w-full gold-input py-4 px-5" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="Enter admin email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <div class="flex justify-between items-center mb-2 px-1">
                <label for="password" class="block text-accent text-[10px] font-black uppercase tracking-[0.3em]">Passcode</label>
                @if (Route::has('password.request'))
                    <a class="text-[10px] text-gray-500 hover:text-accent uppercase tracking-widest transition-colors font-bold" href="{{ route('password.request') }}">
                        Recovery?
                    </a>
                @endif
            </div>

            <input id="password" class="block w-full gold-input py-4 px-5"
                            type="password"
                            name="password"
                            required autocomplete="current-password"
                            placeholder="••••••••" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between">
            <label for="remember_me" class="inline-flex items-center cursor-pointer group">
                <input id="remember_me" type="checkbox" class="rounded border-gray-800 bg-gray-900 text-accent shadow-sm focus:ring-accent/50 w-4 h-4" name="remember">
                <span class="ms-3 text-sm text-gray-500 group-hover:text-gray-300 transition-colors uppercase tracking-widest text-[10px] font-bold">{{ __('Keep Session') }}</span>
            </label>
        </div>

        <div class="pt-2">
            <button type="submit" class="w-full bg-accent text-black font-black py-5 rounded-2xl uppercase tracking-[0.2em] text-sm hover:scale-[1.02] active:scale-95 transition-all shadow-[0_10px_30px_rgba(212,175,55,0.2)] hover:shadow-[0_15px_40px_rgba(212,175,55,0.4)]">
                Authenticate
            </button>
        </div>
    </form>
</x-guest-layout>
