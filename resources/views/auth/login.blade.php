<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <div class="text-center mb-8">
            <h2 class="text-2xl font-bold text-white tracking-tight font-['Manrope']">Welcome Back</h2>
            <p class="text-slate-400 text-sm mt-2">Log in to manage your court reservations.</p>
        </div>

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-slate-300">Email Address</label>
            <input id="email" class="block mt-2 w-full bg-slate-800/50 border border-slate-700 rounded-xl px-4 py-3 text-slate-200 focus:border-[#26a69a] focus:ring-[#26a69a] focus:ring-1 transition-colors" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-slate-300">Password</label>
            <input id="password" class="block mt-2 w-full bg-slate-800/50 border border-slate-700 rounded-xl px-4 py-3 text-slate-200 focus:border-[#26a69a] focus:ring-[#26a69a] focus:ring-1 transition-colors"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
        </div>

        <!-- Remember Me & Forgot Password -->
        <div class="flex items-center justify-between">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded bg-slate-800 border-slate-700 text-[#006b5f] shadow-sm focus:ring-[#006b5f]" name="remember">
                <span class="ms-2 text-sm text-slate-400">{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm text-[#26a69a] hover:text-white transition-colors font-medium" href="{{ route('password.request') }}">
                    {{ __('Forgot password?') }}
                </a>
            @endif
        </div>

        <div>
            <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-full shadow-lg text-sm font-bold text-white bg-[#006b5f] hover:bg-[#005148] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#006b5f] focus:ring-offset-slate-900 transition-all scale-100 active:scale-95">
                {{ __('Log in') }}
            </button>
        </div>
        
        <p class="text-center text-sm text-slate-400 mt-6">
            Don't have an account? 
            <a href="{{ route('register') }}" class="font-bold text-[#26a69a] hover:text-white transition-colors">Sign up</a>
        </p>
    </form>
</x-guest-layout>
