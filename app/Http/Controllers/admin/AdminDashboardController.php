<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Store;
use App\Models\Catagory;
use App\Models\ContactUs;
use App\Models\User;
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

    public function allUser()
    {
        $users = User::Where('status','approved')->get();
        $pendingUsers = User::Where('status','pending')->get();
        return view('admin.allUser',compact('users','pendingUsers'));
    }

    public function makeAdmin($id)
    {
        $user = User::find($id);
        $user->role = 'admin';
        $user->save();
        return redirect()->back()->with('success','Assign Admin role to the user');
    }

    public function approveUser($id)
    {
        $user = User::find($id);
        $user->status = 'approved';
        $user->save();
        return redirect()->back()->with('success','User Approved successfully');
    }

    public function pendingUser($id)
    {
        $user = User::find($id);
        $user->status = 'pending';
        $user->save();
        return redirect()->back()->with('success','User account is in Pending list Now!');
    }


}
