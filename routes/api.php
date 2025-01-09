<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategoriesController;
use App\Http\Middleware\TokenVerificationAPIMiddleware;


//user-auth==========================
Route::post('/user-registration', [UserController::class, 'userRegistraion'])->name('userRegistraion');
Route::post('/user-login', [UserController::class, 'userLogin'])->name('userLogin');
Route::post('/user-logout', [UserController::class, 'UserLogout'])->name('UserLogout');
Route::get('/send-otp', [UserController::class, 'SendOtpCode'])->name('SendOtpCode');
Route::post('/verify-otp', [UserController::class, 'VerifyOtp'])->name('VerifyOtp');

Route::post('/reset-password', [UserController::class, 'ResetPassword'])->middleware([TokenVerificationAPIMiddleware::class]);
Route::post('/user-profile', [UserController::class, 'UserProfile'])->middleware([TokenVerificationAPIMiddleware::class]);
Route::post('/user-update', [UserController::class, 'UpdateProfile'])->middleware([TokenVerificationAPIMiddleware::class]);
//user-auth==========================


//Category-list==========================
Route::post('/category-create', [CategoriesController::class, 'CategoryCreate'])->middleware([TokenVerificationAPIMiddleware::class]);
Route::get('/category-list', [CategoriesController::class, 'CategoryList'])->middleware([TokenVerificationAPIMiddleware::class]);
Route::post('/category-delete', [CategoriesController::class, 'CategoryDelete'])->middleware([TokenVerificationAPIMiddleware::class]);
Route::post('/category-update', [CategoriesController::class, 'CategoryUpdate'])->middleware([TokenVerificationAPIMiddleware::class]);
Route::post('/category-by-id', [CategoriesController::class, 'CategoryById'])->middleware([TokenVerificationAPIMiddleware::class]);
//Category-list==========================


//Customer-list==========================
Route::post('/customer-create', [CustomerController::class, 'CustomerCreate'])->middleware([TokenVerificationAPIMiddleware::class]);
Route::get('/customer-list', [CustomerController::class, 'CustomerList'])->middleware([TokenVerificationAPIMiddleware::class]);
Route::post('/customer-delete', [CustomerController::class, 'CustomerDelete'])->middleware([TokenVerificationAPIMiddleware::class]);
Route::post('/customer-update', [CustomerController::class, 'CustomerUpdate'])->middleware([TokenVerificationAPIMiddleware::class]);
Route::post('/customer-by-id', [CustomerController::class, 'CustomerById'])->middleware([TokenVerificationAPIMiddleware::class]);

//Customer-list==========================
