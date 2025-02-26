<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('index'); 
})->name('home');


Route::get('/dashboard', [BoardController::class, 'index'])
    ->name('boards.index')
    ->middleware('auth');

Route::resource('board', BoardController::class)
    ->middleware('auth');

Route::get('/boards/create',[BoardController::class,'create'])
    ->name('boards.create')
    ->middleware('auth');

Route::middleware('guest')->group(function(){

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::get('/login',[AuthController::class,'showLoginForm'])->name('login');
});

Route::post('/register',[AuthController::class, 'register']);
Route::post('/login',[AuthController::class, 'login']);
Route::post('/logout',[AuthController::class,'logout'])->name('logout');


