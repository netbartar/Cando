<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CommentController;


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
Route::get('post/{id}/edit',[PostController::class,'edit'])->name('post.edit');
Route::put('post/{id}/update',[PostController::class,'updatePost'])->name('post.update');
Route::delete('post/{id}',[PostController::class,'delete'])->name('post.delete');


//Route::get('product/create',[ProductController::class,'createProduct'])->name('product.create');
//Route::post('product/store',[ProductController::class,'storeProduct'])->name('product.store');
//Route::get('products',[ProductController::class,'productList'])->name('product.index');
//Route::get('product/{id}',[ProductController::class,'productShow'])->name('product.show');
//Route::get('product/{id}/edit',[ProductController::class,'productEdit'])->name('product.edit');
//Route::put('product/update/{id}',[ProductController::class,'productUpdate'])->name('product.update');
//Route::delete('product/{id}',[ProductController::class,'productDelete'])->name('product.delete');
//Route::get('product/{id}/activation',[ProductController::class,'productActivation'])->name('product.activation');


Route::resource('roles',RoleController::class);

Route::controller(UserController::class)->group(function (){
    Route::name('user.')->group(function (){

        Route::get('user/create','createUser')->name('create');
        Route::post('user/store','storeUser')->name('store');
        Route::get('users','listOfUsers')->name('index');
    });
});

Route::get('post/comment/create/{id}',[CommentController::class,'createComment'])->name('comment.create');
Route::post('post/comment/store/{id}',[CommentController::class,'storeComment'])->name('comment.store');
