<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdController extends Controller
{
    //
    public function index(){
        return view('Ads.index');
    }
    public function create(){
        return view('Ads.create');
    }
    public function edit(){
        return view('Ads.edit');
    }
    public function show(){
        return view('Ads.show');
    }


    // public function delete($id)
    // {
    //     $blog = Blog::find($id);
    //     if($blog->img != null && $blog->file != null)
    //     {
    //         //delete img from public path
    //         $imgPath = public_path().'/blog-img/'.$blog->img;
    //         unlink($blog->img);

    //         //delete file from public path
    //         $imgPath = public_path().'/blog-file/'.$blog->img;
    //         unlink($blog->file);

    //         if($blog->delete)
    //         {
    //             return redirect()->back()->with('success','Blog Deleted Succfully');
    //         }else{
    //             return redirect()->back()->with('error','error Occure');
    //         }
    //     }elseif($blog->img != null)
    //     {
    //           //delete img from public path
    //           $imgPath = public_path().'/blog-img/'.$blog->img;
    //           unlink($blog->img);
    //           if($blog->delete)
    //           {
    //               return redirect()->back()->with('success','Blog Deleted Succfully');
    //           }else{
    //               return redirect()->back()->with('error','error Occure');
    //           }
    //     }elseif($blog->file != null){
    //         //delete file from public path
    //         $imgPath = public_path().'/blog-file/'.$blog->img;
    //         unlink($blog->file);

    //         if($blog->delete)
    //         {
    //             return redirect()->back()->with('success','Blog Deleted Succfully');
    //         }else{
    //             return redirect()->back()->with('error','error Occure');
    //         }
    //     }else{
    //         if($blog->delete)
    //         {
    //             return redirect()->back()->with('success','Blog Deleted Succfully');
    //         }else{
    //             return redirect()->back()->with('error','error Occure');
    //         }
    //     }
    // }
}
