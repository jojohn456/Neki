<?php

use App\Http\Middleware\PublicMiddleware;
use App\Http\Middleware\UserMiddleware;
use Illuminate\Support\Facades\Route;

Route::middleware([PublicMiddleware::class], 'throttle:60,1')->group(function () {
    Route::get('/register', function () {
    });
});

Route::middleware([UserMiddleware::class], 'throttle:60,1')->group(function () {
    Route::get('/', function () {
    });
});
