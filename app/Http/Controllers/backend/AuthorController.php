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
        // dd('ok');
        $alist = User::with('author')->where('role','=','author')->where( 'is_approved','=','approved')->get();
        return view('backend.partials.author-list',compact('alist'));
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

    public function all_written_page_show()
    {
       $allpage=Book_write::where('user_id','=',auth()->user()->id)->get();
        return view('backend.partials.author.all-written-page',compact('allpage'));
    }



    public function addbook(Request $request)
    {



        $request->validate([
            'book_name'=>'required',
            'book'=>'required'
        ]);
        $sbook_name='';

        //        step1- check has file
                    if($request->hasFile('book'))
                    {
                        $book=$request->file('book');
                       //step2- generate unique name
                        $sbook_name=date('Ymdhms').'.'.$book->getClientOriginalExtension();
                       //step 3- store file with name
                        $book->storeAs('authormylibrary',$sbook_name);
        
                    }

       Mylibrary::create([
            'user_id'=>auth()->user()->id,
            'book_name'=>$request->book_name,
            'category'=>$request->category,
            'author_name'=>$request->author_name,
            'year'=>$request->year,
            'addition'=>$request->addition,
            'book'=>$sbook_name
            
        ]);

        return redirect()->back()->with('message','Book added Successfully.');

    }




    public function mylibrarylist()
    {
        $mylibrary = Mylibrary::where('user_id','=',auth()->user()->id)->get();
       
        return view('backend.partials.author.mylibrary',compact('mylibrary'));
    }



    public function writebook(Request $request)
    {
        $request->validate([
            'topic_name'=>'required',
            
        ]);

       Book_write::create([
            'user_id'=>auth()->user()->id,
            'topic_name'=>$request->topic_name,
            'page_no' =>$request->page_no,
            'description'=>$request->description,
            
        ]);

        return redirect()->back()->with('message','Book saved Successfully.');

    }





    public function author_approved($id){
        
    
        $data=User::where('id','=',$id)->first();
        // $author = Author::where('id','=',$id)->first();
    
 
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
    
     public function authordelete($id)
     {
        
        $authorlist=User::find($id);
        if(!empty($authorlist))
        {
            $authorlist->delete();
            $message="data deleted Successfully";
        }else{
            $message="No data found.";
        }
         return redirect()->back()->with('message',$message);
     }
 


     public function writepagedelete($id)
     {
  
        $bookwrite=Book_write::find($id);
        if(!empty($bookwrite))
        {
            $bookwrite->delete();
            $message="data deleted Successfully";
        }else{
            $message="No data found.";
        }
         return redirect()->back()->with('message',$message);
     }


     public function viewpage($b_id)
     { 
        
         $rewritepage=Book_write::find($b_id);
         
             return view('backend.partials.author.viewpage',compact('rewritepage'));
     }
   
}
