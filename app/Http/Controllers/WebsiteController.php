<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
class WebsiteController extends Controller
{
    //
    public function index(Request $request)
    {
        $query = Blog::query();
        if($request->search)
        {
            $query = $query->orwhere('title','like','%',$request,'%')->Orwhere('body','like','%',$request,'%');
        }
        $blogs = $query->paginate(10);
        return view('front.sections.main',compact('blogs'));
    }

    public function contact(){
        return view('front.sections.contact');
    }

    public function specialNew(){
        return view('front.sections.spectialNew');
    }
}
