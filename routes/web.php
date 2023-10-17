<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\TheaterController;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Registration Routes
Route::post('/register', [AuthController::class, 'register']);

// Login Routes
Route::post('/login', [AuthController::class, 'login']);

// Seats Routes
Route::get('/seats', [SeatController::class, 'index']);

// Theaters Routes
Route::get('/theaters', [TheaterController::class, 'index']);

// Booking Routes
Route::post('/booking', [BookingController::class, 'bookSeats']);