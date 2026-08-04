<?php

use App\Http\Controllers\PaymentController;
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

Route::get('/user-profile', function () {
    return view('user-profile');
});

Route::get('/payment', [PaymentController::class, 'index']);