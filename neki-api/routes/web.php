<?php


use App\Http\Middleware\UserMiddleware;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware([UserMiddleware::class], 'throttle:60,1')->group(function () {
    Route::get('/register', function () {});
    Route::get('/user', [UserController::class, 'registerUser']);
});
