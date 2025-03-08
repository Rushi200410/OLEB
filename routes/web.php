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
<<<<<<< HEAD
// Route::get('/home', [AuthController::class, 'home']);
Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');
=======
>>>>>>> c095fac8ea9a3623587c3f9747922b3cba3eb96f



Route::get('/home', [QuizController::class, 'home'])->name('home')->middleware('auth');
Route::get('/game/continue', [QuizController::class, 'continue'])->name('continue')->middleware('auth');
Route::get('/game/start', [QuizController::class, 'new_start'])->name('game.start')->middleware('auth');
Route::get('/game/video', [QuizController::class, 'video'])->name('game.video')->middleware('auth');
Route::get('/game/quiz/{question_no}', [QuizController::class, 'quiz'])->where('question_no', '[0-9]+')->name('game.quiz')->middleware('auth');
Route::get('/game/quiz/{question_no}/{correct}', [QuizController::class, 'verify_quiz'])->where('question_no', '[0-9]+')->name('game.quiz.verify')->middleware('auth');
Route::get('/rest', [QuizController::class, 'rest'])->where('score', '[0-9]+')->name('game.rest')->middleware('auth');


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
