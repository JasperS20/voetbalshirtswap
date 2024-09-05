<?php

use Illuminate\Support\Facades\Route;

//Toegangbare routes
Route::get('/', function () {return view('screens.home');});
Route::get('/over-ons', function () {return view('screens.about-us');});
Route::get('/de-werkwijze', function () {return view('screens.strategy');});
Route::get('/contact', function () {return view('screens.contact');});
Route::get('/login', function () {return view('screens.auth.login');});
Route::get('/register', function () {return view('screens.auth.register');});
