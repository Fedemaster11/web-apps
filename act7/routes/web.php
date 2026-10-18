<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('landingpage');
})->name('landing');

Auth::routes();

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');