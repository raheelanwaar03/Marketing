<?php

use App\Http\Controllers\admin\AdminCategoryController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\CouponDealContorller;
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

    Route::get('/Add/Category',[AdminCategoryController::class,'add'])->name('Create.Category');
    Route::post('/Store/Category',[AdminCategoryController::class,'store'])->name('Store.Category');
    Route::get('/All/Category',[AdminCategoryController::class,'index'])->name('All.Categories');
    Route::get('/edit/Category/{id}',[AdminCategoryController::class,'edit'])->name('Edit.Category');
    Route::post('/Update/Category/{id}',[AdminCategoryController::class,'update'])->name('Update.Category');
    Route::get('/All/Category/{category_slug}',[AdminCategoryController::class,'show'])->name('Category.Show/');
    Route::get('/Delete/Category/{id}',[AdminCategoryController::class,'delete'])->name('Delete.Category');
    // Coupon Deal Routes

    Route::get('/Coupon/Deal',[CouponDealContorller::class,'create'])->name('Coupon.Deal');
    Route::post('/Coupon/Store',[CouponDealContorller::class,'store'])->name('Store.Coupon.Deal');
    Route::get('/All/Coupon/Deals',[CouponDealContorller::class,'index'])->name('All.Coupon.Deals');



});
