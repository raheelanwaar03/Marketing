<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\admin\Coupon;
use App\Models\admin\Store;
use App\Models\Catagory;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function landingpage()
    {
        $categorys = Catagory::get();
        $stores = Store::where('status', 0)->get();
        $coupons = Coupon::where('status', 0)->where('coupon_type','Coupon')->get();
        $trending_coupons = Coupon::where('status', 0)->where('coupon_type','Deal')->get();
        return view('landingPage.welcome', compact('categorys', 'stores', 'coupons', 'trending_coupons'));
    }

    public function contact()
    {
        $categorys = Catagory::orderBy('category_name', 'asc')->paginate(9);
        $stores = Store::where('status', 0)->get();
        $coupons = Coupon::where('status', 0)->get();
        return view('landingPage.contactUs', compact('categorys', 'stores', 'coupons'));
    }

    public function allCategorys()
    {
        $categorys = Catagory::orderBy('category_name', 'asc')->paginate(9);
        $stores = Store::where('status', 0)->get();
        $coupons = Coupon::where('status', 0)->get();
        return view('landingPage.category.index', compact('categorys', 'stores', 'coupons'));
    }

    // Coupons

    public function allCoupons()
    {
        $categorys = Catagory::get();
        $stores = Store::where('status', 0)->get();
        $coupons = Coupon::orderBy('coupon_name', 'asc')->where('coupon_type','Coupon')->paginate(9);
        return view('landingPage.coupons.index', compact('categorys', 'stores', 'coupons'));
    }

    public function allStores()
    {
        $categorys = Catagory::get();
        $coupons = Coupon::where('status', 0)->get();
        $stores = Store::orderBy('store_name', 'asc')->where('status', '0')->paginate(9);
        return view('landingPage.store.index', compact('categorys', 'stores', 'coupons'));
    }

    public function singleCategory($category_slug)
    {
        $category = Catagory::where('category_slug',$category_slug)->first();
        // checking coupons on this category
        $stores = Store::where('status', 0)->get();
        $categorys = Catagory::get();
        $coupons = Coupon::where('coupon_category', $category_slug)->orderBy('coupon_name', 'asc')->paginate(10);
        return view('landingPage.category.single', compact('category', 'categorys', 'coupons', 'stores'));
    }

    public function storeItems($store_slug)
    {
        $store = Store::where('store_slug',$store_slug)->first();
        $stores = Store::where('status', 0)->get();
        $categorys = Catagory::get();
        $coupons = Coupon::where('coupon_store', $store_slug)->orderBy('coupon_name', 'asc')->paginate(10);
        return view('landingPage.store.singleStore', compact('store', 'stores', 'coupons', 'categorys'));
    }

    public function contact_form(Request $request)
    {
        $massage = new ContactUs();
        $massage->name = $request->name;
        $massage->email = $request->email;
        $massage->subject = $request->subject;
        $massage->massage = $request->message;
        $massage->save();
        return redirect()->back()->with('success', 'Thanks for connecting us we will come back to you as soon as possible');
    }

    public function searchItems(Request $request)
    {
        if ($request->search) {
            $categorys = Catagory::get();
            $stores = Store::where('store_name', 'Like', '%' .$request->search.'%')->latest()->paginate(10);
            return view('landingPage.search', compact('stores','categorys'));
        } else {
            return redirect()->back()->with('error', 'Empty Search');
        }
    }

    public function dealsPage()
    {
        $categorys = Catagory::get();
        $stores = Store::where('status', 0)->get();
        $coupons = Coupon::orderBy('coupon_name', 'asc')->where('coupon_type','Deal')->paginate(9);
        return view('landingPage.allDeals', compact('categorys', 'stores', 'coupons'));
    }
}
