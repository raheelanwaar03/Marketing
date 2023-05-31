<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Home_page_Img;
use Illuminate\Http\Request;

class HomePageImages extends Controller
{
    public function homeImages(Request $request)
    {
        $total = Home_page_Img::get()->count();
        if($total = 3)
        {
            return redirect()->back()->with('error','You have added three images already');
        }

        if ($request->has('home_img')) {
            $image = $request['home_img'];
            // return $image;
            $imageName = rand(111111, 999999) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $homeImg = new Home_page_Img();
            $homeImg->home_img = $imageName;
            $homeImg->save();
            return redirect()->back()->with('success', 'Image added successfully');
        }
        else{
            return redirect()->back()->with('error','Please Insert an Image');
        }
    }

    public function addHomeImages()
    {
        $homeImages = Home_page_Img::get();
        return view('admin.newImages', compact('homeImages'));
    }

    public function delHomeImages($id)
    {
        $homeImage = Home_page_Img::find($id);
        $homeImage->delete();
        return redirect()->back()->with('success', 'Image deleted successfuly');
    }
}
