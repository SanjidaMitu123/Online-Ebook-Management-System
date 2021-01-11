<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Models\Ebook;
use App\Models\Models\Category;
use Illuminate\Http\Request;

class EbookController extends Controller
{
    public function ebooklistshow()
    {
        
        $elist=Ebook::all();
        $clist=Category::with('categoryR');
        return view('backend.partials.ebook-list',compact('elist'));
    }
    public function ebooklistinsertedshow()
    {
        return view('backend.partials.ebook-list-inserted');
    }
    public function ebooklistauthorshow()
    {
        return view('backend.partials.ebook-list-author');
    }
    public function addebookshow()
    {
        $clist=Category::select(['category_name','id'])->get();
        $clist=Category::all();
        return view('backend.partials.add-books',compact('clist'));
    }


    public function createebook(Request $request)
    {

       

        $request->validate([
            'book_name'=>'required',
            'author_name'=>'required',
            'book'=>'required'
        ]);

        //query builder
        $file_name='';

        //        step1- check has file
                    if($request->hasFile('book_image'))
                    {
                        $image=$request->file('book_image');
                       //step2- generate unique name
                        $file_name=date('Ymdhms').'.'.$image->getClientOriginalExtension();
                       //step 3- store file with name
                        $image->storeAs('book_picture',$file_name);
        
                    }
        //ORM
       Ebook::create([

            
            'book_name'=>$request->book_name,
            'category'=>$request->category_id,
            'author_name'=>$request->author_name,
            'year'=>$request->year,
            'addition'=>$request->addition,
            'about_book'=>$request->about_book,
            'book_preview'=>$request->book_preview,
            'book'=>$request->book,
            'book_image'=>$file_name
          
            
        ]);

        return redirect()->back()->with('message','Book added Successfully.');

    }

    public function allebook()
    {
        $liste = Ebook::all();
        // dd($list);
        return view('backend.partials.subscription',compact('liste'));
    }

    public function categoryinsert(Request $request)

    {  
        $request -> validate([
            'category_name' => 'required',
                      
        ]);
     
 
        Category::create([
            
                   'category_name'=>$request ->input ( 'category_name'),
                  
        ]);
        return redirect() -> back()->with ('message','created sucessfully'); 
    
      }
      public function catlist()
      {
        
          $clist=Category::get();
         
          return view ('backend.partials.add-books',compact('clist'));
      }



}
