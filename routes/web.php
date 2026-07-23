<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use  App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('welcome');  
});
Route::middleware(['auth','admin'])->group(function () {

    Route::get('/events/create', [EventController::class,'create']);
Route::post('/events', [EventController::class,'store'])  
    ->name('events.store');
});

Route::post('/reservations/{event}' , [ReservationController::class, 'store'])->name('reservations.store');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.post');
Route::post('/logout', [AuthController::class , 'logout'])->name('logout');
Route::get('/events', [EventController::class, 'index'])->name('event.index');
Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
Route::put('/events/{event}', [EventController::class,'update'])
    ->name('events.update');Route::delete('/events/{event}', [EventController::class, 'destroy'])
    ->name('events.destroy');
Route::get('/mes-billets', [ReservationController::class, 'index'])
    ->name('reservations.index');