


<?php

use Illuminate\Support\Facades\Route;

// Frontend Routes
Route::get('/', [App\Http\Controllers\FrontController::class, 'blog'])->name('blog');
Route::get('/blog-post/{id}', [App\Http\Controllers\FrontController::class, 'blogPost'])->name('blog-post');

// Backend Routes
Route::group(['prefix' => 'backend', 'as' => 'backend.'], function () {
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('posts',App\Http\Controllers\Admin\PostController::class);
    Route::resource('categories',App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('users',App\Http\Controllers\Admin\UserController::class);
    
    Route::post('/backend/users/store', [UserController::class, 'store'])->name('backend.users.store');

});

// Authentication Routes
Auth::routes();
 
// Home Route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

