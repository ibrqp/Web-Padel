@extends('layouts.main')

@section('content')
<div class="flex flex-1 -mt-20">
<!-- Sidebar Navigation -->
<aside class="w-64 fixed left-0 h-[calc(100vh-80px)] top-20 bg-white border-r border-outline-variant/15 px-6 py-8 hidden lg:block z-40">
<div class="space-y-8">
<div>
<p class="text-[10px] uppercase tracking-[0.2em] font-bold text-outline mb-4">Management</p>
<ul class="space-y-1">
<li class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary/10 text-primary font-semibold">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">dashboard</span>
<span class="font-headline">Dashboard</span>
</li>
<li class="flex items-center gap-3 px-4 py-3 rounded-xl text-secondary hover:bg-surface-container transition-colors group cursor-pointer">
<span class="material-symbols-outlined group-hover:text-primary">analytics</span>
<span class="font-headline">Reports</span>
</li>
<li class="flex items-center gap-3 px-4 py-3 rounded-xl text-secondary hover:bg-surface-container transition-colors group cursor-pointer">
<span class="material-symbols-outlined group-hover:text-primary">history</span>
<span class="font-headline">Admin Activity</span>
</li>
</ul>
</div>
<div>
<p class="text-[10px] uppercase tracking-[0.2em] font-bold text-outline mb-4">System</p>
<ul class="space-y-1">
<li class="flex items-center gap-3 px-4 py-3 rounded-xl text-secondary hover:bg-surface-container transition-colors group cursor-pointer">
<span class="material-symbols-outlined group-hover:text-primary">settings</span>
<span class="font-headline">Settings</span>
</li>
<li class="flex items-center gap-3 px-4 py-3 rounded-xl text-secondary hover:bg-surface-container transition-colors group cursor-pointer">
<span class="material-symbols-outlined group-hover:text-primary">help</span>
<span class="font-headline">Support</span>
</li>
</ul>
</div>
</div>
</aside>
<!-- Main Content Canvas -->
<div class="flex-1 lg:ml-64 p-8 bg-surface pt-28">
<div class="max-w-6xl mx-auto space-y-8">
<!-- Header Section -->
<header class="flex flex-col md:flex-row md:items-end justify-between gap-6">
<div>
<h1 class="text-4xl font-extrabold tracking-tighter text-on-background">Owner Dashboard</h1>
<p class="text-secondary body-lg mt-1">Club performance &amp; growth analytics.</p>
</div>
<div class="flex items-center gap-3 p-1.5 bg-surface-container-low rounded-2xl shadow-sm">
<div class="flex items-center bg-white rounded-xl shadow-sm border border-outline-variant/10">
<button class="flex items-center gap-2 px-4 py-2 text-sm font-semibold text-on-surface">
<span class="material-symbols-outlined text-lg text-primary">calendar_today</span>
                                Oct 1 - Oct 31, 2023
                                <span class="material-symbols-outlined text-lg">expand_more</span>
</button>
</div>
<button class="bg-primary hover:bg-primary/90 text-on-primary px-6 py-2.5 rounded-xl font-bold flex items-center gap-2 transition-all shadow-md shadow-primary/20">
<span class="material-symbols-outlined">download_for_offline</span>
                            Export Report
                        </button>
