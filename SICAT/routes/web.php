<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');