<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
})->name('welcome.route');

Route::get('/auta1', function () {
    return view('auta1');
})->name('auta1.route');

Route::get('/auta2', function () {
    return view('auta2');
})->name('auta2.route');

Route::get('/auta3', function () {
    return view('auta3');
})->name('auta3.route');

Route::get('/carModel', function () {
    return view('carModel');
})->name('carModel.route');

Route::get('/hry', function () {
    return view('hry');
})->name('hry.route');

Route::get('/serialy', function () {
    return view('serialy');
})->name('serialy.route');

Route::get('/top', function () {
    return view('top');
})->name('top.route');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