</div>
</header>
<!-- KPI Grid -->
<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<!-- Revenue -->
<div class="bg-white p-6 rounded-2xl shadow-sm border border-outline-variant/10 hover:border-primary/30 transition-all group">
<div class="flex justify-between items-start mb-6">
<div class="p-3 bg-primary/10 rounded-xl text-primary group-hover:bg-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-2xl">payments</span>
</div>
<div class="text-right">
<span class="text-xs font-bold text-[#00a896] bg-[#00a896]/10 px-2 py-1 rounded-lg">+12.5%</span>
<div class="mt-2 text-primary">
<svg class="w-[60px] h-[24px]" style="stroke: currentColor; stroke-width: 2; fill: none;" viewbox="0 0 60 24">
<path d="M0 20 L10 15 L20 18 L30 8 L40 12 L50 5 L60 10"></path>
</svg>
</div>
</div>
</div>
<p class="text-xs font-bold uppercase tracking-widest text-outline mb-1">Total Revenue</p>
<h3 class="text-3xl font-extrabold">${{ number_format($totalRevenue, 2) }}</h3>
</div>
<!-- Bookings -->
<div class="bg-white p-6 rounded-2xl shadow-sm border border-outline-variant/10 hover:border-primary/30 transition-all group">
<div class="flex justify-between items-start mb-6">
<div class="p-3 bg-secondary-container rounded-xl text-secondary group-hover:bg-secondary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-2xl">event_available</span>
</div>
<div class="text-right">
<span class="text-xs font-bold text-[#00a896] bg-[#00a896]/10 px-2 py-1 rounded-lg">+8.2%</span>
<div class="mt-2 text-[#545e76]">
<svg class="w-[60px] h-[24px]" style="stroke: currentColor; stroke-width: 2; fill: none;" viewbox="0 0 60 24">
<path d="M0 15 L10 18 L20 12 L30 14 L40 8 L50 10 L60 4"></path>
</svg>
</div>
</div>
</div>
<p class="text-xs font-bold uppercase tracking-widest text-outline mb-1">Total Bookings</p>
<h3 class="text-3xl font-extrabold">{{ number_format($totalBookings) }}</h3>
</div>
<!-- Occupancy -->
<div class="bg-white p-6 rounded-2xl shadow-sm border border-outline-variant/10 hover:border-primary/30 transition-all group">
<div class="flex justify-between items-start mb-6">
<div class="p-3 bg-tertiary-fixed rounded-xl text-tertiary group-hover:bg-tertiary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-2xl">percent</span>
</div>
<div class="text-right">
<span class="text-xs font-bold text-error bg-error/10 px-2 py-1 rounded-lg">-2.4%</span>
<div class="mt-2 text-tertiary">
<svg class="w-[60px] h-[24px]" style="stroke: currentColor; stroke-width: 2; fill: none;" viewbox="0 0 60 24">
<path d="M0 5 L10 8 L20 12 L30 10 L40 15 L50 13 L60 20"></path>
</svg>
</div>
</div>
</div>
<p class="text-xs font-bold uppercase tracking-widest text-outline mb-1">Occupancy Rate</p>
<h3 class="text-3xl font-extrabold">{{ number_format($occupancyRate, 1) }}%</h3>
</div>
<!-- New Users -->
<div class="bg-white p-6 rounded-2xl shadow-sm border border-outline-variant/10 hover:border-primary/30 transition-all group">
<div class="flex justify-between items-start mb-6">
<div class="p-3 bg-surface-container-highest rounded-xl text-on-surface group-hover:bg-on-surface group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-2xl">person_add</span>
</div>
<div class="text-right">
<span class="text-xs font-bold text-[#00a896] bg-[#00a896]/10 px-2 py-1 rounded-lg">+154</span>
<div class="mt-2 text-on-surface">
<svg class="w-[60px] h-[24px]" style="stroke: currentColor; stroke-width: 2; fill: none;" viewbox="0 0 60 24">
<path d="M0 18 L10 20 L20 15 L30 18 L40 10 L50 12 L60 5"></path>
</svg>
</div>
</div>
</div>
<p class="text-xs font-bold uppercase tracking-widest text-outline mb-1">New Users</p>
<h3 class="text-3xl font-extrabold">{{ number_format($newUsers) }}</h3>
</div>
</section>
<!-- Analytics Charts Row -->
<section class="grid grid-cols-1 lg:grid-cols-3 gap-8">
<!-- Main Chart: Revenue vs Occupancy -->
<div class="lg:col-span-2 bg-white p-8 rounded-2xl border border-outline-variant/10 shadow-sm">
<div class="flex items-center justify-between mb-8 pb-4 border-b border-outline-variant/10">
<div>
<h4 class="text-xl font-bold">Revenue vs Occupancy</h4>
<p class="text-sm text-outline">Growth trends for the current period</p>
</div>
<div class="flex gap-6 items-center">
<div class="flex gap-4 text-xs font-bold">
<span class="flex items-center gap-2"><span class="w-3 h-3 bg-primary rounded-full"></span> Revenue</span>
<span class="flex items-center gap-2"><span class="w-3 h-3 bg-primary/15 rounded-full"></span> Occupancy</span>
</div>
<select class="bg-surface text-xs font-bold border-none rounded-lg focus:ring-0 cursor-pointer">
<option>Monthly View</option>
<option>Weekly View</option>
</select>
</div>
</div>
<!-- Mock Chart Representation -->
<div class="h-72 flex items-end justify-between gap-2 pt-4 relative">
<!-- Grid lines -->
<div class="absolute inset-x-0 top-0 border-t border-dashed border-outline-variant/20 h-0"></div>
<div class="absolute inset-x-0 top-1/4 border-t border-dashed border-outline-variant/20 h-0"></div>
<div class="absolute inset-x-0 top-2/4 border-t border-dashed border-outline-variant/20 h-0"></div>
<div class="absolute inset-x-0 top-3/4 border-t border-dashed border-outline-variant/20 h-0"></div>
<!-- Bar columns -->
<div class="flex-1 flex flex-col justify-end gap-1 group relative">
<div class="bg-primary/10 w-full rounded-t-lg h-[40%] group-hover:bg-primary/20 transition-all"></div>
<div class="bg-primary w-full rounded-t-sm h-[25%] absolute bottom-0 opacity-80"></div>
</div>
<div class="flex-1 flex flex-col justify-end gap-1 group relative">
<div class="bg-primary/10 w-full rounded-t-lg h-[55%] group-hover:bg-primary/20 transition-all"></div>
<div class="bg-primary w-full rounded-t-sm h-[35%] absolute bottom-0 opacity-80"></div>
</div>
<div class="flex-1 flex flex-col justify-end gap-1 group relative">
<div class="bg-primary/10 w-full rounded-t-lg h-[45%] group-hover:bg-primary/20 transition-all"></div>
<div class="bg-primary w-full rounded-t-sm h-[30%] absolute bottom-0 opacity-80"></div>
</div>
<div class="flex-1 flex flex-col justify-end gap-1 group relative">
<div class="bg-primary/10 w-full rounded-t-lg h-[70%] group-hover:bg-primary/20 transition-all"></div>
<div class="bg-primary w-full rounded-t-sm h-[50%] absolute bottom-0 opacity-80"></div>
</div>
<div class="flex-1 flex flex-col justify-end gap-1 group relative">
<div class="bg-primary/10 w-full rounded-t-lg h-[85%] group-hover:bg-primary/20 transition-all"></div>
<div class="bg-primary w-full rounded-t-sm h-[65%] absolute bottom-0"></div>
</div>
<div class="flex-1 flex flex-col justify-end gap-1 group relative">
<div class="bg-primary/10 w-full rounded-t-lg h-[60%] group-hover:bg-primary/20 transition-all"></div>
<div class="bg-primary w-full rounded-t-sm h-[40%] absolute bottom-0 opacity-80"></div>
</div>
<div class="flex-1 flex flex-col justify-end gap-1 group relative">
<div class="bg-primary/10 w-full rounded-t-lg h-[50%] group-hover:bg-primary/20 transition-all"></div>
<div class="bg-primary w-full rounded-t-sm h-[35%] absolute bottom-0 opacity-80"></div>
</div>
<div class="flex-1 flex flex-col justify-end gap-1 group relative">
<div class="bg-primary/10 w-full rounded-t-lg h-[65%] group-hover:bg-primary/20 transition-all"></div>
<div class="bg-primary w-full rounded-t-sm h-[45%] absolute bottom-0 opacity-80"></div>
</div>
<div class="flex-1 flex flex-col justify-end gap-1 group relative">
<div class="bg-primary/10 w-full rounded-t-lg h-[75%] group-hover:bg-primary/20 transition-all"></div>
<div class="bg-primary w-full rounded-t-sm h-[55%] absolute bottom-0 opacity-80"></div>
</div>
<div class="flex-1 flex flex-col justify-end gap-1 group relative">
<div class="bg-primary/10 w-full rounded-t-lg h-[40%] group-hover:bg-primary/20 transition-all"></div>
<div class="bg-primary w-full rounded-t-sm h-[20%] absolute bottom-0 opacity-80"></div>
</div>
<div class="flex-1 flex flex-col justify-end gap-1 group relative">
<div class="bg-primary/10 w-full rounded-t-lg h-[55%] group-hover:bg-primary/20 transition-all"></div>
<div class="bg-primary w-full rounded-t-sm h-[35%] absolute bottom-0 opacity-80"></div>
</div>
<div class="flex-1 flex flex-col justify-end gap-1 group relative">
<div class="bg-primary/10 w-full rounded-t-lg h-[90%] group-hover:bg-primary/20 transition-all"></div>
<div class="bg-primary w-full rounded-t-sm h-[75%] absolute bottom-0"></div>
</div>
</div>
<div class="flex justify-between text-[10px] text-outline font-bold mt-6 uppercase tracking-widest px-2">
<span>Week 1</span>
<span>Week 2</span>
<span>Week 3</span>
<span>Week 4</span>
</div>
</div>
<!-- Top Performing Courts -->
<div class="bg-white p-8 rounded-2xl border border-outline-variant/10 shadow-sm flex flex-col">
<div class="flex items-center justify-between mb-6">
<h4 class="text-xl font-bold">Top Courts</h4>
<span class="material-symbols-outlined text-outline">more_horiz</span>
</div>
<div class="space-y-6 flex-1">
<div class="group">
<div class="flex justify-between text-sm font-semibold mb-2">
<span class="flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-primary"></span>
                                        Center Court (Glass)
                                    </span>
