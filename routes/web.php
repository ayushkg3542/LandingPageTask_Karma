<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/',[MailController::class, 'home'])->name('home');
Route::post('/landing-form-submit', [MailController::class, 'landingForm'])->name('landingForm');

