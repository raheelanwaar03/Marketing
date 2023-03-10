<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Coupon;
use App\Models\admin\Store;
use App\Models\Catagory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CouponDealContorller extends Controller
{
    public function create()
    {
        $categorys = Catagory::get();
        $stores = Store::get();
        return view('admin.deal.add',compact('categorys','stores'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'coupon_name' => 'required',
            'coupon_slug' => 'required',
            'coupon_des' => 'required',
            'coupon_type' => 'required',
            'coupon_link' =>'required',
            'coupon_code' =>'required',
            'coupon_category' =>'required',
            'coupon_store' =>'required',
            'coupon_img' =>'required',
            'coupon_expire' =>'required',
        ]);


        $image = $validated['coupon_img'];
        $imageName = rand(111111, 999999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        $coupon = new Coupon();
        $coupon->coupon_name = $validated['coupon_name'];
        $coupon->coupon_slug = Str::slug( $validated['coupon_slug']);
        $coupon->coupon_des = $validated['coupon_des'];
        $coupon->coupon_type = $validated['coupon_type'];
        $coupon->coupon_link = $validated['coupon_link'];
        $coupon->coupon_code = $validated['coupon_code'];
        $coupon->coupon_category = $validated['coupon_category'];
        $coupon->coupon_store = $validated['coupon_store'];
        $coupon->coupon_img = $imageName;
        $coupon->coupon_expire = $validated['coupon_expire'];
        $coupon->save();
        return redirect()->back()->with('success','Deal Added Successfuly');
    }

    public function index()
    {
        $coupons = Coupon::paginate(10);
        return view('admin.deal.index',compact('coupons'));
    }

}
