<?php

namespace App\Http\Controllers\dashboard;
use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    //
    public function index(){
        $blogs = Blog::paginate(10);
        return view('blog.index',compact('blogs'));
    }

    public function show($id)
    {
        $blog = Blog::find($id);
        return view('blog.show',compact('blog'));
    }

    public function create(){
        return view('blog.create');
    }
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('blog.edit',compact('blog'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'body'=>'required',
            'type'=>'required',
            'img'=>'image|mimes:jpeg,png,jpg,gif,svg',
            'file'=>'file'
        ]);

        if($request->file('img') && $request->file('file'))
        {
            //upload image //
            $imageName = time().'.'.$request->img->extension();
            $request->img->move(public_path('blog-img'), $imageName);

            //upload file
            $fileName = time().'.'.$request->file->extension();
            $request->file->move(public_path('blog-file'), $fileName);

            //create
            if(Blog::create(array_merge($request->all(),[
                'img'=>$imageName,
                'file'=>$fileName
            ])))
            {
                return redirect()->back()->with('success','Blog Added');
            }else{
                return redirect()->back()->with('error','error Occure');

            }
        }
        elseif($request->file('img'))
        {
              //upload image //
              $imageName = time().'.'.$request->img->extension();
              $request->img->move(public_path('blog-img'), $imageName);
              //create
              if(Blog::create(array_merge($request->all(),[
                'img'=>$imageName
              ])))
              {
                  return redirect()->back()->with('success','Blog Added');
              }else{
                  return redirect()->back()->with('error','error Occure');

              }
        }elseif($request->file('file'))
        {
              //upload file
              $fileName = time().'.'.$request->file->extension();
              $request->file->move(public_path('blog-file'), $fileName);

              //create
              if(Blog::create(array_merge($request->all(),[
                'file'=>$fileName
              ]) ))
              {
                  return redirect()->back()->with('success','Blog Added');
              }else{
                  return redirect()->back()->with('error','error Occure');

              }
        }
        else{
            if(Blog::create($request->all()))
            {
                return redirect()->back()->with('success','Blog Added');
            }else{
                return redirect()->back()->with('error','error Occure');

            }
        }
    }

    public function delete($id)
    {
        $blog = Blog::find($id);
        if($blog->img != null && $blog->file != null)
        {
            //delete img from public path
            $imgPath = public_path().'/blog-img/'.$blog->img;
            unlink($imgPath);

            //delete file from public path
            $filePath = public_path().'/blog-file/'.$blog->file;
            unlink($filePath);

            if($blog->delete())
            {
                return redirect()->back()->with('success','Blog Deleted Succfully');
            }else{
                return redirect()->back()->with('error','error Occure');
            }
        }elseif($blog->img != null)
        {
              //delete img from public path
              $imgPath = public_path().'/blog-img/'.$blog->img;
              unlink($imgPath);
              if($blog->delete())
              {
                  return redirect()->back()->with('success','Blog Deleted Succfully');
              }else{
                  return redirect()->back()->with('error','error Occure');
              }
        }elseif($blog->file != null){
            //delete file from public path
            $filePath = public_path().'/blog-file/'.$blog->file;
            unlink($filePath);

            if($blog->delete())
            {
                return redirect()->back()->with('success','Blog Deleted Succfully');
            }else{
                return redirect()->back()->with('error','error Occure');
            }
        }else{
            if($blog->delete())
            {
                return redirect()->back()->with('success','Blog Deleted Succfully');
            }else{
                return redirect()->back()->with('error','error Occure');
            }
        }
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $request->validate([
            'title'=>'required|max:15',
            'body'=>'required',
            'type'=>'required',
            'img'=>'image|mimes:jpeg,png,jpg,gif,svg',
            'file'=>'file'
        ]);
        if($request->file('img') && $request->file('file'))
        {
            //delete img from public path
            $imgPath = public_path().'/blog-img/'.$blog->img;
            unlink( $imgPath);

            //delete file from public path
            $filePath = public_path().'/blog-file/'.$blog->img;
            unlink($filePath);

            //upload image //
            $imageName = time().'.'.$request->img->extension();
            $request->img->move(public_path('blog-img'), $imageName);

            //upload file
            $fileName = time().'.'.$request->file->extension();
            $request->file->move(public_path('blog-file'), $fileName);
            //create
            if($blog->update(array_merge($request->all(),[
                'img'=>$imageName,
                'file'=>$fileName
            ])))
            {
                return redirect()->back()->with('success','Blog Updated');
            }else{
                return redirect()->back()->with('error','error Occure');

            }
        }
        elseif($request->file('img'))
        {
            //delete img from public path
            $imgPath = public_path().'/blog-img/'.$blog->img;
            unlink($imgPath);

            //upload image //
            $imageName = time().'.'.$request->img->extension();
            $request->img->move(public_path('blog-img'), $imageName);

            if($blog->update(array_merge($request->all(),[
                'img'=>$imageName,
            ])))
            {
                return redirect()->back()->with('success','Blog Updated');
            }else{
                return redirect()->back()->with('error','error Occure');

            }
        }
        elseif($request->file('file'))
        {
            //delete file from public path
            $filePath = public_path().'/blog-file/'.$blog->img;
            unlink($$filePath);

             //upload file
             $fileName = time().'.'.$request->file->extension();
             $request->file->move(public_path('blog-file'), $fileName);


            if($blog->update(array_merge($request->all(),[
                'file'=>$fileName,
            ])))
            {
                return redirect()->back()->with('success','Blog Updated');
            }else{
                return redirect()->back()->with('error','error Occure');
            }
        }
    }

}
