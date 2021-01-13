<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function subscriptionshow()
    {
        return view('backend.partials.subscription');
    }




    public function createsubscription(Request $request)
    {

       

        $request->validate([
            'subcription_name'=>'required',
            'price'=>'required|numeric',
            'number_of_download'=>'required|numeric'
        ]);

        //query builder

        //ORM
       Subscription::create([
            'name'=>$request->subcription_name,
            'price'=>$request->price,
            'number_of_download'=>$request->number_of_download,
            'duration'=>$request->duration,
            'description'=>$request->description,
            
        ]);

        return redirect()->back()->with('message','subscription Created Successfully.');

    }

    public function allsubscriptionlist()
    {
        $slist = Subscription::all();
        // dd($list);
        return view('backend.partials.subscription',compact('slist'));
    }


    public function subdelete($id)
    {
       
       $sublist=Subscription::find($id);
       if(!empty($sublist))
       {
           $sublist->delete();
           $message="data deleted Successfully";
       }else{
           $message="No data found.";
       }
        return redirect()->back()->with('message',$message);
    }


}
