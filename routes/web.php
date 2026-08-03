<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/commission', function () {
    return view('commission.index');
});

Route::get('/dahboard', function () {
    return view('dashboard');
});