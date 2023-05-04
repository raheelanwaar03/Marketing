<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Catagory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminCategoryController extends Controller
{
    public function add()
    {
        return view('admin.catagory.add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_name' => 'required',
            'category_slug' => 'required',
            'category_des' => 'required',
            'category_img' => 'required',
        ]);


        $image = $validated['category_img'];
        $imageName = rand(111111, 999999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        $category = new Catagory();
        $category->category_name = $validated['category_name'];
        $category->category_slug = str::slug($validated['category_slug']);
        $category->category_des = $validated['category_des'];
        $category->category_img = $imageName;
        $category->save();
        return redirect()->route('Admin.All.Categories')->with('success','Category saved successfully');
    }

    public function index()
    {
        $categorys = Catagory::paginate(10);
        return view('admin.catagory.index',compact('categorys'));
    }

    public function show($category_slug)
    {
        $category = Catagory::where('category_slug',$category_slug)->first();
        return view('admin.catagory.show',compact('category'));
    }

    public function delete($id)
    {
        $category = Catagory::find($id);
        $category->delete();
        return redirect()->back()->with('success','Category removed successfully');
    }

    public function edit($id)
    {
        $category = Catagory::find($id);
        return view('admin.catagory.edit',compact('category'));
    }

    public function update(Request $request,$id)
    {
        $category = Catagory::find($id);
        if($request->has('category_img'))
        {
            $image = $request['category_img'];
            $imageName = rand(111111, 999999) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $category->category_img = $imageName;
        }

        $category->category_name = $request->category_name;
        $category->category_slug = str::slug($request->category_slug);
        $category->category_des = $request->category_des;
        $category->save();
        return redirect()->route('Admin.All.Categories')->with('success','Category updated successfully');
    }

}
