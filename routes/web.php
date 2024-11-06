<?php

use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/makebooking', function () {
    return view('pages.makebooking');
});
Route::get('/our-fleet', function () {
    return view('pages.our-fleet');
});
Route::get('/services', function () {
    return view('pages.services');
});
Route::get('/thankyou', function () {
    return view('pages.thankyou');
})->name('thankyou');

Route::post('send-email',[EmailController::class,'sendEmail'])->name('send.email');

