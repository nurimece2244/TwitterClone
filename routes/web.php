<?php

use Illuminate\Support\Facades\Route;
use App\Models\tweets;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

#Auth::routes();

#Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::resource('/tweets','App\Http\Controllers\TweetsController');
Route::post('/comments',  'App\Http\Controllers\CommentsController@store');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user/{user}', 'App\Http\Controllers\UserController@viewProfile');

Route::get('/user/{user}/addFriend',    'App\Http\Controllers\UserController@addFriend');
Route::get('/user/{user}/removeFriend', 'App\Http\Controllers\UserController@removeFriend');

Route::get('/tweets/{tweets}/like',    'App\Http\Controllers\TweetsController@like');
Route::get('/tweets/{tweets}/dislike',    'App\Http\Controllers\TweetsController@dislike');
Route::get('/tweets/{tweets}/likeCount', 'App\Http\Controllers\TweetsController@likeCount');
#Route::get('/user/{user}/dislike', 'App\Http\Controllers\TweetsController@dislike');

Route::get('/user/{user}/takipci', 'App\Http\Controllers\UserController@takipci');
Route::get('/user/{user}/takipEdilen', 'App\Http\Controllers\UserController@takipEdilen');


