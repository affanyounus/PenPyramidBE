<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware(['auth:sanctum'], function (Request $request) {

    print_r($request);

    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
