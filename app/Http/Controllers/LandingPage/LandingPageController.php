<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\admin\Coupon;
use App\Models\admin\Store;
use App\Models\Catagory;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function landingpage()
    {
        $categorys = Catagory::get();
        $stores = Store::where('status',0)->get();
        $coupons = Coupon::where('status',0)->get();
        $trending_coupons = Coupon::where('status',1)->get();
        return view('landingPage.welcome', compact('categorys', 'stores', 'coupons','trending_coupons'));
    }

    public function contact()
    {
        $categorys = Catagory::orderBy('category_name', 'asc')->paginate(9);
        $stores = Store::where('status',0)->get();
        $coupons = Coupon::where('status',0)->get();
        return view('landingPage.contactUs', compact('categorys', 'stores', 'coupons'));
    }

    public function allCategorys()
    {
        $categorys = Catagory::orderBy('category_name', 'asc')->paginate(9);
        $stores = Store::where('status',0)->get();
        $coupons = Coupon::where('status',0)->get();
        return view('landingPage.category.index', compact('categorys', 'stores', 'coupons'));
    }

    // Coupons

    public function allCoupons()
    {
        $categorys = Catagory::get();
        $stores = Store::where('status',0)->get();
        $coupons = Coupon::orderBy('coupon_name', 'asc')->paginate(9);
        return view('landingPage.coupons.index', compact('categorys', 'stores', 'coupons'));
    }

    public function allStores()
    {
        $categorys = Catagory::get();
        $coupons = Coupon::where('status',0)->get();
        $stores = Store::orderBy('store_name', 'asc')->paginate(9);
        return view('landingPage.store.index', compact('categorys', 'stores', 'coupons'));
    }

    public function singleCategory($category_slug, $id)
    {
        $category = Catagory::find($id);
        // checking coupons on this category
        $stores = Store::where('status',0)->get();
        $categorys = Catagory::get();
        $coupons = Coupon::where('coupon_category', $id)->orderBy('coupon_name', 'asc')->paginate(10);
        return view('landingPage.category.single', compact('category', 'categorys', 'coupons', 'stores'));
    }

    public function storeItems($store_slug, $id)
    {
        $store = Store::find($id);
        $stores = Store::where('status',0)->get();
        $categorys = Catagory::get();
        $coupons = Coupon::where('coupon_store', $id)->orderBy('coupon_name', 'asc')->paginate(10);
        return view('landingPage.store.singleStore', compact('store', 'stores', 'coupons', 'categorys'));
    }
}
