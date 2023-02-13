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
Route::get('/Categories',[LandingPageController::class,'allCategorys'])->name('LandingPage.Categorys');




require __DIR__.'/auth.php';
require __DIR__.'/user.php';
require __DIR__.'/admin.php';
