<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Court;
use App\Models\Payment;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BookingController extends Controller
{
    public function index()
    {
        $courts = Court::where('status', 'active')->get();
        return view('booking', compact('courts'));
    }

    public function getSlots(Request $request)
    {
        $request->validate([
            'court_id' => 'required|exists:courts,id',
            'date' => 'required|date_format:d-m-Y'
        ]);

        $courtId = $request->court_id;
        $date = Carbon::createFromFormat('d-m-Y', $request->date)->format('Y-m-d');

        // Get booked slots for the day
        $bookings = Booking::where('court_id', $courtId)
            ->where('date', $date)
            ->whereIn('status', ['confirmed', 'pending'])
            ->get(['start_time']);

        $bookedSlots = $bookings->pluck('start_time')->map(function($time) {
            return Carbon::parse($time)->format('H:i');
        })->toArray();

        // Generate all slots from 07:00 to 22:00
        $allSlots = [];
        $start = Carbon::createFromTime(7, 0);
        $end = Carbon::createFromTime(22, 0);

        while ($start <= $end) {
            $timeString = $start->format('H:i');
            $status = in_array($timeString, $bookedSlots) ? 'booked' : 'available';
            
            // If it's today and the time has passed, mark as unavailable
            if ($date === now()->format('Y-m-d') && $timeString < now()->format('H:i')) {
                $status = 'unavailable';
            }

            $allSlots[] = [
                'time' => $timeString,
                'status' => $status
            ];
            $start->addHour();
        }

        return response()->json(['slots' => $allSlots]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'court_id' => 'required|exists:courts,id',
            'date' => 'required|date_format:d-m-Y',
            'start_time' => 'required|date_format:H:i',
        ]);

        $dateFormatted = Carbon::createFromFormat('d-m-Y', $request->date)->format('Y-m-d');
        $startTime = Carbon::createFromFormat('H:i', $request->start_time);
        $endTime = $startTime->copy()->addHour(); // Assuming 1 hr duration

        // Verify if slot is still available
        $exists = Booking::where('court_id', $request->court_id)
            ->where('date', $dateFormatted)
            ->where('start_time', $startTime->format('H:i:s'))
            ->whereIn('status', ['confirmed', 'pending'])
            ->exists();

        if ($exists) {
            return response()->json(['message' => 'Slot already booked'], 422);
        }

        $court = Court::findOrFail($request->court_id);

        $booking = Booking::create([
            'user_id' => auth()->id(),
            'court_id' => $court->id,
            'date' => $dateFormatted,
            'start_time' => $startTime->format('H:i:s'),
            'end_time' => $endTime->format('H:i:s'),
            'total_price' => $court->price_per_hour,
            'status' => 'confirmed'
        ]);

        Payment::create([
            'booking_id' => $booking->id,
            'amount' => $court->price_per_hour,
            'status' => 'paid',
            'payment_method' => 'credit_card',
            'payment_date' => now()
        ]);

        return response()->json([
            'message' => 'Booking confirmed successfully!',
            'booking_id' => $booking->id
        ]);
    }
}
