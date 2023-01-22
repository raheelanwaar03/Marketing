<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Store;
use App\Models\Catagory;
use Illuminate\Http\Request;

class CouponDealContorller extends Controller
{
    public function create()
    {
        $categorys = Catagory::get();
        $stores = Store::get();
        return view('admin.deal.add',compact('categorys','stores'));
    }
}
