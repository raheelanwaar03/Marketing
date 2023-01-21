<?php

use App\Http\Controllers\user\DashboardController;
use Illuminate\Support\Facades\Route;


Route::prefix('User')->name('User.')->middleware('auth','user')->group(function () {

    Route::get('/Dashboard', [DashboardController::class, 'index'])->name('Dashboard');
});
