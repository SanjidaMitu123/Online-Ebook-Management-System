<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\models\User;
use App\Models\models\Author;
class AuthorController extends Controller
{
    public function authorcreate(Request $request)
    {
        $request->validate([
            'name'=>'required'
        ]);
        $file_name='';

        //        step1- check has file
                    if($request->hasFile('image'))
                    {
                        $image=$request->file('image');
                       //step2- generate unique name
                        $file_name=date('Ymdhms').'.'.$image->getClientOriginalExtension();
                       //step 3- store file with name
                        $image->storeAs('author_picture',$file_name);
        
                    }
                    $rbook_name='';

                    //        step1- check has file
                                if($request->hasFile('add_book'))
                                {
                                    $book=$request->file('add_book');
                                   //step2- generate unique name
                                    $rbook_name=date('Ymdhms').'.'.$book->getClientOriginalExtension();
                                   //step 3- store file with name
                                    $book->storeAs('authorrequestbook',$rbook_name);
                    
                                }
       

        $user = User::create([
             
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'phone_no'=>$request->phone_no,
            'image'=>$file_name,
            'role'=>'author'
            
        ]);



        //ORM
       Author::create([
           
            'user_id'=>$user->id,
            'address'=>$request->address,
            'qualification'=>$request->qualification,
            'no_of_books_published'=>$request->no_of_books_published,
            'about_books'=>$request->about_books,
            'add_book'=>$rbook_name
                
            
        ]);

        return redirect()->back()->with('message','Register Successfully.');
    }


    public function authorrequestlistshow()
    {
        $list = User::with('author')->where('role','=','author')->get();
        //dd($list);
        return view('backend.partials.author-request',compact('list'));
    }
}
