<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisment;
use App\Models\Blog;
use App\Models\Message;
use App\Models\Question;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ads  = Advertisment::all();
        $blogs = Blog::all();
        $messages =Message::all();
        $questions = Question::all();
        
        return view('home',compact('ads','blogs','messages','questions'));
    }
}