<span class="text-primary font-bold">92%</span>
</div>
<div class="h-3 w-full bg-surface-container rounded-full overflow-hidden">
<div class="h-full bg-primary transition-all duration-1000" style="width: 92%"></div>
</div>
</div>
<div class="group">
<div class="flex justify-between text-sm font-semibold mb-2">
<span class="flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-primary"></span>
                                        Court 2 (Panoramic)
                                    </span>
<span class="text-primary font-bold">78%</span>
</div>
<div class="h-3 w-full bg-surface-container rounded-full overflow-hidden">
<div class="h-full bg-primary transition-all duration-1000" style="width: 78%"></div>
</div>
</div>
<div class="group">
<div class="flex justify-between text-sm font-semibold mb-2">
<span class="flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-primary"></span>
                                        Court 3 (Standard)
                                    </span>
<span class="text-primary font-bold">64%</span>
</div>
<div class="h-3 w-full bg-surface-container rounded-full overflow-hidden">
<div class="h-full bg-primary transition-all duration-1000" style="width: 64%"></div>
</div>
</div>
<div class="group">
<div class="flex justify-between text-sm font-semibold mb-2">
<span class="flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-primary"></span>
                                        Court 4 (Training)
                                    </span>
<span class="text-primary font-bold">45%</span>
</div>
<div class="h-3 w-full bg-surface-container rounded-full overflow-hidden">
<div class="h-full bg-primary transition-all duration-1000" style="width: 45%"></div>
</div>
</div>
</div>
<button class="mt-8 text-sm font-bold text-primary flex items-center justify-center gap-2 py-3 rounded-xl bg-primary/5 hover:bg-primary/10 transition-colors w-full">
                            Full Utilization Report
                            <span class="material-symbols-outlined text-sm">arrow_forward_ios</span>
