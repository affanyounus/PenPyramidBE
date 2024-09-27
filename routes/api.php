<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatronControllers as PatronControllers;

// Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware(['auth:sanctum'], function (Request $request) {

    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});

Route::get('/profiles', [PatronControllers\ProfileController::class, 'index'])->name('profiles.index');
