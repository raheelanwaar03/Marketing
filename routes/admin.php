<?php

use App\Http\Controllers\admin\AdminCategoryController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\StoreController;
use Illuminate\Support\Facades\Route;


Route::prefix('Admin')->name('Admin.')->middleware('auth','admin')->group(function () {

    Route::get('/Dashboard', [AdminDashboardController::class, 'index'])->name('Dashboard');
    // stores routes

    Route::get('/Add/Store',[StoreController::class,'create'])->name('Add.Store');
    Route::post('/Store',[StoreController::class,'store'])->name('Store.Store');
    Route::get('/All/Store',[StoreController::class,'index'])->name('All.Stores');
    Route::get('/Show/Store/{store_slug}',[StoreController::class,'show'])->name('Store.Show/');
    // category routes

    Route::get('/Add/Category',[AdminCategoryController::class,'add'])->name('Add.Category');
    Route::post('/Store',[AdminCategoryController::class,'store'])->name('Add.Category');
    Route::get('/All/Category',[AdminCategoryController::class,'index'])->name('All.Categories');
    Route::get('/All/Category/{category_slug}',[AdminCategoryController::class,'show'])->name('Category.Show/');
});
