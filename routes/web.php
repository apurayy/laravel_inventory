<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TokenVerificationMiddleware;
use Illuminate\Support\Facades\Route;

//User-part-routing===========================
Route::get('/',[HomeController::class, 'HomePage'])->name('HomePage');
Route::get('/login',[UserController::class, 'LoginPage'])->name('LoginPage');
Route::get('/registration',[UserController::class, 'RegistrationPage'])->name('RegistrationPage');
Route::get('/resetpassword',[UserController::class, 'ResetPasswordPage'])->name('ResetPasswordPage');
Route::get('/sendotp',[UserController::class, 'SendOtpPage'])->name('SendOtpPage');
Route::get('/verifyotp',[UserController::class, 'VerifyOtpPage'])->name('VerifyOtpPage');

//Dashboard-part-routing===========================
Route::get('/dashboard',[DashboardController::class, 'DashboardPage'])->name('DashboardPage');
Route::get('/category',[CategoriesController::class, 'CategoryPage'])->name('CategoryPage');
Route::get('/customer',[CustomerController::class, 'CustomerPage'])->name('CustomerPage');
Route::get('/product',[ProductController::class, 'ProductPage'])->name('ProductPage');
Route::get('/invoice',[InvoiceController::class, 'InvoicePage'])->name('InvoicePage');
Route::get('/profile',[UserController::class, 'ProfilePage'])->name('ProfilePage');


//user-auth==========================
Route::post('/user-registration', [UserController::class, 'userRegistraion'])->name('userRegistraion');
Route::post('/user-login', [UserController::class, 'userLogin'])->name('userLogin');
Route::post('/user-logout', [UserController::class, 'UserLogout'])->name('UserLogout');
Route::post('/send-otp', [UserController::class, 'SendOtpCode'])->name('SendOtpCode');
Route::post('/verify-otp', [UserController::class, 'VerifyOtp'])->name('VerifyOtp');

Route::post('/reset-password', [UserController::class, 'ResetPassword'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/user-profile', [UserController::class, 'UserProfile'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/user-update', [UserController::class, 'UpdateProfile'])->middleware([TokenVerificationMiddleware::class]);
//user-auth==========================


//Category-list==========================
Route::post('/category-create', [CategoriesController::class, 'CategoryCreate'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/category-list', [CategoriesController::class, 'CategoryList'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/category-delete', [CategoriesController::class, 'CategoryDelete'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/category-update', [CategoriesController::class, 'CategoryUpdate'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/category-by-id', [CategoriesController::class, 'CategoryById'])->middleware([TokenVerificationMiddleware::class]);

//Category-list==========================


//Customer-list==========================
Route::post('/customer-create', [CustomerController::class, 'CustomerCreate'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/customer-list', [CustomerController::class, 'CustomerList'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/customer-delete', [CustomerController::class, 'CustomerDelete'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/customer-update', [CustomerController::class, 'CustomerUpdate'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/customer-by-id', [CustomerController::class, 'CustomerById'])->middleware([TokenVerificationMiddleware::class]);

//Customer-list==========================

//Product-list==========================
Route::post('/product-create', [ProductController::class, 'ProductCreate'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/product-list', [ProductController::class, 'ProductList'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/product-delete', [ProductController::class, 'ProductDelete'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/product-update', [ProductController::class, 'ProductUpdate'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/product-by-id', [ProductController::class, 'ProductById'])->middleware([TokenVerificationMiddleware::class]);
//Product-list==========================


//Invoice-list==========================
Route::post('/invoice-create', [InvoiceController::class, 'InvoiceCreate'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/invoice-list', [InvoiceController::class, 'InvoiceList'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/invoice-details', [InvoiceController::class, 'InvoiceDetails'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/invoice-delete', [InvoiceController::class, 'InvoiceDelete'])->middleware([TokenVerificationMiddleware::class]);

//Invoice-list==========================


//Dashboard-list==========================
Route::post('/summery', [DashboardController::class, 'Summery'])->middleware([TokenVerificationMiddleware::class]);
//Dashboard-list==========================
