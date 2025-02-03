<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\AuthController;
// Route::middleware('guest')->group(function () {
//     // Show login form (only accessible to guests)
//     Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    
//     // Show registration form (only accessible to guests)
//     Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
// });
Route::get('/', function () {
    return redirect()->route('board.index');
});
Route::resource('board',BoardController::class)
                ->only(['index','show']);

Route::middleware('guest')->group(function(){

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    
});

Route::post('/register',[AuthController::class, 'register']);

Route::get('dashboard',fn()=>view('components.dashboard'))
            ->middleware('auth')
            ->name('dashboard');
