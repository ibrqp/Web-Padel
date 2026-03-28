@extends('layouts.main')

@section('content')
<!-- Hero Section -->
<section class="relative h-[870px] flex items-center overflow-hidden">
<div class="absolute inset-0 z-0">
<img alt="Premium Padel Court" class="w-full h-full object-cover" data-alt="Modern indoor padel court with blue turf, glass walls, and professional lighting in a high-end sports club setting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCOCBPxV7qZfhWLLNPqBnpts3JvC68T2MRAny8i7tFrCZq3xGk2iWu8s3b5QcfPF9Ed81wJb8_mYf4p5Md1UOe05cWlaHUzzHzzYQ4ox8E_pjVSvo-IzlP7RNVX7WvlEp4gUIeDBlbPuK_09az6AYGsLBooq_2dHY1OwsEIfA5uQ239zuOeHx1xduA6nCBJKNoLZl99XUuD2_2Jifh7lc2RO4CfxqN36VCGsf9yOleiVWy7FUSMZWehhWZmkjCZoCQykGe-_mbPlCUr"/>
<div class="absolute inset-0 bg-gradient-to-r from-on-background/80 via-on-background/40 to-transparent"></div>
</div>
<div class="relative z-10 max-w-7xl mx-auto px-8 w-full">
<div class="max-w-2xl">
<span class="inline-block px-4 py-1.5 bg-primary/20 backdrop-blur-md text-primary-fixed border border-primary/30 rounded-full text-xs font-bold tracking-widest uppercase mb-6">
                        Precision in Every Play
                    </span>
<h1 class="text-white text-6xl md:text-7xl font-extrabold tracking-tighter leading-tight mb-6">
                        Elevate Your <br/><span class="text-primary-fixed">Padel Game.</span>
</h1>
<p class="text-surface-container text-lg md:text-xl leading-relaxed mb-10 max-w-lg font-body">
                        Experience the sport of the century on world-class panoramic courts designed for the perfect bounce and ultimate visibility.
                    </p>
<div class="flex flex-wrap gap-4">
<button class="px-8 py-4 kinetic-gradient text-on-primary rounded-xl font-bold text-lg shadow-xl hover:shadow-primary/20 transition-all scale-100 active:scale-95">
                            Book Now
                        </button>
<button class="px-8 py-4 bg-white/10 backdrop-blur-md text-white border border-white/20 rounded-xl font-bold text-lg hover:bg-white/20 transition-all">
                            View Schedule
                        </button>
</div>
</div>
</div>
</section>
<!-- Our Courts Section (Bento Grid Style) -->
<section class="py-24 px-8 max-w-7xl mx-auto">
<div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-4">
<div>
<h2 class="text-4xl font-extrabold tracking-tighter text-on-background mb-4">Elite Arenas</h2>
<p class="text-secondary font-body max-w-md">Four professional-grade courts tailored for both high-stakes competition and social play.</p>
</div>
<div class="hidden md:block h-[2px] flex-grow mx-12 bg-surface-container-high mb-4"></div>
<button class="text-primary font-bold flex items-center gap-2 group">
                    View Technical Specs <span class="material-symbols-outlined transition-transform group-hover:translate-x-1">arrow_forward</span>
