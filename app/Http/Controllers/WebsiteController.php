<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Advertisment;
use App\Models\Question;
use Carbon\Carbon;
use App\Models\Comment;
use App\Models\User;
use App\Models\Message;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{
    //
    public function index(Request $request)
    {
        
        $fixed_blog = Blog::where('isStatic',1)->first();
        $user =  User::first();
        $lists = [];
        $timenow = Carbon::now();
        $query = Blog::query()->with('comment');
        $advertisment = Advertisment::whereDate('date_from','<=',$timenow)->whereDate('date_to','>=',$timenow)->get();
        $question = Question::with('answer')->get();
        $socials = DB::table('socialmedia')->get();
        if(isset($request->search))
        {
            $query = $query->where('title','LIKE',"%$request->search%")->orwhere('body','LIKE',"%$request->search%");
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
        return view('front.sections.main',compact('lists','user','timenow','fixed_blog','socials'));
    }

    public function contact(){
        $timenow = Carbon::now();

        return view('front.sections.contact',compact('timenow'));
    }

    public function specialNew($id){
        $blog = Blog::findOrFail($id);
        $timenow = Carbon::now();

        return view('front.sections.spectialNew',compact('blog','timenow'));
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

    public function sendMessage(Request $request)
    {
        $request->validate([
            'message'=>'required'
        ]);

        Message::create([
            'body'=>$request->message
        ]);

        return redirect()->route()->with('success','تم اضافه الرساله سوف نتطلع عليها في اقرب وقت ممكن');

    }

    public function rate($id)
    {
        $answer = Answer::findOrFail($id);
        $answer->rate +=1;
        $answer->save();
        return redirect()->back();
    }

    // public function social()
    // {
    //     $socials = DB::table('socialmedia')->get();
    //     return $socials;
    //     return view('front.layout.app',compact('socials'));
    // }
}
