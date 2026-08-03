<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/commission', function () {
    return view('commission.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});