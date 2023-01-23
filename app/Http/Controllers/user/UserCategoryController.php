<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\Coupon;
use App\Models\admin\Store;
use App\Models\Catagory;
use Illuminate\Http\Request;

class UserCategoryController extends Controller
{
    public function seeCategory($category_slug)
    {
        $category = Catagory::where('category_slug',$category_slug)->first();
        return view('user.category.index',compact('category'));
    }

    public function storeSee($store_slug)
    {
        $store = Store::where('store_slug',$store_slug)->first();
        return view('user.store.index',compact('store'));
    }


    public function userCategory()
    {
        $categorys = Catagory::paginate(10);
        $coupons = Coupon::get();
        $stores = Store::paginate(10);
        return view('user.category.allCategorys',compact('categorys','stores','coupons'));
    }

    public function couponSee($coupon_slug)
    {
        $categorys = Catagory::paginate(10);
        $stores = Store::paginate(10);
        $coupon = Coupon::where('coupon_slug',$coupon_slug)->first();
        return view('user.coupon.index',compact('coupon','categorys','stores'));
    }

}
