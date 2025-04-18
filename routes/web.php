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
Route::view('/statistiques', 'admin.statistiques');
Route::view('/reservations', 'admin.reservations');
Route::view('/voyageurs', 'admin.voyageurs');
Route::view('/gestion-avis', 'admin.gestion_avis');
Route::view('/gestion-personel', 'admin.gestion_personel');
Route::view('/formule_personel', 'admin.formule_personel');
Route::view('/les-avtites', 'admin.les_activites');
Route::view('/activite-formule', 'admin.activite_formule');
Route::view('/voyageur-detail', 'admin.voyageur_detail');
Route::view('/personel-detail', 'admin.personel_detail');
Route::view('/gestion-voyages', 'admin.gestion_voyages');