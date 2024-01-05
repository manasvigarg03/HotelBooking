<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

//hotels
Route::get('hotel/rooms{id}', [App\Http\Controllers\Hotels\HotelsController::class, 'rooms'])->name('hotel.rooms');
Route::get('hotel/rooms-details{id}', [App\Http\Controllers\Hotels\HotelsController::class, 'roomsDetails'])->name('hotel.rooms.details');

Route::post('hotel/rooms-booking{id}', [App\Http\Controllers\Hotels\HotelsController::class, 'roomsBooking'])->name('hotel.rooms.booking');