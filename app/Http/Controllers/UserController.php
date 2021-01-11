<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('backend.user.login');
    }

    public function logindo(Request $request)
    {
      
        $request->validate([
            'email'=>'required',
            'password'=>'required'
         ]);
 
         $login_info=$request->except(['_token']);
 
  //dd(Auth::attempt($login_info));
 
         if (Auth::attempt($login_info)) {
             $request->session()->regenerate();
             return redirect()->intended('home');
         }else
         {
             return redirect()->back()->withErrors('Invalid Credentials');
         }
    }
    public function logout()
    {
        //logout here
        Auth::logout();
        return redirect()->route('login');


    }
}
