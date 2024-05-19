<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/index', 'content.index');

// Dashboard Admin Routes (Protected by Auth Middleware)
Route::middleware(['auth'])->group(function () {
    Route::view('/dashboard-home', 'content.admin.dashboardHome');
    Route::view('/dashboard-account', 'content.admin.dashboardAccount');
    Route::view('/dashboard-member', 'content.admin.dashboardMember');
    Route::view('/dashboard-product', 'content.admin.dashboardProduct');
    Route::view('/dashboard-shipment', 'content.admin.dashboardShipment');
});

// Public Routes
Route::view('/belanja', 'content.belanja');
Route::view('/product-details', 'content.productDetails');
Route::view('/pemesanan', 'content.pemesanan');
Route::view('/buy', 'content.buy');

// Authentication Routes
Route::view('/login', 'content.RegLog.login')->name('login');
Route::view('/register', 'content.RegLog.register');
Route::post('/post-register', [RegisterController::class, 'store']);
Route::post('/post-login', [AuthController::class, 'postLogin']);
Route::get('/logout', [AuthController::class, 'logout']);
