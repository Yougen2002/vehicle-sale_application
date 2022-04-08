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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [
    \App\Http\Controllers\ContactController::class,
    'show'
])->name('contact.show');

Route::post('/contact', [
    \App\Http\Controllers\ContactController::class,
    'store'
])->name('contact.store');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
