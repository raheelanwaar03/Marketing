<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPage\LandingPageController;

// app routes

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// custom routing

Route::get('/',[LandingPageController::class,'landingpage'])->name('LandingPage');
Route::get('/ContactUs',[LandingPageController::class,'contact'])->name('LandingPage.ContactUs');
Route::post('/ContactUs/Form',[LandingPageController::class,'contact_form'])->name('LandingPage.ContactUs.Form');
Route::get('/Categories',[LandingPageController::class,'allCategorys'])->name('LandingPage.Categorys');
// Coupons
Route::get('/All/Coupons',[LandingPageController::class,'allCoupons'])->name('LandingPage.All.Coupons');
// All Stores
Route::get('/All/Stores',[LandingPageController::class,'allStores'])->name('LandingPage.All.Stores');
// single category link
Route::get('Category/{category_slug}/{id}',[LandingPageController::class,'singleCategory'])->name('LandingPage.Single.Category');
// single store route
Route::get('Store/{store_slug}/{id}',[LandingPageController::class,'storeItems'])->name('LandingPage.Single.Store');
// search for coupons
Route::get('/Search',[LandingPageController::class,'searchItems'])->name('LandingPage.Search.items');








require __DIR__.'/auth.php';
require __DIR__.'/user.php';
require __DIR__.'/admin.php';
