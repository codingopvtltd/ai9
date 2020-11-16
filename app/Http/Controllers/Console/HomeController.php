<?php

namespace App\Http\Controllers\Console;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\ContactLeads;
use DB;

class HomeController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $data['leads']     =  ContactLeads::where('status','=','active')->get();
        return view('console.leads-listing')->with($data);
    }

}
