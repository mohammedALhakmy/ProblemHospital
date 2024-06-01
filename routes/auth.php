<?php

use App\Http\Controllers\Auth\AdminContoller;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RayEmployeeController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

//Route::middleware('guest')->group(function () {

// Routes User Login
    Route::get('Admin/Login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('store');

    Route::post('logout/user', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout.User');

//});
// Routes Admin Login
    Route::post('Admin/Login',[AdminContoller::class,'store'])->name('admin.login');
    Route::get('logout', [AdminContoller::class, 'destroy'])->name('logout');

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');


    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    //################################## Route RayEmployee ##############################################

Route::post('/login/ray_employee', [RayEmployeeController::class, 'store'])->middleware('guest')->name('login.ray_employee');

Route::post('/logout/ray_employee', [RayEmployeeController::class, 'destroy'])->middleware('auth:ray_employee')->name('logout.ray_employee');

//#############################################################################################


    Route::put('password', [PasswordController::class, 'update'])->name('password.update');


});