</button>
</div>
</section>
<!-- Data Tables & Activity Section -->
<section class="grid grid-cols-1 lg:grid-cols-3 gap-8 pb-12">
<!-- Recent Bookings Table -->
<div class="lg:col-span-2 bg-white rounded-2xl border border-outline-variant/10 shadow-sm overflow-hidden">
<div class="px-8 py-6 border-b border-outline-variant/10 flex justify-between items-center bg-surface-container-lowest">
<div>
<h4 class="text-xl font-bold">Recent Reservations</h4>
<p class="text-xs text-outline mt-0.5">Live view of incoming bookings</p>
</div>
<button class="text-primary font-bold text-sm bg-primary/5 px-4 py-2 rounded-lg hover:bg-primary/10">View All Bookings</button>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left text-sm">
<thead class="bg-surface-container-low/30 text-outline uppercase text-[10px] font-bold tracking-widest border-b border-outline-variant/10">
<tr>
<th class="px-8 py-4">User</th>
<th class="px-8 py-4">Court Details</th>
<th class="px-8 py-4">Time Slot</th>
<th class="px-8 py-4">Payment</th>
<th class="px-8 py-4">Status</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant/10">
@forelse ($recentBookings as $booking)
<tr class="hover:bg-surface-container-low/20 transition-colors">
<td class="px-8 py-5">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-secondary-container flex items-center justify-center text-secondary font-bold text-xs shadow-sm">{{ strtoupper(substr($booking->user->name ?? 'User', 0, 2)) }}</div>
<span class="font-semibold text-on-surface">{{ $booking->user->name ?? 'Unknown User' }}</span>
</div>
</td>
<td class="px-8 py-5 text-on-surface/80">{{ $booking->court->name ?? 'Deleted Court' }}</td>
<td class="px-8 py-5 text-on-surface/80 font-medium">{{ \Carbon\Carbon::parse($booking->date)->format('M d') }}, {{ \Carbon\Carbon::parse($booking->start_time)->format('H:i') }}</td>
<td class="px-8 py-5 font-bold text-on-background">${{ number_format((float) $booking->total_price, 2) }}</td>
<td class="px-8 py-5">
@if($booking->status == 'confirmed')
<span class="inline-flex items-center px-2.5 py-1 rounded-lg text-[10px] font-bold bg-[#00a896]/10 text-[#00a896]">
<span class="w-1.5 h-1.5 rounded-full bg-[#00a896] mr-1.5"></span>
Confirmed
</span>
@else
<span class="inline-flex items-center px-2.5 py-1 rounded-lg text-[10px] font-bold bg-secondary-container text-secondary">
<span class="w-1.5 h-1.5 rounded-full bg-secondary mr-1.5"></span>
{{ ucfirst($booking->status) }}
</span>
@endif
</td>
</tr>
@empty
<tr><td colspan="5" class="px-8 py-5 text-center text-slate-500">No recent bookings found.</td></tr>
@endforelse
</tbody>
</table>
</div>
</div>
<!-- Admin Activity Feed -->
<div class="bg-white p-8 rounded-2xl border border-outline-variant/10 shadow-sm flex flex-col">
<div class="flex items-center justify-between mb-8">
<h4 class="text-xl font-bold">Activity Feed</h4>
<span class="text-xs font-bold text-primary cursor-pointer hover:underline">Mark all read</span>
</div>
<div class="space-y-8 relative flex-1">
<!-- Timeline line -->
<div class="absolute left-4 top-2 bottom-6 w-px bg-outline-variant/15"></div>
<div class="flex gap-4 relative z-10">
<div class="flex-shrink-0 w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary shadow-sm">
<span class="material-symbols-outlined text-sm font-bold">edit</span>
</div>
<div>
<p class="text-sm text-on-surface"><span class="font-bold">Admin Alex</span> updated pricing for <span class="text-primary font-medium">Court 3</span>.</p>
<span class="text-[11px] text-outline font-bold flex items-center gap-1 mt-1 uppercase tracking-wider">
<span class="material-symbols-outlined text-[12px]">schedule</span> 2h ago
                                    </span>
