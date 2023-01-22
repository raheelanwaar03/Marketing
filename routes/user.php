<?php

use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\UserCategoryController;
use Illuminate\Support\Facades\Route;


Route::prefix('User')->name('User.')->middleware('auth','user')->group(function () {

    Route::get('/Dashboard', [DashboardController::class, 'index'])->name('Dashboard');
    // User routes for seeing Category
    Route::get('/Category/{category_slug}',[UserCategoryController::class,'seeCategory'])->name('See.Category/');
    // User stores routes
    Route::get('/Store/{store_slug}',[UserCategoryController::class,'storeSee'])->name('Store.See/');

});
