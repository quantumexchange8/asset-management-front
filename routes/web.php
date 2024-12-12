<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send.email');

