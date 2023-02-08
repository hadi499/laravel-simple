<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/', [PostController::class, 'index']);
    Route::get('/post/{post:id}', [PostController::class, 'show']);
    Route::get('/post/edit/{post:id}', [PostController::class, 'edit']);
    Route::post('/post/edit/{post:id}', [PostController::class, 'update']);
    Route::get('/create', [PostController::class, 'create']);
    Route::post('/create', [PostController::class, 'store']);
    Route::delete('/post/{post:id}', [PostController::class, 'destroy']);
});


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/about', function () {
    return view('about');
});
