<?php

use App\Http\Controllers\API\PlacesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/places', [PlacesController::class, 'index']);

Route::post('/places', [PlacesController::class, 'store']);
