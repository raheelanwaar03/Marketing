<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Store;
use App\Models\Catagory;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $catagory = Catagory::paginate(10);
        $store = Store::paginate(10);
        return view('admin.dashboard',compact('catagorys','store'));
    }
}
