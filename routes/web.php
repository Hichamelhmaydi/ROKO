<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', function () {
    return redirect('/dashboard');
})->name('register.post');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');






Route::view('/avis', 'voyages.avis');
Route::view('/les-images', 'voyages.les-image');
Route::view('/paiment', 'voyages.paiment');
Route::view('/itineraire', 'voyages.itineraire');
Route::view('/explorer', 'voyages.explorer');
Route::view('/profile', 'auth.profile');
Route::view('/paiment_form', 'voyages.paiment_form');

