<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
// Route::get('/home', [AuthController::class, 'home']);
Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/hs', function () {
    return redirect('homestart');
})->name('home');