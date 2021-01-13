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
        $mbook=Mylibrary::where('user_id','=',auth()->user()->id)->get();
        $clist=Category::all();
        return view('frontend.partials.readerlibrary',compact('clist','mbook'));
    }


    public function readeraddbook(Request $request)
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
                        $book->storeAs('readermylibrary',$sbook_name);
        
                    }
    

       Mylibrary::create([
       
            'user_id'=>auth()->user()->id,
            'book_name'=>$request->book_name,
            'category'=>$request->category_id,
            'author_name'=>$request->author_name,
            'year'=>$request->year,
            'addition'=>$request->addition,
            'book'=>$sbook_name,
            
        ]);
        

        return redirect()->back()->with('message','Book added Successfully.');

    }


    public function mylibrarylist()
    {
        $mylibrary = Mylibrary::where('user_id','=',auth()->user()->id)->get();
       
        //  dd($mylibrary);
        return view('backend.partials.author.mylibrary',compact('mylibrary'));
    }

    public function authorreadbook()
    { 
       
        $form=Form::find($p_id);
        
            return view('backend.partials.data-view',compact('form'));
    }


    public function mylibrarydelete($id)
    {
       
       $library=Mylibrary::find($id);
       if(!empty($library))
       {
           $library->delete();
           $message="data deleted Successfully";
       }else{
           $message="No data found.";
       }
        return redirect()->back()->with('message',$message);
    }

    public function viewbook($b_id)
    { 
       
        $viewbook=Mylibrary::find($b_id);
        
            return view('backend.partials.author.readbook',compact('viewbook'));
    }


    public function editmylibrary($b_id)
    {
        $allbook=Mylibrary::find($b_id);
        $clist=Category::all();
        return view('backend.partials.author.editaddbook',compact('clist','allbook'));

    }

    public function updatemylibrary(Request $request,$id)
    {
        $request->validate([
            'book_name'=>'required',
            'book'=>'required'
        ]);
       $allbook=Mylibrary::find($id);

       $sbook_name='';

       //        step1- check has file
                   if($request->hasFile('book'))
                   {
                       $book=$request->file('book');
                      //step2- generate unique name
                       $sbook_name=date('Ymdhms').'.'.$book->getClientOriginalExtension();
                      //step 3- store file with name
                       $book->storeAs('readermylibrary',$sbook_name);
       
                   }
       $allbook->update([
           
        'user_id'=>auth()->user()->id,
        'book_name'=>$request->book_name,
        'category'=>$request->category_id,
        'author_name'=>$request->author_name,
        'year'=>$request->year,
        'addition'=>$request->addition,
        'book'=>$sbook_name,
       ]);

       return redirect()->back()->with('message','Book info Updated Successfully.');
    }


    public function editreaderlibrary($b_id)
    {
        $allbook=Mylibrary::find($b_id);
        $clist=Category::all();
        return view('frontend.partials.editaddbook',compact('clist','allbook'));

    }


}
