<?php


use App\Http\Middleware\UserMiddleware;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/signup', [UserController::class, 'signUpUser']);
