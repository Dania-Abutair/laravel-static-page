<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StdController extends Controller
{
    //
    public function aboutus(){
        return view('/batman/about_us');
    }
    public function services(){
        return view('/batman/services');
    }
}
