<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Models\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        return view('backend.home');
    }
   
    public function indexdashboard()
    {
        return view('backend.home');
    }

    public function adminshow()
    {
        return view('backend.partials.admin');
    }
    public function adminlist()
    {
     
        $alist=User::all();
       // dd($alist);
       
        
        return view ('backend.partials.admin',compact('alist'));
    }
 
}
