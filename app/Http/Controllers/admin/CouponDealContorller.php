<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Coupon;
use App\Models\admin\Store;
use App\Models\Catagory;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CouponDealContorller extends Controller
{
    public function create()
    {
        $categorys = Catagory::get();
        $stores = Store::get();
        return view('admin.deal.add', compact('categorys', 'stores'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'coupon_name' => 'required',
            'coupon_slug' => 'required',
            'coupon_des' => 'required',
            'coupon_type' => 'required',
            'coupon_link' => 'required',
            'coupon_category' => 'required',
            'coupon_store' => 'required',
            'coupon_text' => 'required',
            'coupon_expire' => 'required',
        ]);


        $coupon = new Coupon();
        $coupon->coupon_name = $validated['coupon_name'];
        $coupon->coupon_slug = Str::slug($validated['coupon_slug']);
        $coupon->coupon_des = $validated['coupon_des'];
        $coupon->coupon_type = $validated['coupon_type'];
        $coupon->coupon_link = $validated['coupon_link'];
        $coupon->coupon_code = $request->coupon_code;
        $coupon->coupon_category = $validated['coupon_category'];
        $coupon->coupon_store = $validated['coupon_store'];
        $coupon->status = $request->status == True ? '1' : '0';
        $coupon->coupon_text = $validated['coupon_text'];
        $coupon->coupon_expire = $validated['coupon_expire'];
        $coupon->save();
        return redirect()->route('Admin.All.Coupon.Deals')->with('success', 'Job Done Successfuly');
    }

    public function index()
    {
        $coupons = Coupon::get();
        return view('admin.deal.index', compact('coupons'));
    }

    public function edit($id)
    {
        $categorys = Catagory::get();
        $stores = Store::get();
        $coupon = Coupon::find($id);
        return view('admin.deal.edit', compact('coupon', 'categorys', 'stores'));
    }

    public function update(Request $request, $id)
    {
        $coupon = Coupon::find($id);
        $coupon->coupon_name = $request->coupon_name;
        $coupon->coupon_slug = Str::slug($request->coupon_slug);
        $coupon->coupon_des = $request->coupon_des;
        $coupon->coupon_type = $request->coupon_type;
        $coupon->coupon_link = $request->coupon_link;
        $coupon->coupon_code = $request->coupon_code;
        $coupon->coupon_category = $request->coupon_category;
        $coupon->coupon_store = $request->coupon_store;
        $coupon->coupon_text = $request->coupon_text;
        $coupon->status = $request->status == True ? '1' : '0';
        $coupon->coupon_expire = $request->coupon_expire;
        $coupon->save();
        return redirect()->route('Admin.All.Coupon.Deals')->with('success', 'Coupon updated successfully');
    }

    public function destroy($id)
    {
        $coupon = Coupon::find($id);
        $coupon->delete();
        return redirect()->back()->with('success', 'Coupon Deleted successfully');
    }

    public function show($id)
    {
        $coupon = Coupon::find($id);
        return view('admin.deal.show', compact('coupon'));
    }
}
