<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;
Route::get('/', function () {
    return redirect()->route('board.index');
});
Route::resource('board',BoardController::class)
                ->only(['index','show']);