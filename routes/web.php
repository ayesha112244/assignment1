<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItineraryController;

// Default route
Route::get('/', [ItineraryController::class, 'index']);

// Resource routes for CRUD
Route::resource('itineraries', ItineraryController::class);

Route::get('/about', function () {
    return view('about');
});
