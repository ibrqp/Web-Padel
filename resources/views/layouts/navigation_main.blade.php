<header class="fixed top-0 w-full z-50 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md shadow-sm dark:shadow-none">
<div class="flex items-center justify-between px-8 py-4 max-w-7xl mx-auto">
<div class="text-2xl font-bold tracking-tighter text-[#006b5f] dark:text-[#26a69a] font-['Manrope']">
    <a href="{{ url('/') }}">Padel Kinetic</a>
</div>
<nav class="hidden md:flex items-center gap-8 font-['Manrope'] font-semibold tracking-tight">
<a class="text-[#006b5f] dark:text-[#26a69a] border-b-2 border-[#006b5f] pb-1" href="{{ url('/') }}">Courts</a>
<a class="text-slate-600 dark:text-slate-400 hover:text-[#006b5f] transition-all duration-200 hover:opacity-80" href="#" onclick="alert('Fitur Matches segera hadir!')">Matches</a>
<a class="text-slate-600 dark:text-slate-400 hover:text-[#006b5f] transition-all duration-200 hover:opacity-80" href="#" onclick="alert('Fitur Memberships segera hadir!')">Memberships</a>
<a class="text-slate-600 dark:text-slate-400 hover:text-[#006b5f] transition-all duration-200 hover:opacity-80" href="{{ route('owner.dashboard') }}">Admin</a>
</nav>
<div class="flex items-center gap-4">
@auth
    <a href="{{ url('/dashboard') }}" class="text-slate-600 hover:text-[#006b5f] font-bold">Dashboard</a>
@else
    <a href="{{ route('login') }}" class="text-slate-600 hover:text-[#006b5f] font-bold">Log in</a>
    @if (Route::has('register'))
        <a href="{{ route('register') }}" class="text-slate-600 hover:text-[#006b5f] font-bold">Register</a>
    @endif
@endauth
<a href="{{ route('booking') }}" class="bg-primary text-on-primary px-6 py-2.5 rounded-full font-bold text-sm scale-95 hover:scale-100 transition-transform shadow-md inline-block">Book Court</a>
</div>
</div>
</header>
