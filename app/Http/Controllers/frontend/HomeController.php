<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Models\Book_write;
use App\Models\Models\Subscription;
use App\Models\Models\Ebook;
use App\Models\Models\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $book=Book_write::with('authorname')->get();
        $sub=Subscription::get();
        $pbook=Ebook::get();
       
        return view('frontend.home' ,compact('book','sub','pbook'));
    }
    public function loginshow()
    {
        return view('frontend.partials.loginpage');
    }



    public function messagecreate(Request $request)
    {
        $request->validate([
            'message'=>'required'
        ]);
        Message::create([
             'user_id'=>auth()->user()->id,
            'name'=>auth()->user()->name,
            'email'=>auth()->user()->email,
            'image'=>auth()->user()->image,
            'message'=>$request->message
            
            
        ]);

        return redirect()->back()->with('message',' Review Successfully.');

    }






}
