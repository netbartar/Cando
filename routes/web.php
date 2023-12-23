<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

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
    return view('welcome');
});

Route::get('posts',[PostController::class,'postList'])->name('post.index');
Route::get('post/{id}',[PostController::class,'show'])->name('post.show');
Route::get('post/create/new',[PostController::class,'create'])->name('post.create');
Route::post('post/store',[PostController::class,'storePost'])->name('post.store');







