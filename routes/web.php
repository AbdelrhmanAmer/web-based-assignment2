<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BornController;
use Illuminate\Support\Facades\Route;
use Ixudra\Curl\Facades\Curl;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::post('/login',    [AuthController::class, 'loginPost'])->name('login.post');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post');
Route::get('/logout',    [AuthController::class, 'logout'])->name('logout');

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () { //...

        Route::get('/', function () {
            return view('welcome');
        })->name('home');

        Route::get('/login', [AuthController::class, 'login'])->name('login');
        Route::get('/register', [AuthController::class, 'register'])->name('register');
    }
);

Route::get('/actors_ids/{date}', [BornController::class, 'getActorsIds'])->name('actors_ids');