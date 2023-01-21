<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\user\DashboardController;
use Illuminate\Support\Facades\Route;


Route::prefix('User')->name('User.')->middleware('auth')->group(function () {

    Route::get('/Dashboard', [DashboardController::class, 'index'])->name('Dashboard');
});
