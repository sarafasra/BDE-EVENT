<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;


Route::get('/', function () {
    return view('welcome');  
});
Route::middleware(['auth','admin'])->group(function () {

    Route::get('/events/create', [EventController::class,'create']);
Route::post('/events', [EventController::class,'store'])
    ->name('events.store');
});
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.post');
Route::post('/logout', [AuthController::class , 'logout'])->name('logout');
Route::get('/events', [EventController::class, 'index'])->name('event.index');