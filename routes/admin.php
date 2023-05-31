<?php

use App\Http\Controllers\admin\AdminCategoryController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\CouponDealContorller;
use App\Http\Controllers\admin\HomePageImages;
use App\Http\Controllers\admin\StoreController;
use Illuminate\Support\Facades\Route;


Route::prefix('Admin')->name('Admin.')->middleware('auth', 'admin')->group(function () {

    Route::get('/Dashboard', [AdminDashboardController::class, 'index'])->name('Dashboard');
    Route::get('/User/Messages', [AdminDashboardController::class, 'userMessages'])->name('Messages');
    Route::get('/All/Users', [AdminDashboardController::class, 'allUser'])->name('All.Users');
    Route::get('/Make/User/Admin/{id}', [AdminDashboardController::class, 'makeAdmin'])->name('Make.Admin');
    Route::get('/Approve/User/{id}', [AdminDashboardController::class, 'approveUser'])->name('Make.User.Approved');
    Route::get('/Pending/User/{id}', [AdminDashboardController::class, 'pendingUser'])->name('Make.User.Pending');

    // add home page images
    Route::post('/Home/Page/Images',[HomePageImages::class,'homeImages'])->name('Add.Home.Image');

    // stores routes

    Route::get('/Add/Store', [StoreController::class, 'create'])->name('Add.Store');
    Route::post('/Store', [StoreController::class, 'store'])->name('Store.Store');
    Route::get('/All/Store', [StoreController::class, 'index'])->name('All.Stores');
    Route::get('/Show/Store/{store_slug}', [StoreController::class, 'show'])->name('Store.Show/');
    Route::get('/Edit/Store/{id}', [StoreController::class, 'edit'])->name('Edit.Store');
    Route::post('/Update/Store/{id}', [StoreController::class, 'update'])->name('Update.Store');
    Route::get('/Delete/Store/{id}', [StoreController::class, 'destroy'])->name('Delete.Store');
    Route::get('/Hide/Store/{id}', [StoreController::class, 'hide'])->name('Hide.Store');
    Route::get('/Visible/Store/{id}', [StoreController::class, 'visible'])->name('visible.Store');
    // category routes

    Route::get('/Add/Category', [AdminCategoryController::class, 'add'])->name('Create.Category');
    Route::post('/Store/Category', [AdminCategoryController::class, 'store'])->name('Store.Category');
    Route::get('/All/Category', [AdminCategoryController::class, 'index'])->name('All.Categories');
    Route::get('/edit/Category/{id}', [AdminCategoryController::class, 'edit'])->name('Edit.Category');
    Route::post('/Update/Category/{id}', [AdminCategoryController::class, 'update'])->name('Update.Category');
    Route::get('/All/Category/{category_slug}', [AdminCategoryController::class, 'show'])->name('Category.Show/');
    Route::get('/Delete/Category/{id}', [AdminCategoryController::class, 'delete'])->name('Delete.Category');
    // Coupon Deal Routes

    Route::get('/Coupon/Deal', [CouponDealContorller::class, 'create'])->name('Coupon.Deal');
    Route::post('/Coupon/Store', [CouponDealContorller::class, 'store'])->name('Store.Coupon.Deal');
    Route::get('/All/Coupon/Deals', [CouponDealContorller::class, 'index'])->name('All.Coupon.Deals');
    Route::get('/Show/Coupon/Deal/{id}', [CouponDealContorller::class, 'show'])->name('Show.Coupon.Deals');
    Route::get('/Edit/Coupon/{id}', [CouponDealContorller::class, 'edit'])->name('Edit.Coupon');
    Route::post('/Update/Coupon/{id}', [CouponDealContorller::class, 'update'])->name('Update.Coupon');
    Route::get('/Delete/Coupon/{id}', [CouponDealContorller::class, 'destroy'])->name('Destroy.Coupon');
});
