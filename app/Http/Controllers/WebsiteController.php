<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //
    public function index()
    {
        return view('front.sections.main');
    }

    public function contact(){
        return view('front.sections.contact');
    }
}
