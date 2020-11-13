<?php

namespace App\Http\Controllers\Console;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Category;
use App\Product;
use App\SubCategory;
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
        return view('console.category');
    }
    public function category()
    {
        return view('console.category');
    }
    public function settings()
    {
        return view('console.settings');
    }
}
