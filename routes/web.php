<?php

use App\Http\Controllers\GaleryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.home');
});

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/', [GaleryController::class, 'index']);
