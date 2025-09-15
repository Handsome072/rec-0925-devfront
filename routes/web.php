<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Routes pour Andson - Test psychotechnique
Route::get('/andson-completez-votre-reservation', function () {
    return view('andson.reservation');
})->name('andson.reservation');

Route::get('/andson-paiement', function () {
    return view('andson.paiement');
})->name('andson.paiement');
