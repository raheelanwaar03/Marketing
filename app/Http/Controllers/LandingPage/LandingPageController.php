<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\admin\Store;
use App\Models\Catagory;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function landingpage()
    {
        $categorys = Catagory::get();
        $stores = Store::get();
        return view('landingPage.welcome',compact('categorys','stores'));
    }
}
