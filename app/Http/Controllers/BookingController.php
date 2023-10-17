<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Seat;


class BookingController extends Controller
{
    public function bookSeats(Request $request)
    {

        $this->validate($request, [
            'seat_id' => 'required',
            'movie_name' => 'required'
        ]);

        $booking = new Booking;
        $booking->seat_id = $request->seat_id;
        $booking->movie_name = $request->movie_name;
        $booking->save();

        $seatIds = is_array($request->seat_id) ? $request->seat_id : [$request->seat_id];

        Seat::whereIn('id', $seatIds)->update(['is_available' => 0]);

        return response()->json(['message' => 'Booking successfully made'], 201);
    }
}