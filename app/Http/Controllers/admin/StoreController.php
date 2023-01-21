<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function create()
    {
        return view('admin.store.add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'store_name' => 'required',
            'store_slug' => 'required',
            'store_des' => 'required',
            'store_img'=> 'required'
        ]);

        $img = $validated['store_img'];
        $imgName = rand(11111,99999) . '.' . $img->getClientOriginalExtension();
        $img->move(public_path('images',$imgName));

        $store = new Store();
        $store->store_name = $validated['store_name'];
        $store->store_slug = $validated['store_slug'];
        $store->store_des = $validated['store_des'];
        $store->store_img = $imgName;
        $store->save();
        return redirect()->back()->with('success','Store added successfully');

    }

    public function index()
    {
        $stores = Store::paginate(10);
        return view('admin.store.index',compact('stores'));
    }

    public function show($id)
    {
        $store = Store::find($id);
        return view('admin.store.show',compact('store'));
    }

}
