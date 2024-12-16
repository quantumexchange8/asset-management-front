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

Route::get('/insight', function () {
    return view('insight');
});

Route::get('/performance', function () {
    return view('performance');
});

Route::get('/performance2', function () {
    return view('performance2');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::post('/sendmail', [ContactController::class, 'sendEmail'])->name('send.email');

