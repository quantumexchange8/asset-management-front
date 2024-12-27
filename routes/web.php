<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Mews\Captcha\Facades\Captcha;

// Redirect to the default locale if no locale is specified
Route::get('localization/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'cn'])) {
        abort(400);
    }

    App::setlocale($locale);
    Session::put("locale", $locale);
    return back();
})->name('locale');

Route::get('/', function () {
    return view('index');
})->name('home');;

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/corevalue', function () {
    return view('corevalue');
})->name('corevalue');

Route::get('/overview', function () {
    return view('overview');
})->name('overview');

Route::get('/approach', function () {
    return view('approach');
})->name('approach');

Route::get('/performance', function () {
    return view('performance');
})->name('performance');

Route::get('/performance2', function () {
    return view('performance2');
})->name('performance2');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::post('/sendmail', [ContactController::class, 'sendEmail'])->name('send.email');

Route::get('captcha', [Captcha::class, 'create'])->name('captcha'); 
Route::get('/captcha/refresh', [Captcha::class, 'create'])->name('captcha.refresh');
