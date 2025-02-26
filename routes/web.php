<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuizController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/home', [QuizController::class, 'home'])->name('home')->middleware('auth');
Route::get('/game/start', [QuizController::class, 'new_start'])->name('game.start')->middleware('auth');
Route::get('/game/video', [QuizController::class, 'video'])->name('game.video')->middleware('auth');
Route::get('/game/quiz', [QuizController::class, 'quiz'])->name('game.quiz')->middleware('auth');
Route::get('/dashboard', [QuizController::class, 'dashboard'])->name('dashboard')->middleware('auth');












// Route::get('/home', function () {
//     return view('home');
// })->middleware('auth')->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware('auth');


// Route::get('/game/start', function () {
//     return view('game/levels');
// })->middleware('auth')->name('game.start');

// Route::get('/game/quiz', function () {
//     return view('game/quiz');
// })->middleware('auth')->name('game.quiz');



// Route::get('/hs', function () {
//     return redirect('homestart');
// })->name('home');
