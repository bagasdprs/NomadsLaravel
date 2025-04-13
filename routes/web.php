<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('pages.admin', DashboardController::class);
Route::prefix('admin')
    ->namespace('Admin')
    ->group(function () {
        // Route::get('/', 'DashboardController@index')
        //     ->name('dashboard');
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');
    });
