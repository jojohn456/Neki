<?php

use App\Http\Middleware\UserMiddleware;
use Illuminate\Support\Facades\Route;


Route::get('/register', function () {
    return view('welcome');
});


Route::middleware([UserMiddleware::class])->group(function () {
    Route::get('/', function () {
    });
});
