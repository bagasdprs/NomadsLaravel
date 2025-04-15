<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


// Login
Route::post('/login', [loginController::class, 'login'])
    ->name('login');

// Home route
Route::get('/', [HomeController::class, 'index'])
    ->name('home');

// Detail route
Route::get('/detail', [DetailController::class, 'index'])
    ->name('detail');

// Checkout route
Route::get('/checkout', [CheckoutController::class, 'index'])
    ->name('checkout');

// Success route
Route::get('/checkout/success', [CheckoutController::class, 'success'])
    ->name('checkout-success');

// Route::resource('pages.admin', DashboardController::class);
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');
    });

Auth::routes(['verify' => true]);
