<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


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
            'store_img' => 'required'
        ]);

        $image = $validated['store_img'];
        $imageName = rand(111111, 999999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        $store = new Store();
        $store->store_name = $validated['store_name'];
        $store->store_slug = Str::slug($validated['store_slug']);
        $store->store_des = $validated['store_des'];
        $store->store_img = $imageName;
        $store->save();
        return redirect()->back()->with('success', 'Store added successfully');
    }

    public function index()
    {
        $stores = Store::paginate(10);
        return view('admin.store.index', compact('stores'));
    }

    public function show($store_slug)
    {
        $store = Store::where('store_slug', $store_slug)->first();
        return view('admin.store.show', compact('store'));
    }

    public function edit($id)
    {
        $store = Store::find($id);
        return view('admin.store.edit', compact('store'));
    }

    public function update(Request $request, $id)
    {
        $store = Store::find($id);
        if ($request->has('store_img')) {
            $image = $request['store_img'];
            $imageName = rand(111111, 999999) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $store->store_img = $imageName;
        }

        $store->store_name = $request->store_name;
        $store->store_slug = str::slug($request->store_slug);
        $store->store_des = $request->store_des;
        $store->save();
        return redirect()->route('Admin.All.Stores')->with('success', 'store updated successfully');
    }

    public function destroy($id)
    {
        $store = Store::find($id);
        $store->delete();
        return redirect()->back()->with('success', 'Store Deleted successfully');
    }
}
