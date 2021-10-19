<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;

class CustomerController extends Controller
{
    public function index()
    {
        return view('Customer.index');
    }

    public function myaccount()
    {
        $profile = User::where('id',Auth::id())->first();
        return view('Customer.myaccount',compact('profile'));
    }
    public function wishlist()
    {
        return view('Customer.wishlist');
    }
    public function checkout()
    {
        return view('Customer.checkout');
    }
    public function contact()
    {
        return view('Customer.contact');
    }
    public function cart()
    {
        return view('Customer.cart');
    }
    public function about()
    {
        return view('Customer.aboutus');
    }
    public function dashboard()
    {
        return view('Customer.index');
    }
    public function updateaddress(Request $request)
    {
        $address = User::where('id',Auth::user()->id)->count();
        if($address == NULL)
        {
            User::create([
                'address' => $request->address,
            ]);
            return redirect()->back();
        }else{
            User::where('id','=',Auth::id())->update([
                'address' => $request->address,
            ]);
        }
        return redirect()->back();
    }
    public function updateprofile(Request $request)
    {
        $this->validate($request, [
            'current_password' => 'required',
            'password' => 'required|min:8|same:password',
            'password_confirmation' => 'required|same:password',
        ]);
        $current_password = Auth::User()->password;
        if($request->password == true)
        {
            User::where('id',Auth::id())->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
            ]);
                if (Hash::check($request->current_password, $current_password)) {
                    $id = Auth::User()->id;
                    $obj_user = User::find($id);
                    $obj_user->password = Hash::make($request->password);
                    $obj_user->save();
                    return redirect()->back();
    
                } else {
                    return back()->with('error', 'Error! Please enter correct current password.');
                }
            return redirect()->back();
        }else{
            User::where('id',Auth::id())->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
            ]);
            return redirect()->back();
        }
    }
}
