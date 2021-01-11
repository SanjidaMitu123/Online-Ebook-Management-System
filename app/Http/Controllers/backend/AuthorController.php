<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Models\Mylibrary;
use App\Models\Models\Book_write;
use App\Models\Models\User;
use App\Models\Models\Category;
use App\Models\Models\Author;
use Illuminate\Http\Request;


class AuthorController extends Controller
{
    public function requestshow()
    {
        return view('backend.partials.author-request');
    }
    public function listshow()
    {
        return view('backend.partials.author-list');
    }




//Author panel


        public function authorprofileshow()
    {

        $apro=Author::where('user_id','=',auth()->user()->id)->first();
        return view('backend.partials.author.authorprofile',compact('apro'));
    }
    public function publishbookshow()
    {
        $clist=Category::all();
        return view('backend.partials.author.publishbook',compact('clist'));
    }
    public function authoraddbookshow()
    {
        $clist=Category::all();
        return view('backend.partials.author.addbook',compact('clist'));
    }
    public function mylibraryshow()
    {
        return view('backend.partials.author.mylibrary');
    }
    public function writebooksshow()
    {
        return view('backend.partials.author.writebook');
    }


    public function addbook(Request $request)
    {

       

        $request->validate([
            'book_name'=>'required',
            'book'=>'required'
        ]);

        //query builder

        //ORM
       Mylibrary::create([

            'book_name'=>$request->book_name,
            'category'=>$request->category,
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
    public function writebook(Request $request)
    {

       

        $request->validate([
            'topic_name'=>'required',
            
        ]);

        //query builder

        //ORM
       Book_write::create([

            'topic_name'=>$request->topic_name,
            'page_no' =>$request->page_no,
            'description'=>$request->description,
            
        ]);

        return redirect()->back()->with('message','Book saved Successfully.');

    }
    public function author_approved($id){

    
        $data=Author::where('id','=',$id)->first();

        //dd($data);
 
     if($data->is_approved == null){
         $data->update([
             'is_approved'=>'approved',
         ]);  
     }
     else
     {
         $data->update([
             'is_approved'=>null,
         ]);
     }
 
        return redirect()->back();
     }
    



}
