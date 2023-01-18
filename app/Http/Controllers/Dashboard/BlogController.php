<?php

namespace App\Http\Controllers\dashboard;
use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index(){
        $blog = Blog::all();
        return view('blog.index');
    }

    public function create(){
        return view('blog.create');
    }
    public function edit()
    {
        return view('blog.edit');
    }

}
