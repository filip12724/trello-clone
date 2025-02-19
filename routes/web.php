<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('index'); 
})->name('home');


Route::get('/dashboard', [BoardController::class, 'index'])
    ->middleware('auth')
    ->name('boards.index');



Route::resource('board', BoardController::class)
    ->only(['index', 'show'])
    ->middleware('auth');



Route::middleware('guest')->group(function(){

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::get('/login',[AuthController::class,'showLoginForm'])->name('login');
});

Route::post('/register',[AuthController::class, 'register']);
Route::post('/login',[AuthController::class, 'login']);
Route::post('/logout',[AuthController::class,'logout'])->name('logout');


