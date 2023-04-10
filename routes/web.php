<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    Route::get('register', [UserController::class, 'register'])->name('register');
    Route::post('register', [UserController::class, 'register_action'])->name('register.action');
    Route::get('login', [UserController::class, 'login'])->name('login');
    Route::post('login', [UserController::class, 'login_action'])->name('login.action');
    Route::resource('', HomeController::class);
});
Route::group(['middleware' => 'auth'], function()
{
    Route::group(['namespace' => 'App\Http\Controllers'], function()
    {
        Route::get('logout', [UserController::class, 'logout'])->name('logout');
    });
});