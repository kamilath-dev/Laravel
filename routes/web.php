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

Route::prefix('/MyBlog')->name('Blog.')->group(function () {
    Route::get('/', \App\Http\Controllers\BlogController::class )->name('Accueil');

});

Route::post('/store', [\App\Http\Controllers\LoginController::class, 'store'])->name('store');
Route::get('/registration', [\App\Http\Controllers\LoginController::class, 'showForm'])->name('register');
