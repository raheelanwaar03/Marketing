<?php

use App\Models\admin\Coupon;
use App\Models\admin\Store;
use App\Models\Catagory;
use App\Models\User;

function totalCoupons()
{
    $totalCoupons = Coupon::get()->count();
    return $totalCoupons;
}

function totalCategories()
{
    $totalCategories = Catagory::get()->count();
    return $totalCategories;
}

function totalStores()
{
    $totalStores = Store::get()->count();
    return $totalStores;
}

function totalUsers()
{
    $totalUsers = User::get()->count();
    return $totalUsers;
}


// function store_coupon()
// {
//     $store = $store->store_name;
//     $totalCoupons =  Coupon::where('coupon_store', $store)->get();
//     $totalCoupons = $totalCoupons->count();
//     return $totalCoupons;
// }
