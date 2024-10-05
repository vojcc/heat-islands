<?php

use App\Http\Controllers\PlacesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return inertia('Index');
});

Route::get('/maps/Wroclaw', [PlacesController::class, 'index']);

Route::get('/maps/Wroclaw/session/{session_id}', [PlacesController::class, 'indexBySession']);


Route::get('/about', function () {
    return inertia('About');
});

Route::get('/contact', function() {
    return inertia('Contact');
});

Route::get('/learn', function() {
    return inertia('Learn');
});

Route::get('/news', function() {
    return inertia('News');
});




