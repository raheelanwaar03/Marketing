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
        if ($total >= 1) {
            return redirect()->back()->with('error', 'You have added three images already');
        } else {
            if ($request->has('home_img','home_img1','home_img2')) {
                $image1 = $request['home_img'];
                $image2 = $request['home_img1'];
                $image3 = $request['home_img2'];
                // return $image;
                $imageName1 = rand(111111, 999999) . '.' . $image1->getClientOriginalExtension();
                $imageName2 = rand(111111, 999999) . '.' . $image2->getClientOriginalExtension();
                $imageName3 = rand(111111, 999999) . '.' . $image3->getClientOriginalExtension();
                $image1->move(public_path('images'), $imageName1);
                $image2->move(public_path('images'), $imageName2);
                $image3->move(public_path('images'), $imageName3);
                $homeImg = new Home_page_Img();
                $homeImg->home_img = $imageName1;
                $homeImg->home_img1 = $imageName2;
                $homeImg->home_img2 = $imageName3;
                $homeImg->save();
                return redirect()->back()->with('success', 'Images added successfully');
            } else {
                return redirect()->back()->with('error', 'Please Insert an Image');
            }
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
