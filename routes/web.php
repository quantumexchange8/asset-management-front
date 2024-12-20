<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

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

Route::get('/insight', function () {
    return view('insight');
})->name('insight');

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

