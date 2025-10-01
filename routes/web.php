<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/profil', function () {
    return view('profil');
})->name('profil');

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
})->name('mahasiswa');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
