<?php

use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\SubscriptionController;
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
Route::resource('/forgot-password', ForgotPasswordController::class)->only('index', 'store');
Route::get('reset-password', [ResetPasswordController::class, 'index']);
Route::post('reset-password', [ResetPasswordController::class, 'store']);

Route::group(['middleware' => 'auth.bearer'], function () {
    Route::resource('/subscriptions', SubscriptionController::class)->only('index', 'store');
});
