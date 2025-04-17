<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VolunteerController;
use Illuminate\Http\Request;  // Add this line to import the Request class


Route::get('/volunteers', [VolunteerController::class, 'index']);
Route::get('/volunteers-list', [VolunteerController::class, 'showVolunteers']);
Route::post('/volunteers', [VolunteerController::class, 'store']);

// Only protect routes that need authentication with Sanctum
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Protect volunteer routes with Sanctum
Route::middleware('auth:sanctum')->get('/volunteers', [VolunteerController::class, 'index']);
Route::resource('volunteers', VolunteerController::class);
