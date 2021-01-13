<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Models\User;
use App\Models\Models\Ebook;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        $fbook=Ebook::all();
       
        return view('backend.home',compact('fbook'));
    }
   
    public function indexdashboard()
    {
        $fbook=Ebook::all();
        return view('backend.home',compact('fbook'));
    }

    public function adminshow()
    {
        return view('backend.partials.admin');
    }
    public function adminlist()
    {
     
        $ulist = User::where('role','=','admin')->get();
       // dd($alist);
       
        
        return view ('backend.partials.admin',compact('ulist'));
    }




    
 
}