</button>
</div>
<div class="grid grid-cols-1 md:grid-cols-12 gap-8">
<!-- Main Court -->
<div class="md:col-span-8 group relative overflow-hidden rounded-3xl bg-surface-container-low transition-all hover:shadow-2xl hover:shadow-primary/5">
<div class="aspect-[16/9] overflow-hidden">
<img alt="Center Court" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="Wide shot of a center padel court with bright blue artificial grass and neon night lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD8L91TXuwtYStYmuaRznK2yJ0RYRvfM8A1WMGSv31yvbgY3-GU3aXkLQKcw2d9O9thwZQkPERSG04CtDjl4TL_4OzReit7vNX7sKoSDEoyu6w7yrA93Iwc5VV38F96mObaZ9fvCTeTSnKzRhXJWlu3XQkdBXyrJJNw5Lq4sLXIh6HzZnFAihi9ekgLRODPHC2eucye-fi3MOcoedJiOYrvqtGHb6asqKzXJ12GVcvmz4o-hsqVFfkq2aLPHQptZ8786T8W_7I-wnMl"/>
</div>
<div class="p-8 flex justify-between items-center">
<div>
<div class="flex items-center gap-3 mb-2">
<span class="text-xs font-bold uppercase tracking-widest text-primary bg-primary/10 px-3 py-1 rounded-full">Pro Series</span>
<h3 class="text-2xl font-bold">The Glass Pavilion</h3>
</div>
<p class="text-secondary text-sm">Full panoramic view • WPT Standard • Pro-Cushion Turf</p>
</div>
<div class="text-right">
<span class="block text-3xl font-black text-on-background">$45</span>
<span class="text-xs text-secondary uppercase font-bold tracking-tighter">Per Hour</span>
</div>
</div>
</div>
<!-- Secondary Courts Stack -->
<div class="md:col-span-4 flex flex-col gap-8">
<div class="flex-1 group relative overflow-hidden rounded-3xl bg-surface-container-low transition-all hover:bg-surface-container-lowest border border-transparent hover:border-outline-variant/20">
<div class="h-48 overflow-hidden">
<img alt="Sky Court" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500" data-alt="Close up of a padel racket resting against a blue glass court wall with sunlight reflections" src="https://lh3.googleusercontent.com/aida-public/AB6AXuABpM9gfdip9DNCoT8NorDcAJdV2ZR2eQdknrJrj4LxQBqHwoL7OTSzW0tZr_an1XYlHF3RwgTWEuLya8B26WfnG7N6gb0-S2w1yEwMMQvHjHOrnoiPZQ_PCOb421wloimkAThmD2DLmFrXcQCvBQ4ppMUV_CUSsP8Vj0wFKdHmddIbxzRgRe-FVm5EPN22v5tFLC1jS-GuELbMuGxTh4eiTk5rxsOaSpJCbXfj9pb03vntICcr3X7MnjtlMFd-mmJpUwoKZjAoJhvE"/>
</div>
<div class="p-6">
<h3 class="text-xl font-bold mb-1">Sky Terrace</h3>
<p class="text-secondary text-xs mb-4">Outdoor • Natural Ventilation</p>
<div class="flex justify-between items-center">
<span class="text-xl font-black text-on-background">$35/hr</span>
<button class="text-primary material-symbols-outlined bg-primary/10 p-2 rounded-lg">calendar_today</button>
</div>
</div>
</div>
<div class="flex-1 group relative overflow-hidden rounded-3xl bg-surface-container-low transition-all hover:bg-surface-container-lowest border border-transparent hover:border-outline-variant/20">
<div class="h-48 overflow-hidden">
<img alt="Club Court" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500" data-alt="Interior view of a padel club with multiple courts and social areas in the background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDrajS1lxAd7UoyC3DI4ti9aY3Nym2BAONSY00346I8UltjsEPn9aJUT2D0m3aWX_HK6ZGCRPGyHGQ20MkCs66O-PceCD1UEUxkKmiv2RLnr4cPnbaFJ5UDSbPVeEiINF49hR_kdK7yBe-0v7hIVVX-GEw59Xd3QlOBhn5CRlI1RSDx5g9p0ElemFp0tPYT3QXYUIo88_llGJ0ofLVH9nhNAullMsiOqFD0s62FcWSovOsJgIJgvxqydrTeYz7Rh3JsESmjGbtE84Kx"/>
</div>
<div class="p-6">
<h3 class="text-xl font-bold mb-1">Club Standard</h3>
<p class="text-secondary text-xs mb-4">Indoor • Social Play Focus</p>
<div class="flex justify-between items-center">
<span class="text-xl font-black text-on-background">$30/hr</span>
<button class="text-primary material-symbols-outlined bg-primary/10 p-2 rounded-lg">calendar_today</button>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Availability Widget -->
<section class="py-24 bg-surface-container-low">
<div class="max-w-7xl mx-auto px-8">
<div class="bg-surface-container-lowest rounded-[2.5rem] p-8 md:p-12 shadow-sm flex flex-col lg:flex-row gap-12">
<div class="lg:w-1/3">
<h2 class="text-3xl font-extrabold tracking-tighter text-on-background mb-6">Real-time Availability</h2>
<p class="text-secondary mb-8">Choose your slot and hit the court. Our live tracking ensures you always get the time you want.</p>
<div class="space-y-4">
<div class="flex items-center gap-4 p-4 rounded-2xl bg-primary/5 border border-primary/10">
<div class="w-12 h-12 rounded-xl kinetic-gradient flex items-center justify-center text-on-primary">
<span class="material-symbols-outlined">event_available</span>
</div>
<div>
<p class="text-xs font-bold uppercase tracking-widest text-primary">Today</p>
<p class="font-bold">October 24, 2024</p>
</div>
</div>
</div>
</div>
<div class="lg:w-2/3 grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- Morning -->
<div class="space-y-4">
<h4 class="text-sm font-bold uppercase tracking-widest text-secondary-fixed-dim px-2 flex items-center gap-2">
<span class="material-symbols-outlined text-sm">wb_twilight</span> Morning
                            </h4>
<div class="space-y-2">
<div class="p-4 rounded-xl bg-surface-container flex justify-between items-center opacity-50">
<span class="font-medium text-sm">08:00 - 09:30</span>
<span class="text-[10px] font-bold uppercase text-secondary">Booked</span>
</div>
<div class="p-4 rounded-xl bg-primary/10 border border-primary/20 flex justify-between items-center">
<span class="font-medium text-sm text-primary">09:30 - 11:00</span>
<span class="text-[10px] font-bold uppercase text-primary">Available</span>
</div>
<div class="p-4 rounded-xl bg-primary/10 border border-primary/20 flex justify-between items-center">
<span class="font-medium text-sm text-primary">11:00 - 12:30</span>
<span class="text-[10px] font-bold uppercase text-primary">Available</span>
</div>
</div>
</div>
<!-- Afternoon -->
<div class="space-y-4">
<h4 class="text-sm font-bold uppercase tracking-widest text-secondary-fixed-dim px-2 flex items-center gap-2">
<span class="material-symbols-outlined text-sm">light_mode</span> Afternoon
                            </h4>
