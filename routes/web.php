<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $bookings = \App\Models\Booking::with('court')->where('user_id', auth()->id())
        ->orderBy('date')->orderBy('start_time')->get();
    return view('dashboard', compact('bookings'));
})->middleware(['auth', 'verified'])->name('dashboard');

use App\Http\Controllers\BookingController;

Route::get('/booking', [BookingController::class, 'index'])->middleware(['auth'])->name('booking');
Route::post('/api/booking', [BookingController::class, 'store'])->middleware(['auth'])->name('api.booking.store');
Route::get('/api/courts/{court}/slots', [BookingController::class, 'getSlots'])->middleware(['auth'])->name('api.slots');

Route::get('/owner/dashboard', function () {
    $totalRevenue = (float) \App\Models\Payment::where('status', 'paid')->sum('amount');
    $totalBookings = \App\Models\Booking::whereIn('status', ['confirmed', 'completed'])->count();
    $newUsers = \App\Models\User::where('created_at', '>=', now()->subDays(30))->count();
    $recentBookings = \App\Models\Booking::with(['user', 'court'])->latest()->take(5)->get();
    
    // Calculate mock occupancy rate based on courts and total hours
    $occupancyRate = 74.2; 
    
    $courts = \App\Models\Court::withCount('bookings')->get();

    return view('owner-dashboard', compact('totalRevenue', 'totalBookings', 'newUsers', 'occupancyRate', 'recentBookings', 'courts'));
})->middleware(['auth'])->name('owner.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
