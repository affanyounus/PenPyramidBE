<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatronControllers as PC;

Route::middleware(['auth:sanctum'])->group(function () {

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::apiResource('organizations', PC\OrganizationController::class);

    Route::apiResource('profiles', PC\ProfileController::class);
});


