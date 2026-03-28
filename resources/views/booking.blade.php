@extends('layouts.main')

@section('content')
<div class="pt-8 pb-20 px-6 lg:px-12 max-w-7xl mx-auto w-full" x-data="bookingForm({{ json_encode($courts) }})">
<!-- Header -->
<header class="mb-12">
<div class="flex items-center gap-2 mb-2">
<span class="w-8 h-[2px] bg-primary"></span>
<span class="text-primary font-black tracking-[0.2em] text-[10px] uppercase">Elite Reservation Hub</span>
</div>
<h1 class="text-5xl font-black tracking-tight text-on-surface mb-4">Precision Booking</h1>
<p class="text-on-surface-variant max-w-2xl text-lg leading-relaxed font-medium">Refine your game in world-class facilities. Configure your ideal court and secure peak performance windows.</p>
</header>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
<!-- Left Column -->
<div class="lg:col-span-8 space-y-10">
<!-- Selector Controls -->
<section class="bg-white p-8 rounded-2xl shadow-sm border border-surface-container-high space-y-8">
<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
<div class="space-y-4">
<div class="flex items-center justify-between">
<label class="text-[11px] font-black text-on-surface-variant uppercase tracking-widest">Select Arena</label>
<span class="text-[10px] font-bold text-primary bg-primary/10 px-2 py-0.5 rounded">High Demand</span>
</div>
<div class="relative group">
<select x-model="selectedCourtId" @change="fetchSlots()" class="w-full appearance-none bg-surface-container-low border-2 border-transparent group-hover:border-primary/20 focus:border-primary focus:ring-0 rounded-xl px-5 py-4 text-on-surface font-bold transition-all cursor-pointer">
<option value="">Choose a court...</option>
<template x-for="court in courts" :key="court.id">
    <option :value="court.id" x-text="court.name + ' ($' + court.price_per_hour + '/hr)'"></option>
</template>
</select>
<span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-on-surface-variant group-hover:text-primary transition-colors">keyboard_arrow_down</span>
</div>
</div>
<div class="space-y-4">
<label class="text-[11px] font-black text-on-surface-variant uppercase tracking-widest block">Date of Play</label>
<div class="flex items-center gap-3 overflow-x-auto pb-1 scrollbar-hide">
<template x-for="day in weekDays" :key="day.date">
    <button @click="selectedDate = day.fullDate; fetchSlots()" 
        :class="{
            'bg-primary text-on-primary shadow-xl shadow-primary/20 ring-4 ring-primary/10': selectedDate === day.fullDate,
            'bg-surface-container-low text-on-surface-variant border border-surface-container-high hover:border-primary/30 hover:bg-white': selectedDate !== day.fullDate
        }"
        class="flex-shrink-0 flex flex-col items-center justify-center w-[72px] h-[88px] rounded-2xl transition-all">
        <span class="text-[10px] font-bold uppercase tracking-tighter" :class="selectedDate === day.fullDate ? 'opacity-80' : 'opacity-60'" x-text="day.dayName"></span>
        <span class="text-2xl font-black" x-text="day.dayNumber"></span>
    </button>
</template>
</div>
</div>
</div>
</section>
<!-- Slots Grid -->
<section class="bg-white p-8 rounded-2xl shadow-sm border border-surface-container-high">
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-10">
<h3 class="text-xl font-black tracking-tight flex items-center gap-2">
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1">schedule</span>
                        Available Windows
                    </h3>
<div class="flex flex-wrap items-center gap-5">
<div class="flex items-center gap-2 text-[10px] font-black uppercase tracking-widest text-on-surface-variant/60">
<span class="w-3 h-3 rounded-full bg-surface-container-high border border-outline-variant/30"></span> Booked
                        </div>
<div class="flex items-center gap-2 text-[10px] font-black uppercase tracking-widest text-primary/70">
<span class="w-3 h-3 rounded-full border-2 border-primary/30 bg-primary/5"></span> Available
                        </div>
<div class="flex items-center gap-2 text-[10px] font-black uppercase tracking-widest text-primary">
<span class="w-3 h-3 rounded-full bg-primary shadow-[0_0_8px_rgba(0,107,95,0.4)]"></span> Selected
                        </div>
