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
        Route::get('line-chart', 'RekamMedisController@LineChart');
        Route::get('line-chart-anak', 'CatatTumbuhController@LineChart');
        Route::resource('home', HomeController::class);
        Route::resource('rekam_medis', RekamMedisController::class);
        Route::resource('lokasi_pengecekan', LokasiPengecekanController::class);
        Route::resource('catat_tumbuh', CatattumbuhController::class);
        Route::resource('artikel', ArtikelController::class);
        Route::resource('event', EventController::class);
        Route::resource('profil', ProfilController::class);
        Route::resource('profil_anak', ProfilanakController::class);
    });
});