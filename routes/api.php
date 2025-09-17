<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Route::get('/locations', [LocationController::class, 'index']);
//Route::post('/locations', [LocationController::class, 'store']);
//Route::get('/locations/{location}', [LocationController::class, 'show']);
//Route::put('/locations/{location}', [LocationController::class, 'update']);
//Route::delete('/locations/{location}', [LocationController::class, 'destroy']);

Route::apiResource('locations', LocationController::class);
//Route::put('/locations', [LocationController::class, 'updateAll']);