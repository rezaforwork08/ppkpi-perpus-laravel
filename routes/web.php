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

Route::get('login', [\App\Http\Controllers\LoginController::class, 'index']);
Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);
Route::resource('category', \App\Http\Controllers\CategoryController::class);
// get, post,put, delete
Route::resource('belajar', \App\Http\Controllers\BelajarController::class);
Route::resource('user', \App\Http\Controllers\UserController::class);
Route::get('tambah', [\App\Http\Controllers\BelajarController::class, 'tambah']);
Route::post('store_tambah', [\App\Http\Controllers\BelajarController::class, 'storeTambah'])->name('store_tambah');
// Route::get('delete/{id}', )
Route::get('/', function () {
    return view('login');
});
