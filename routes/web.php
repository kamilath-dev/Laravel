<?php

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
    return view('welcome');
});

Route::prefix('/')->name('Blog.')->group(function () {
    Route::get('MyBlog', \App\Http\Controllers\BlogController::class);
    //Route::get('login', \App\Http\Controllers\RegisterController::class);
});
