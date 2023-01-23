<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Advertisment;
use App\Models\Question;
use Carbon\Carbon;
use App\Models\Comment;
use App\Models\User;
class WebsiteController extends Controller
{
    //
    public function index(Request $request)
    {
        $user =  User::first();
        $lists = [];
        $timenow = Carbon::now();
        $query = Blog::query()->with('comment');
        $advertisment = Advertisment::whereDate('date_from','<=',$timenow)->whereDate('date_to','>=',$timenow)->get();
        $question = Question::with('answer')->get();
      
        if($request->search)
        {
            $query = $query->orwhere('title','like','%',$request->search,'%')->Orwhere('body','like','%',$request->search,'%');
        }
        $blogs = $query->get();

        foreach($blogs as $index => $blog)
        {
           array_push($lists,$blog);
           if(isset($advertisment[$index]))
           {
               array_push($lists,$advertisment[$index]);
           }
           if(isset($question[$index]))
           {
               array_push($lists,$question[$index]);
           }
        }
        // return $lists;
        return view('front.sections.main',compact('lists','user'));
    }

    public function contact(){
        return view('front.sections.contact');
    }

    public function specialNew($id){
        $blog = Blog::findOrFail($id);
        return view('front.sections.spectialNew',compact('blog'));
    }

    // public function showBlog($id)
    // {
    //     $blog = Blog::findOrFail($id);
    //     r   
    // }
    public function like($id){
        $blog = Blog::find($id);
        $blog->likes += 1;
        $blog->save();
        return redirect()->back(); 
    }

    public function storeComment(Request $request,$id)
    {
        $blog = Blog::findOrFail($id);

        $message = Comment::create([
            'body'=>$request->comment,
            'article_id'=>$blog->id
        ]);
        return redirect()->back()->with('success','Comment Added');
    }
}
