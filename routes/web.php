<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});

Auth::routes([]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/redirect/{service}', [App\Http\Controllers\SocialController::class, 'redirect']);
Route::get('/callback/{service}', [App\Http\Controllers\SocialController::class, 'callback']);
