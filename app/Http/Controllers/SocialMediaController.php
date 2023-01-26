<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SocialMediaController extends Controller
{
    //
    public function index()
    {
        $socialMedia = DB::table('socialmedia')->get();
        return view('socailmedia.index',compact('socialMedia'));
    }

    public function delete($id)
    {
        $socialMedia = DB::table('socialmedia')->where('id',$id)->delete();
        // $socialMedia->delete();
        return redirect()->back()->with('success','Success');
    }

    public function create()
    {
        return view('socailmedia.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'link'=>'required'
        ]);

        DB::table('socialmedia')->insert([
            'link'=>$request->link
        ]);
        return redirect()->back()->with('success','Created');
    }
}
