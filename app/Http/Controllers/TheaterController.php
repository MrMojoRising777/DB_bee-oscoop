<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theater;

class TheaterController extends Controller
{
    public function index()
    {
        $theaters = Theater::all();

        return response()->json($theaters);
    }
}
