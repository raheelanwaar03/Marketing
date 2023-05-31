<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Home_page_Img;
use Illuminate\Http\Request;

class HomePageImages extends Controller
{
    public function homeImages(Request $request)
    {
        $image = $request->home_img;
        $imageName = rand(111111, 999999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        $home_img = new Home_page_Img();
        $home_img->home_img = $imageName;
        $home_img->save();

    }
}