</div>
</div>
<div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-5 gap-4">
    <template x-if="isLoading">
        <div class="col-span-full text-center py-8 text-secondary">
            <span class="material-symbols-outlined animate-spin align-middle mr-2">progress_activity</span>
            Loading slots...
        </div>
    </template>
    
    <template x-if="!isLoading && slots.length === 0">
        <div class="col-span-full text-center py-8 text-secondary">
            Please select a court to view available slots.
        </div>
    </template>
    
    <template x-for="slot in slots" :key="slot.time">
        <div class="contents">
            <!-- Booked/Unavailable -->
            <div x-show="slot.status !== 'available' && slot.time !== selectedSlot" class="p-4 rounded-xl text-center bg-surface-container-low border border-surface-container-high opacity-40 cursor-not-allowed w-full">
                <span class="block text-[9px] font-black uppercase text-on-surface-variant/60 mb-1" x-text="getTimeOfDay(slot.time)"></span>
                <span class="font-bold text-on-surface-variant/60" x-text="slot.time"></span>
            </div>
            
            <!-- Available -->
            <button x-show="slot.status === 'available' && slot.time !== selectedSlot" @click="selectedSlot = slot.time" class="p-4 rounded-xl text-center transition-all bg-white border-2 border-primary/10 hover:border-primary hover:shadow-lg hover:shadow-primary/5 group w-full">
                <span class="block text-[9px] font-black uppercase text-on-surface-variant group-hover:text-primary transition-colors mb-1" x-text="getTimeOfDay(slot.time)"></span>
                <span class="font-black text-on-surface group-hover:text-primary transition-colors" x-text="slot.time"></span>
            </button>
            
            <!-- Selected -->
            <button x-show="slot.time === selectedSlot" class="p-4 rounded-xl text-center transition-all bg-primary text-on-primary shadow-xl shadow-primary/30 ring-4 ring-primary/10 scale-105 w-full">
                <span class="block text-[9px] font-black uppercase opacity-80 mb-1" x-text="getTimeOfDay(slot.time)"></span>
                <span class="font-black" x-text="slot.time"></span>
            </button>
        </div>
    </template>
</div>
</section>
</div>
<!-- Sidebar Summary -->
<aside class="lg:col-span-4 sticky top-28">
<div class="bg-white rounded-2xl shadow-2xl shadow-primary/5 border border-surface-container-high overflow-hidden">
<!-- Media Header -->
<div class="relative h-44 p-6 flex flex-col justify-end overflow-hidden group">
<img class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="modern indoor padel court" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDO9NpG_iX0v5DgR-DZomdkkZTI1Ux7HCVUR1SgST5qaIevVWsGJvR9CuJf4GaU6vAuM4e4D86mARB0FNo4Jxeh7i79PX2hrEUg0Gj78NYN3oXc59uDh7HNhczawDgUALXka_X4N68noltgV2eoLHSZotEgqa1kRcJNJ663dCqbGJ5TQDucmFC7sJDECxPx-LnPRkY-Qxwl1nz8-2INlfFbYdSOeigOQs8kVst0BfUZ9N3sFp8ebsmt032MtstchPPvKPLSMW2ZAPis"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/95 via-primary/40 to-transparent"></div>
<div class="relative z-10">
<div class="flex items-center gap-2 mb-1">
<span class="bg-white/20 backdrop-blur-md text-white text-[9px] font-black uppercase tracking-widest px-2 py-0.5 rounded">Pro Tier</span>
</div>
<h4 class="text-white font-black text-2xl leading-none" x-text="selectedCourt ? selectedCourt.name : 'Select an Arena'"></h4>
<p class="text-white/80 text-xs font-medium mt-1 italic">World-class lighting &amp; climate control</p>
</div>
</div>
<div class="p-8 space-y-8">
<!-- Breakdown -->
<div class="space-y-5">
<div class="flex justify-between items-center group">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-lg bg-surface-container-low flex items-center justify-center">
<span class="material-symbols-outlined text-sm text-on-surface-variant">calendar_today</span>
</div>
<span class="text-xs font-bold text-on-surface-variant">Selected Date</span>
</div>
<span class="font-black text-sm" x-text="selectedDate"></span>
</div>
<div class="flex justify-between items-center">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-lg bg-surface-container-low flex items-center justify-center">
<span class="material-symbols-outlined text-sm text-on-surface-variant">schedule</span>
</div>
<span class="text-xs font-bold text-on-surface-variant">Time Slot</span>
</div>
<span class="font-black text-sm text-primary" x-text="selectedSlot ? selectedSlot + ' - ' + getEndTime(selectedSlot) : 'None'"></span>
</div>
<div class="flex justify-between items-center">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-lg bg-surface-container-low flex items-center justify-center">
<span class="material-symbols-outlined text-sm text-on-surface-variant">payments</span>
</div>
<span class="text-xs font-bold text-on-surface-variant">Hourly Rate</span>
</div>
<span class="font-black text-sm" x-text="selectedCourt ? '$' + parseFloat(selectedCourt.price_per_hour).toFixed(2) : '$0.00'"></span>
</div>
</div>
<!-- Pricing Footer -->
<div class="pt-6 border-t border-surface-container-high">
<div class="flex justify-between items-end mb-8">
<div>
<p class="text-[10px] font-black uppercase tracking-widest text-on-surface-variant/60 mb-1">Payable Now</p>
<div class="flex items-baseline gap-1">
<span class="text-4xl font-black tracking-tighter" x-text="selectedCourt && selectedSlot ? '$' + parseFloat(selectedCourt.price_per_hour).toFixed(2) : '$0.00'"></span>
<span class="text-xs font-bold text-on-surface-variant/60 uppercase">USD</span>
</div>
</div>
<div class="bg-primary/5 px-3 py-2 rounded-xl border border-primary/10">
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1">confirmation_number</span>
</div>
</div>
<!-- Main CTA -->
<button @click="submitBooking()" :disabled="!isReadyToBook || isSubmitting" class="w-full relative overflow-hidden group disabled:opacity-50 disabled:cursor-not-allowed">
<div class="absolute inset-0 bg-tertiary transition-transform duration-300 translate-y-full group-hover:translate-y-0 group-disabled:translate-y-full"></div>
<div class="relative bg-on-background py-5 rounded-2xl flex items-center justify-center gap-3 text-white font-black tracking-tight text-lg shadow-xl shadow-on-background/20 transition-all active:scale-[0.97] group-disabled:active:scale-100 border-2 border-transparent group-hover:bg-tertiary group-disabled:bg-on-background">
<span x-text="isSubmitting ? 'Processing...' : 'Proceed to Payment'"></span>
<span class="material-symbols-outlined text-xl group-hover:translate-x-1 transition-transform" x-show="!isSubmitting">rocket_launch</span>
<span class="material-symbols-outlined text-xl animate-spin" x-show="isSubmitting">progress_activity</span>
</div>
</button>
<p x-show="errorMessage" x-text="errorMessage" class="mt-4 text-center text-xs font-bold text-error uppercase tracking-widest"></p>
<p class="mt-5 text-center text-[10px] font-black text-on-surface-variant/40 uppercase tracking-[0.2em] flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-[12px]">verified_user</span>
                             Secure checkout • 24h Free Cancel
                        </p>
