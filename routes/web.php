<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', ['footerType' => 'accueil']);
})->name('accueil');

Route::get('/inscription', function () {
    return view('inscription', ['footerType' => 'formulaire']);
})->name('inscription');

Route::get('/don', function () {
    return view('don', ['footerType' => 'formulaire']);
})->name('don');

Route::get('/payement', function () {
    return view('payement', ['footerType' => 'formulaire']);
})->name('payement');

Route::get('/nationale', function () {
    return view('nationale', ['headerType' => 'actualites', 'footerType' => 'actualites']);
})->name('nationale');

Route::get('/local', function () {
    return view('local', ['headerType' => 'actualites', 'footerType' => 'actualites']);
})->name('local');

Route::get('/district', function () {
    return view('district', ['headerType' => 'actualites', 'footerType' => 'actualites']);
})->name('district');

Route::get('/circuit', function () {
    return view('circuit', ['headerType' => 'actualites', 'footerType' => 'actualites']);
})->name('circuit');
