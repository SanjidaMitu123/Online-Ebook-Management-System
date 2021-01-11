<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\models\ Mylibrary;
use App\Models\models\ Category;
use Illuminate\Http\Request;

class MylibraryController extends Controller
{


    public function readermylibraryshow()
    {
        $clist=Category::all();
        return view('frontend.partials.readerlibrary',compact('clist'));
    }


    public function readeraddbook(Request $request)
    {

       

        $request->validate([
            'book_name'=>'required',
            'book'=>'required'
        ]);

        //query builder

        //ORM
       Mylibrary::create([
            
            'book_name'=>$request->book_name,
            'category'=>$request->category_id,
            'author_name'=>$request->author_name,
            'year'=>$request->year,
            'addition'=>$request->addition,
            'book'=>$request->book,
            
        ]);

        return redirect()->back()->with('message','Book added Successfully.');

    }
    public function mylibrarylist()
    {
        $mylibrary = Mylibrary::all();
       
        // dd($list);
        return view('backend.partials.author.mylibrary',compact('mylibrary'));
    }

}
