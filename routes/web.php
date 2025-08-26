<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', function () {
    return redirect()->route('locations.index');
});

Route::resource('locations', App\Http\Controllers\LocationController::class);
