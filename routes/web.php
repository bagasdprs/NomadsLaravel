<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Home route
Route::get('/', [HomeController::class, 'index'])
    ->name('home');

// Detail route
Route::get('/detail', [DetailController::class, 'index'])
    ->name('detail');

// Route::resource('pages.admin', DashboardController::class);
Route::prefix('admin')
    ->namespace('Admin')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');
    });
