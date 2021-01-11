<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Models\Book_write;
use App\Models\Models\Subscription;
use App\Models\Models\Ebook;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $book=Book_write::get();
        $sub=Subscription::get();
        $pbook=Ebook::get();
        return view('frontend.home' ,compact('book','sub','pbook'));
    }
    public function loginshow()
    {
        return view('frontend.partials.loginpage');
    }
}
