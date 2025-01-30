<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index'); // ✅ Ensures this route has the name "index"

Route::get('', function () {
    return redirect()->route('index'); // ✅ Redirects empty path to "/"
});