</div>
</div>
<div class="flex gap-4 relative z-10">
<div class="flex-shrink-0 w-8 h-8 rounded-lg bg-tertiary/10 flex items-center justify-center text-tertiary shadow-sm">
<span class="material-symbols-outlined text-sm font-bold">engineering</span>
</div>
<div>
<p class="text-sm text-on-surface"><span class="font-bold">System</span> maintenance scheduled for Sunday midnight.</p>
<span class="text-[11px] text-outline font-bold flex items-center gap-1 mt-1 uppercase tracking-wider">
<span class="material-symbols-outlined text-[12px]">schedule</span> 5h ago
                                    </span>
</div>
</div>
<div class="flex gap-4 relative z-10">
<div class="flex-shrink-0 w-8 h-8 rounded-lg bg-secondary/10 flex items-center justify-center text-secondary shadow-sm">
<span class="material-symbols-outlined text-sm font-bold">person</span>
</div>
<div>
<p class="text-sm text-on-surface"><span class="font-bold">New User</span> "PadelPro_88" verified their account.</p>
<span class="text-[11px] text-outline font-bold flex items-center gap-1 mt-1 uppercase tracking-wider">
<span class="material-symbols-outlined text-[12px]">schedule</span> Yesterday
                                    </span>
</div>
</div>
<div class="flex gap-4 relative z-10">
<div class="flex-shrink-0 w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary shadow-sm">
<span class="material-symbols-outlined text-sm font-bold">campaign</span>
</div>
<div>
<p class="text-sm text-on-surface"><span class="font-bold">Marketing</span> launched "Weekend Special" campaign.</p>
<span class="text-[11px] text-outline font-bold flex items-center gap-1 mt-1 uppercase tracking-wider">
<span class="material-symbols-outlined text-[12px]">schedule</span> Oct 12
                                    </span>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
@endsection
