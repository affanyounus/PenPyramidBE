<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});


Route::get('/test', function () {

    sleep(10);

    return 'Hello test';


});

require __DIR__.'/auth.php';
