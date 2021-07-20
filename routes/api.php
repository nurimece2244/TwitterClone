<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PollsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TweetsController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\UserController;


#Route::get('main',[MainController::class, 'index'] );
Route::post('main/checklogin',[MainController::class, 'checklogin'] );
Route::get('main/successlogin',[MainController::class, 'successlogin'] );
Route::post('main/logout',[MainController::class, 'logout'] );
Route::post('post', [AuthController::class, 'post']);
Route::post('login', [AuthController::class, 'login']);
Route::post('welcome', [AuthController::class, 'welcome']);
Route::post('register', [AuthController::class, 'register']);
Route::post('dashboard', [AuthController::class, 'dashboard']);
Route::post('tweets', [TweetsController::class, 'tweets']);
Route::post('user', [UserController::class, 'user']);