</div>
</div>
</div>
</aside>
</div>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('bookingForm', (initialCourts) => ({
            courts: initialCourts,
            selectedCourtId: '',
            selectedDate: '',
            selectedSlot: '',
            weekDays: [],
            slots: [],
            isLoading: false,
            errorMessage: '',
            isSubmitting: false,

            get selectedCourt() {
                return this.courts.find(c => c.id == this.selectedCourtId) || null;
            },

            get isReadyToBook() {
                return this.selectedCourtId && this.selectedDate && this.selectedSlot;
            },

            init() {
                // Generate next 7 days in format dd-mm-yyyy for backend, and display formats for UI
                const today = new Date();
                const days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
                
                for(let i=0; i<7; i++) {
                    let d = new Date(today);
                    d.setDate(today.getDate() + i);
                    
                    let dayStr = String(d.getDate()).padStart(2, '0');
                    let monthStr = String(d.getMonth() + 1).padStart(2, '0');
                    let yearStr = d.getFullYear();
                    
                    this.weekDays.push({
                        dayName: days[d.getDay()],
                        dayNumber: dayStr,
                        fullDate: `${dayStr}-${monthStr}-${yearStr}`
                    });
                }
                
                this.selectedDate = this.weekDays[0].fullDate;
            },

            async fetchSlots() {
                this.selectedSlot = '';
                this.errorMessage = '';
                if(!this.selectedCourtId || !this.selectedDate) {
                    this.slots = [];
                    return;
                }
                
                this.isLoading = true;
                this.slots = [];
                
                try {
                    const res = await fetch(`/api/courts/${this.selectedCourtId}/slots?date=${this.selectedDate}`);
                    const data = await res.json();
                    
                    if(data.slots) {
                        this.slots = data.slots;
                    }
                } catch(e) {
                    console.error('Error fetching slots', e);
                } finally {
                    this.isLoading = false;
                }
            },

            getTimeOfDay(timeStr) {
                const hour = parseInt(timeStr.split(':')[0]);
                if (hour < 12) return 'Morning';
                if (hour < 17) return 'Afternoon';
                return 'Evening';
            },

            getEndTime(timeStr) {
                if(!timeStr) return '';
                const hour = parseInt(timeStr.split(':')[0]);
                const nextHour = String(hour + 1).padStart(2, '0');
                return `${nextHour}:00`;
            },

            async submitBooking() {
                if(!this.isReadyToBook) return;
                
                this.isSubmitting = true;
                this.errorMessage = '';
                
                try {
                    const res = await fetch(`/api/booking`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            court_id: this.selectedCourtId,
                            date: this.selectedDate,
                            start_time: this.selectedSlot
                        })
                    });
                    
                    const data = await res.json();
                    
                    if(res.ok) {
                        window.location.href = '/dashboard';
                    } else {
                        this.errorMessage = data.message || 'Error occurred';
                    }
                } catch(e) {
                    this.errorMessage = 'Network error. Please try again.';
                } finally {
                    this.isSubmitting = false;
                }
            }
        }));
    });
</script>
@endsection