<div class="space-y-2">
<div class="p-4 rounded-xl bg-surface-container flex justify-between items-center opacity-50">
<span class="font-medium text-sm">13:00 - 14:30</span>
<span class="text-[10px] font-bold uppercase text-secondary">Booked</span>
</div>
<div class="p-4 rounded-xl bg-surface-container flex justify-between items-center opacity-50">
<span class="font-medium text-sm">14:30 - 16:00</span>
<span class="text-[10px] font-bold uppercase text-secondary">Booked</span>
</div>
<div class="p-4 rounded-xl bg-primary/10 border border-primary/20 flex justify-between items-center">
<span class="font-medium text-sm text-primary">16:00 - 17:30</span>
<span class="text-[10px] font-bold uppercase text-primary">Available</span>
</div>
</div>
</div>
<!-- Evening -->
<div class="space-y-4">
<h4 class="text-sm font-bold uppercase tracking-widest text-secondary-fixed-dim px-2 flex items-center gap-2">
<span class="material-symbols-outlined text-sm">bedtime</span> Evening
                            </h4>
<div class="space-y-2">
<div class="p-4 rounded-xl bg-primary/10 border border-primary/20 flex justify-between items-center">
<span class="font-medium text-sm text-primary">18:00 - 19:30</span>
<span class="text-[10px] font-bold uppercase text-primary">Available</span>
</div>
<div class="p-4 rounded-xl bg-surface-container flex justify-between items-center opacity-50">
<span class="font-medium text-sm">19:30 - 21:00</span>
<span class="text-[10px] font-bold uppercase text-secondary">Booked</span>
</div>
<div class="p-4 rounded-xl bg-surface-container flex justify-between items-center opacity-50">
<span class="font-medium text-sm">21:00 - 22:30</span>
<span class="text-[10px] font-bold uppercase text-secondary">Booked</span>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Promotional Section -->
<section class="py-24 px-8 max-w-7xl mx-auto overflow-hidden">
<div class="relative rounded-[3rem] bg-secondary p-12 md:p-20 overflow-hidden">
<div class="absolute top-0 right-0 w-1/2 h-full hidden lg:block">
<img alt="Coach Action" class="w-full h-full object-cover opacity-60 mix-blend-multiply" data-alt="Professional padel coach giving a lesson to a student on court, focus on the technique and movement" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC5in9nP7S-mRJAhVhdsSjVuCP7cLJ1295sPpuoc2Jp2FHAQhQ6WImm3ut2DUGz95QkNuDgpQ_phZNWcLiQYGNMi-ZhjQXx-GwXtO0XtQtlbpvs0iEbeYQO3-EsLRE8qqRpBo33bPJ6Ww7sbgFJhATKKf8Er7nXX7cLOD1MSVgulWsbYjzlOlEf0IPmGIxgEYMnF7TmspdGlsHtpEJ3yXagpwsbt3SdLhFNm5IKrW7VxfDluh2_bZma2LR9frrsyofBDT3_JNzQEjt9"/>
</div>
<div class="relative z-10 max-w-xl">
<h2 class="text-4xl md:text-5xl font-black text-white tracking-tighter leading-none mb-8">
                        Join the <br/><span class="text-tertiary-fixed-dim">Inner Circle.</span>
</h2>
<p class="text-on-secondary-fixed text-lg mb-10 font-body">
                        Members get priority booking, 20% off court fees, and access to our exclusive monthly clinics with touring pros.
                    </p>
<div class="space-y-6">
<div class="flex items-start gap-4">
<span class="material-symbols-outlined text-tertiary-fixed-dim bg-white/10 p-2 rounded-lg" style="font-variation-settings: 'FILL' 1;">workspace_premium</span>
<div>
<h4 class="text-white font-bold">Gold Membership</h4>
<p class="text-white/60 text-sm">Unlimited play during off-peak hours.</p>
</div>
</div>
<div class="flex items-start gap-4">
<span class="material-symbols-outlined text-tertiary-fixed-dim bg-white/10 p-2 rounded-lg" style="font-variation-settings: 'FILL' 1;">sports_kabaddi</span>
<div>
<h4 class="text-white font-bold">Expert Coaching</h4>
<p class="text-white/60 text-sm">One-on-one sessions with ITF certified coaches.</p>
</div>
</div>
</div>
<button class="mt-12 px-10 py-5 bg-tertiary text-on-tertiary rounded-2xl font-black uppercase tracking-widest text-sm shadow-2xl hover:bg-tertiary-container transition-colors">
                        Explore Memberships
                    </button>
</div>
</div>
</section>
@endsection
