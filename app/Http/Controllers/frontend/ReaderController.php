<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\models\Reader;

use App\Models\models\User;
class ReaderController extends Controller
{
    public function readercreate(Request $request)
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
                        $image->storeAs('reader_picture',$file_name);
        
                    }
        //query builder
        User::create([
             
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'phone_no'=>$request->phone_no,
            'image'=>$file_name,
            'role'=>'reader'
            
        ]);

        return redirect()->back()->with('message','Register Successfully.');

    }



    public function allreaderlistshow()
    {
        $list = User::where('role','=','reader')->get();

        // dd($list);
        return view('backend.partials.reader-list',compact('list'));
    }

    
   
    public function profileshow()
    {

       
        return view('frontend.partials.readerprofile');

    }




}
