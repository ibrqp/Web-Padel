<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="space-y-5">
        @csrf

        <div class="text-center mb-8">
            <h2 class="text-2xl font-bold text-white tracking-tight font-['Manrope']">Create Account</h2>
            <p class="text-slate-400 text-sm mt-2">Join Padel Kinetic and hit the court.</p>
        </div>

        <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-slate-300">Name</label>
            <input id="name" class="block mt-2 w-full bg-slate-800/50 border border-slate-700 rounded-xl px-4 py-3 text-slate-200 focus:border-[#26a69a] focus:ring-[#26a69a] focus:ring-1 transition-colors" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500" />
        </div>

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-slate-300">Email Address</label>
            <input id="email" class="block mt-2 w-full bg-slate-800/50 border border-slate-700 rounded-xl px-4 py-3 text-slate-200 focus:border-[#26a69a] focus:ring-[#26a69a] focus:ring-1 transition-colors" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-slate-300">Password</label>
            <input id="password" class="block mt-2 w-full bg-slate-800/50 border border-slate-700 rounded-xl px-4 py-3 text-slate-200 focus:border-[#26a69a] focus:ring-[#26a69a] focus:ring-1 transition-colors"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-slate-300">Confirm Password</label>
            <input id="password_confirmation" class="block mt-2 w-full bg-slate-800/50 border border-slate-700 rounded-xl px-4 py-3 text-slate-200 focus:border-[#26a69a] focus:ring-[#26a69a] focus:ring-1 transition-colors"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500" />
        </div>

        <div class="pt-2">
            <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-full shadow-lg text-sm font-bold text-white bg-[#006b5f] hover:bg-[#005148] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#006b5f] focus:ring-offset-slate-900 transition-all scale-100 active:scale-95">
                {{ __('Register') }}
            </button>
        </div>

        <p class="text-center text-sm text-slate-400 mt-6">
            Already registered? 
            <a href="{{ route('login') }}" class="font-bold text-[#26a69a] hover:text-white transition-colors">Log in</a>
        </p>
    </form>
</x-guest-layout>
