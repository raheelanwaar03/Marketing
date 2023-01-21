<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\StoreController;
use Illuminate\Support\Facades\Route;


Route::prefix('Admin')->name('Admin.')->middleware('auth','admin')->group(function () {

    Route::get('/Dashboard', [AdminDashboardController::class, 'index'])->name('Dashboard');
    Route::get('/Add/Store',[StoreController::class,'create'])->name('Add.Store');
    Route::post('/Store',[StoreController::class,'store'])->name('Store');
    Route::get('/All/Store',[StoreController::class,'index'])->name('All.Store');
    Route::resource('/Category',CategoryController::class);
});
