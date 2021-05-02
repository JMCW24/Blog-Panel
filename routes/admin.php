<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;


Route::get('/home',[HomeController::class,'index'])->middleware('can:admin.home')->name('admin.index');


Route::resource('users', UserController::class)->names('admin.users');

Route::resource('categories', CategoryController::class)->except('show')->names('admin.categories');
Route::resource('tags',TagController::class)->except('show')->names('admin.tag');
Route::resource('post', PostController::class)->except('show')->names('admin.post');

