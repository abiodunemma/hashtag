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

Route::get('/', function () {

    return view('/Book/create');
});

Route::post('/Book', [App\Http\Controllers\BookController::class, 'store']);
Route::get('/Book/create', [App\Http\Controllers\BookController::class, 'index']);
Route::get('/Book/play', [App\Http\Controllers\BookController::class, 'play']);
Route::get('/Book/profile', [App\Http\Controllers\BookController::class, 'profile'])->middleware(('auth'));
Route::get('/Book/{id}', [App\Http\Controllers\BookController::class, 'show']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
