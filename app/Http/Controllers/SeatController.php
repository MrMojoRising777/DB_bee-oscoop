<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seat;

class SeatController extends Controller
{
    public function index()
    {
        $seats = Seat::all();

        return response()->json($seats);
    }

    public function book()
    {
        //
    }
}