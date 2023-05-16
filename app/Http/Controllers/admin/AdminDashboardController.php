<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Store;
use App\Models\Catagory;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $catagory = Catagory::paginate(10);
        $store = Store::paginate(10);
        return view('admin.dashboard',compact('catagory','store'));
    }

    public function userMessages()
    {
        $massages = ContactUs::get();
        return view('admin.contactUs',compact('massages'));
    }

    public function addUser()
    {
        return view('admin.addUser');
    }

}
