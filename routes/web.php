<?php

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


Route::get('/posts',[\App\Http\Controllers\PostsController::class,'main']);


Route::get('/posts/create',[\App\Http\Controllers\PostsController::class,'create']);




Route::post('/posts/store',[\App\Http\Controllers\PostsController::class,'shop'])->name('post_shop');

Route::get('/posts/{id}/edit',[\App\Http\Controllers\PostsController::class,'edit'])->name('post_edit');

Route::put('/posts/{id}/update',[\App\Http\Controllers\PostsController::class,'update'])->name('post_update');
Route::get('posts/{id}',[\App\Http\Controllers\PostsController::class,'show']);

Route::delete('/posts/{id}/delete',[\App\Http\Controllers\PostsController::class,'delete'])->name('post_delete');
