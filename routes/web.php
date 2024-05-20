<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/index', 'content.index');

// Dashboard Admin Routes (Protected by Auth Middleware)
Route::middleware(['auth'])->group(function () {
    Route::view('/dashboard-home', 'content.admin.dashboardHome');
    Route::view('/dashboard-account', 'content.admin.dashboardAccount');
    Route::view('/dashboard-member', 'content.admin.dashboardMember');
    Route::view('/dashboard-shipment', 'content.admin.dashboardShipment');
    Route::get('/dashboard-product', [ProdukController::class, 'index'])->name('dashboard-product');
    Route::get('/createProduct', [ProdukController::class, 'create'])->name('createProduct');
    Route::post('/createProduct', [ProdukController::class, 'store'])->name('storeProduct');
    Route::get('/editProduct/{id}', [ProdukController::class, 'edit'])->name('editProduct');
    Route::post('/updateProduct/{id}', [ProdukController::class, 'update'])->name('updateProduct');
    Route::delete('/dashboard-delete-produk/{id}', [ProdukController::class, 'destroy'])->name('deleteProduct');



    Route::put('editProduct/{id}', [ProdukController::class, 'update']);
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
