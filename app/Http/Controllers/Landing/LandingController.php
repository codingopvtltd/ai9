<?php

namespace App\Http\Controllers\Landing;
use Illuminate\Http\Request;
use DB;
use ContactLeads;
class LandingController
{


    public function home()
    {
        return view('landing.index');
    }
    public function contactActions(Request $request)
    {
        if($request->method == 'save')
        {
        $request->validate([
            'first_name' => 'required',
            'description' => 'required'
        ]);

        $task = ContactLeads::create([
            'first_name'  => $request->first_name,
            'last_name' => $request->last_name,
            'email'=> $request->email,
            'company'=> $request->company,
            'city'=> $request->city,
            'country'=> $request->country,
            'phone_number'=>$request->phone_number,
            'status' => 'active'
        ]);

        return response()->json(['status'=>'success']);

        }



    }

}
