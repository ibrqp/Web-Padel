@extends('layouts.main')

@section('content')
<div class="px-6 lg:px-8 max-w-7xl mx-auto w-full pb-16 pt-4">
<!-- Dashboard Hero / Profile Overview -->
<section class="mb-12">
<div class="flex flex-col md:flex-row gap-8 items-center md:items-start">
<div class="flex-grow text-center md:text-left">
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-bold uppercase tracking-wider mb-4">
<span class="flex h-2 w-2 rounded-full bg-primary animate-pulse"></span>
                        Status: Active Player
                    </div>
<h1 class="font-headline text-5xl md:text-6xl font-extrabold tracking-tight mb-3">
                        Hi {{ Auth::user()->name }} <span class="wave">👋</span>
</h1>
<p class="text-slate-500 text-lg md:text-xl max-w-xl">
                        Your next match is waiting for you! Let's get moving.
                    </p>
</div>
<div class="w-full md:w-auto bg-white p-6 rounded-2xl flex items-center gap-6 shadow-xl shadow-slate-200/50 border border-outline-variant/10">
<div class="relative">
<div class="w-20 h-20 rounded-2xl overflow-hidden ring-4 ring-primary-fixed bg-slate-200 flex items-center justify-center">
    <span class="text-2xl font-bold text-slate-600">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
</div>
<div class="absolute -bottom-2 -right-2 bg-tertiary text-on-tertiary p-1.5 rounded-lg shadow-lg">
<span class="material-symbols-outlined text-sm block">stars</span>
</div>
</div>
<div>
<h2 class="font-headline font-bold text-xl">{{ Auth::user()->name }}</h2>
<p class="text-slate-400 text-sm mb-3">Member</p>
<span class="inline-flex items-center px-3 py-1 rounded-lg text-[10px] font-black tracking-widest uppercase bg-primary-container text-on-primary-container">
                            Gold Tier
                        </span>
</div>
</div>
</div>
</section>
<!-- Main Dashboard Grid -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
<!-- Sidebar Navigation (Desktop) -->
<aside class="hidden lg:block lg:col-span-3 space-y-6">
<nav class="flex flex-col gap-1.5">
<a class="flex items-center gap-4 px-5 py-4 rounded-2xl nav-active font-headline font-bold transition-all" href="#">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">dashboard</span>
                        Dashboard
                    </a>
<a class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-surface-container-high transition-all font-headline font-semibold text-slate-500 hover:text-on-surface" href="#">
<span class="material-symbols-outlined">calendar_today</span>
                        My Bookings
                    </a>
<a class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-surface-container-high transition-all font-headline font-semibold text-slate-500 hover:text-on-surface" href="#">
<span class="material-symbols-outlined">payments</span>
                        Invoices
                    </a>
<a class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-surface-container-high transition-all font-headline font-semibold text-slate-500 hover:text-on-surface" href="{{ route('profile.edit') }}">
<span class="material-symbols-outlined">settings</span>
                        Account
                    </a>
<form method="POST" action="{{ route('logout') }}">
@csrf
<a class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-surface-container-high transition-all font-headline font-semibold text-slate-500 hover:text-on-surface" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
<span class="material-symbols-outlined">logout</span>
                        Log Out
                    </a>
</form>
</nav>
<div class="p-6 bg-secondary-container/40 rounded-3xl relative overflow-hidden group border border-secondary-container/50">
<div class="relative z-10">
<h4 class="font-headline font-bold text-on-secondary-container text-lg mb-1">Refer &amp; Earn</h4>
<p class="text-sm text-on-secondary-container/70 mb-5 leading-relaxed">Give €10, Get €10 in club credit.</p>
<button class="bg-white text-secondary font-bold text-xs px-4 py-2 rounded-xl shadow-sm hover:shadow-md transition-shadow flex items-center gap-2">
                            Invite Now <span class="material-symbols-outlined text-sm">share</span>
</button>
</div>
<span class="material-symbols-outlined absolute -bottom-4 -right-4 text-9xl text-on-secondary-container/5 transition-transform group-hover:scale-110 pointer-events-none">celebration</span>
</div>
</aside>
<!-- Dashboard Content -->
<div class="lg:col-span-9 space-y-12">
<!-- Upcoming Bookings -->
<section>
<div class="flex items-end justify-between mb-8">
<div>
<h3 class="font-headline text-3xl font-extrabold mb-1">Upcoming Bookings</h3>
<p class="text-slate-400 text-sm">You have {{ count($bookings) }} courts reserved.</p>
</div>
<a class="text-primary font-bold text-sm flex items-center gap-1 group" href="{{ url('/') }}">
                            See calendar <span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_right_alt</span>
</a>
</div>
@if($bookings->isEmpty())
<div class="bg-surface-container-low p-10 rounded-3xl text-center">
    <span class="material-symbols-outlined text-6xl text-slate-300 mb-4">sports_tennis</span>
    <h4 class="text-xl font-bold font-headline mb-2">No upcoming matches</h4>
    <p class="text-slate-500 mb-6">Book a court to get started on your padel journey.</p>
    <a href="{{ url('/booking') }}" class="inline-block px-6 py-3 bg-primary text-white font-bold rounded-xl shadow hover:opacity-90 transition-opacity">Book a Court</a>
</div>
@else
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    @foreach($bookings as $booking)
    <div class="group bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl hover:shadow-primary/5 transition-all duration-300 border border-outline-variant/10 flex flex-col">
        <div class="h-40 relative overflow-hidden">
            <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 bg-slate-200" src="https://images.unsplash.com/photo-1622279457486-640c4cb4abvi?auto=format&fit=crop&q=80&w=800" />
            <div class="absolute top-4 left-4">
                <span class="px-3 py-1.5 rounded-lg bg-white/95 text-primary text-[10px] font-black uppercase tracking-wider shadow-sm flex items-center gap-1.5 backdrop-blur-sm">
                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                    {{ ucfirst($booking->status) }}
                </span>
            </div>
        </div>
        <div class="p-6">
            <div class="flex justify-between items-start mb-6">
                <div>
                    <h4 class="font-headline font-bold text-xl mb-1">{{ $booking->court->name }}</h4>
                    <p class="text-slate-400 text-sm font-medium">Standard</p>
                </div>
                <div class="text-right">
                    <div class="text-on-surface font-black text-2xl leading-none">{{ \Carbon\Carbon::parse($booking->date)->format('M d') }}</div>
                    <div class="text-primary font-bold text-sm mt-1">{{ \Carbon\Carbon::parse($booking->start_time)->format('H:i') }} - {{ \Carbon\Carbon::parse($booking->end_time)->format('H:i') }}</div>
                </div>
            </div>
            <div class="flex gap-3">
                <button class="flex-grow py-3 rounded-2xl bg-surface-container text-on-surface font-bold text-sm hover:bg-surface-container-high transition-colors">Manage</button>
                <button class="p-3 rounded-2xl border border-outline-variant text-slate-400 hover:text-primary hover:border-primary transition-all">
                    <span class="material-symbols-outlined block">share</span>
                </button>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endif
</section>
<!-- Recent Transactions -->
<section>
<div class="flex items-center justify-between mb-8">
<h3 class="font-headline text-3xl font-extrabold">Recent Transactions</h3>
</div>
<div class="bg-white rounded-[32px] shadow-sm border border-outline-variant/10 overflow-hidden">
<div class="p-8 text-center text-slate-500">
    No recent transactions found.
</div>
</div>
</section>
</div>
</div>
</div>
@endsection
