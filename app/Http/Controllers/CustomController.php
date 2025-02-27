<?php

namespace App\Http\Controllers;

use App\Models\CustomLogin;
use Hash;
use Illuminate\Http\Request;
use Session;

class CustomController extends Controller
{
    //============================registration ===================================
    public function index()
    {

        return view('front.customregister');
    }


    public function store(Request $request)
    {
        // dd( $request);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:custom_logins',
            'password' => 'required |min:8 |max:16',

        ]);
        $data = $request->all();

        $data['password'] = Hash::make($request->password);
        CustomLogin::create($data);
        return redirect('/')->with('success', 'Registration successful. Please login.');

    }

    //========================login========================

    public function login()
    {
        return view('front.customlogin');
    }

    public function loginstore(Request $request)
    {
        $request->validate([
            'email' => 'required |email|',
            'password' => 'required|min:8',
        ]);

        $customer = CustomLogin::where('email', $request->email)->first();
        if (isset($customer)) {
            if (Hash::check($request->password, $customer->password)) {
                // dd($customer->password);

                Session::put('email', $customer->email);
                Session::put('name', $customer->name);
                Session::put('customer_id', $customer->id);
                return redirect("/")->with('success', 'Login Successfully');
            } else {
                return redirect("customlogin")->with('error', 'Password Not Matched');
            }
        } else {
            return redirect("customlogin")->with('error', 'User Not Found');
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect('/');
    }
}







