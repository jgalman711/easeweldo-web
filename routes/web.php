<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardController as CompanyDashboardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\Personal\DashboardController;
use App\Http\Controllers\Personal\LeaveController;
use App\Http\Controllers\Personal\LoginController as PersonalLoginController;
use App\Http\Controllers\Personal\PayrollController;
use App\Http\Controllers\Personal\ProfileController;
use App\Http\Controllers\Personal\QrController;
use App\Http\Controllers\Personal\TimesheetController;
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

Route::group(['middleware' => 'auth.redirect'], function () {
    Route::resource('/login', LoginController::class)->only('index', 'store');
    Route::resource('/register', RegisterController::class)->only('index', 'store');
    Route::resource('/forgot-password', ForgotPasswordController::class)->only('index', 'store');
    Route::get('reset-password', [ResetPasswordController::class, 'index']);
    Route::post('reset-password', [ResetPasswordController::class, 'store']);

});

Route::group(['middleware' => 'auth.bearer'], function () {
    Route::get('/logout', [LogoutController::class, 'index']);
    Route::get('company', [CompanyController::class, 'edit'])->name('company.edit');
    Route::get('company/complete-registration', [CompanyController::class, 'complete'])->name('company.complete');
    Route::get('dashboard', [CompanyDashboardController::class, 'index'])->name('company.dashboard');
    Route::resource('/subscriptions', SubscriptionController::class)->only('index', 'store');
});

Route::prefix('personal')->group(function () {
    Route::group(['middleware' => 'auth.redirect'], function () {
        Route::get('/login', [PersonalLoginController::class, 'index'])->name('personal.login');
        Route::post('/login', [PersonalLoginController::class, 'store']);
    });
    Route::get('/logout', [PersonalLoginController::class, 'logout']);
    Route::group(['middleware' => 'auth.bearer'], function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('personal.dashboard');
        Route::get('profile', [ProfileController::class, 'index'])->name('profile');
        Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::post('profile/update', [ProfileController::class, 'update'])->name('profile.update');
        Route::get('scan-qr', [QrController::class, 'index'])->name('scan-qr');
        Route::get('create-qr', [QrController::class, 'create'])->name('create-qr');
        Route::get('timesheet', [TimesheetController::class, 'index'])->name('personal.timesheet');
        Route::resource('/leaves', LeaveController::class)->only('index', 'store', 'create');
        Route::resource('/payrolls', PayrollController::class)->only('index', 'show');
    });
});