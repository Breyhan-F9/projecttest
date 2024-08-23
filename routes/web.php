<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate'])->name('login');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/post', [PostController::class, 'index'])->middleware('auth', 'author')->name('author.index');

Route::get('/account', [UserController::class, 'index'])->middleware('auth', 'admin')->name('admin.index');

Route::get('/createaccount', [UserController::class, 'create'])->middleware('auth', 'admin')->name('admin.create');


