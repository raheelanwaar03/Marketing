<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\admin\Coupon;
use App\Models\admin\Store;
use App\Models\Catagory;
use App\Models\ContactUs;
use App\Models\Home_page_Img;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function landingpage()
    {
        $homeImages = Home_page_Img::get();
        $categorys = Catagory::get();
        $stores = Store::get();
        $coupons = Coupon::where('status', 1)->where('coupon_type', 'Coupon')->get();
        $trending_coupons = Coupon::where('status', 1)->where('coupon_type', 'Deal')->get();
        return view('landingPage.welcome', compact('categorys', 'stores', 'coupons', 'trending_coupons', 'homeImages'));
    }

    public function contact()
    {
        $categorys = Catagory::get();
        $stores = Store::get();
        $coupons = Coupon::get();
        return view('landingPage.contactUs', compact('categorys', 'stores', 'coupons'));
    }

    public function allCategorys()
    {
        $categorys = Catagory::orderBy('category_name', 'asc')->paginate(10);
        $stores = Store::get();
        $coupons = Coupon::get();
        return view('landingPage.category.index', compact('categorys', 'stores', 'coupons'));
    }

    // Coupons

    public function allCoupons()
    {
        $categorys = Catagory::get();
        $stores = Store::get();
        $coupons = Coupon::orderBy('coupon_name', 'asc')->paginate(10);
        return view('landingPage.coupons.index', compact('categorys', 'stores', 'coupons'));
    }

    public function allStores()
    {
        $categorys = Catagory::get();
        $stores = Store::orderBy('store_name', 'asc')->paginate(9);
        return view('landingPage.store.index', compact('categorys', 'stores'));
    }

    public function singleCategory($category_slug)
    {
        $category = Catagory::where('category_slug', $category_slug)->first();
        $category_name = $category->category_name;
        $stores = Store::orderBy('store_name', 'asc')->paginate(9);
        // checking coupons on this category
        $categorys = Catagory::get();
        $coupons = Coupon::where('coupon_category', $category_name)->orderBy('coupon_name', 'asc')->paginate(10);
        return view('landingPage.category.single', compact('category', 'categorys', 'coupons', 'stores'));
    }

    public function storeItems($store_slug)
    {
        $store = Store::where('store_slug', $store_slug)->first();
        $store_name = $store->store_name;
        $stores = Store::get();
        $categorys = Catagory::get();
        $coupons = Coupon::where('coupon_store', $store_name)->orderBy('coupon_name', 'asc')->paginate(10);
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
            $stores = Store::where('store_name', 'Like', '%' . $request->search . '%')->latest()->paginate(10);
            return view('landingPage.search', compact('stores', 'categorys'));
        } else {
            return redirect()->back()->with('error', 'Empty Search');
        }
    }

    public function dealsPage()
    {
        $categorys = Catagory::get();
        $stores = Store::get();
        $coupons = Coupon::orderBy('coupon_name', 'asc')->where('coupon_type', 'Deal')->paginate(9);
        return view('landingPage.allDeals', compact('categorys', 'stores', 'coupons'));
    }


    public function terms()
    {
        $categorys = Catagory::get();
        $stores = Store::get();
        $coupons = Coupon::get();
        return view('landingPage.terms', compact('categorys', 'stores', 'coupons'));
    }

    public function about()
    {
        $categorys = Catagory::get();
        $stores = Store::get();
        $coupons = Coupon::get();
        return view('landingPage.about', compact('categorys', 'stores', 'coupons'));
    }


}
