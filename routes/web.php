<?php

use Illuminate\Support\Facades\Route;

// Routes waar de gebruiker toegang tot heeft zonder geauthenticeerd te zijn
Route::get('/', function () {return view('screens.index');});
Route::get('/over-ons', function () {return view('screens.about-us');});
Route::get('/de-werkwijze', function () {return view('screens.strategy');});
Route::get('/contact', function () {return view('screens.contact');});
Route::get('/login', function () {return view('screens.auth.login');})->name('login');
Route::get('/registreren', function () {return view('screens.auth.register');});

// Routes voor het inloggen en registreren
Route::post('/register', [\App\Http\Controllers\UserController::class, 'register'])->name('register-user');
Route::post('/login', [\App\Http\Controllers\UserController::class, 'login'])->name('login-user');

Route::middleware('auth')->group(function () {
    Route::get('/mijn-account', [\App\Http\Controllers\UserController::class, 'dashboard'])->name('dashboard');
    Route::post('/mijn-account/edit', [\App\Http\Controllers\UserController::class, 'completeRegistration'])->name('complete-registration');
    Route::post('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('logout');
});

