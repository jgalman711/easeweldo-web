<?php

use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::resource('/', IndexController::class)->only('index');
Route::resource('/login', LoginController::class)->only('index', 'store');
Route::resource('/register', RegisterController::class)->only('index', 'store');
Route::resource('/forgotpassword', ForgotPasswordController::class)->only('index', 'store');
