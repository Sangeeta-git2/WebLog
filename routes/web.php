<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {
Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
Route::get('category',[App\Http\Controllers\Admin\CategoryController::class,'index']);
Route::get('add_category',[App\Http\Controllers\Admin\CategoryController::class,'create']);
Route::post('add_category',[App\Http\Controllers\Admin\CategoryController::class,'store']);
Route::get('edit_category/{category_id}',[App\Http\Controllers\Admin\CategoryController::class,'edit']);
Route::put('update_category/{category_id}',[App\Http\Controllers\Admin\CategoryController::class,'update']);
Route::get('delete_category/{category_id}',[App\Http\Controllers\Admin\CategoryController::class,'destroy']);

Route::get('posts',[App\Http\Controllers\Admin\PostController::class,'index']);
Route::get('add_post',[App\Http\Controllers\Admin\PostController::class,'create']);


});
