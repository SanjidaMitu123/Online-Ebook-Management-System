<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Models\User;

class UserController extends Controller
{

    public function loginshow()
    {
        return view('frontend.partials.user.login');
    }

    public function registration(Request $request)
    {
       $request->validate([
          'name'=>'required',
          'email'=>'required|email|unique:users',
           'password'=>'required'
       ]);


        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);

        return redirect()->back()->with('message','User Registration Successful.');

    }

    public function login(Request $request)
    {
       $request->validate([
           'email'=>'required|email',
           'password'=>'required'
       ]);

        $login_info=$request->except(['_token']);

//        dd(Auth::attempt($login_info));

        if (Auth::attempt($login_info)) {
//            $request->session()->regenerate();
            return redirect()->intended('/homef');
        }else
        {
            return redirect()->back()->withErrors('Invalid Credentials');
        }

    }


    public function userlogout()
    {
        //logout here
        Auth::logout();
        return redirect()->route('dashboard');


    }
}
