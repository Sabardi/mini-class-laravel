<?php

use App\Http\Controllers\TravelPlatController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/travel', [TravelPlatController::class, 'index']);

Route::resource('travel', TravelPlatController::class);