<?php

namespace App\Http\Controllers\Landing;
use Illuminate\Http\Request;
use DB;
class LandingController
{


    public function home()
    {
        return view('landing.index');
    }



}
