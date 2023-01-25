<?php

namespace App\Http\Controllers\dashboard;
use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Comment;
class BlogController extends Controller
{

    //
    public function index(Request $request){
        $query = Blog::query();
        if($request->from && $request->to)
        {
            $query = $query->whereDate('date','>=',$request->from)->whereDate('date','<=',$request->to);
        }
        $blogs = $query->paginate(10);
        return view('blog.index',compact('blogs'));
    }

    public function show($id)
    {
        $blog = Blog::find($id);
        return view('blog.show',compact('blog'));
    }

    public function makeStatic($id)
    {
        $blogs = Blog::where('isStatic',1)->get();
        foreach($blogs as $blog)
        {
            $blog->update(['isStatic',0]);
        }

        $blog =  Blog::find($id);
        $blog->isStatic = 1;
        $blog->save();
        return  redirect()->back()->with('success','Success');
    }

    public function cencelStatic($id)
    {
    
        $blog =  Blog::find($id);
        $blog->isStatic = 0;
        $blog->save();
        return  redirect()->back()->with('success','Success');
    }
    public function create(){
        return view('blog.create');
    }

    public function deleteComment($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect()->back()->with('success','Deleted Successfuly');
    }
    public function edit($id)
    {
        $blog = Blog::with('images')->with('files')->find($id);
        return $blogs;
        return view('blog.edit',compact('blog'));
    }

    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'title'=>'required',
            'body'=>'required',
            'type'=>'required',
            // 'img'=>'|mimes:jpeg,png,jpg,gif,svg',
            // 'file'=>'file'
        ]);
        $images = $request->file('img');
        return $images[0];
        $files = $request->file('file');

        if($request->file('img') && $request->file('file'))
        {
            $storedBlog = Blog::create(array_merge($request->all(),[
                'date'=>Carbon::now(),
                'rec'=>1
            ]));
            //upload image //
            foreach($images as $image)
            {
                $imageName = time().'.'.$image->extension();
                $image->move(public_path('blog-img'), $imageName);
                $storedImage = new Images();
                $storedImage->img = $imageName;
                $storedImage->blog_id = $storedBlog->id;
                $storedImage->save();
            }
            
            foreach($files as $file)
            {
                //upload file
                $fileName = time().'.'.$file->extension();
                $file->move(public_path('blog-file'), $fileName);
                $storedFile = new Files();
                $storedFile->file = $fileName;
                $storedFile->blog_id = $storedBlog->id;
                $storedFile->save();
            }
             //create
            if($storedBlog)
            {
                return redirect()->back()->with('success','Blog Added');
            }else{
                return redirect()->back()->with('error','error Occure');
            }
        }
        elseif($request->file('img'))
        { 
            $storedBlog =  Blog::create(array_merge($request->all(),[
                'date'=>Carbon::now(),
                'rec'=>1
            ]));
             //upload image //
            foreach($images as  $image)
            {
                $imageName = time().'.'.$image->extension();
                $image->move(public_path('blog-img'), $imageName);
                $storedImage = new Images();
                $storedImage->img = $imageName;
                $storedImage->blog_id = $storedBlog->id;
                $storedImage->save();
            }
              //create
              if($storedBlog)
              {
                  return redirect()->back()->with('success','Blog Added');
              }else{
                  return redirect()->back()->with('error','error Occure');

              }
        }elseif($request->file('file'))
        {
            $storedBlog =  Blog::create(array_merge($request->all(),[
                'date'=>Carbon::now(),
                'rec'=>1
            ]));

            foreach($files as $file)
            {
                //upload file
                $fileName = time().'.'.$file->extension();
                $file->move(public_path('blog-file'), $fileName);
                $storedFile = new Files();
                $storedFile->file = $fileName;
                $storedFile->blog_id = $storedBlog->id;
                $storedFile->save();
            }

              //create
              if($storedBlog)
              {
                  return redirect()->back()->with('success','Blog Added');
              }else{
                  return redirect()->back()->with('error','error Occure');

              }
        }
        else{
            if(Blog::create(array_merge($request->all(),[
                'date'=>Carbon::now(),
                'rec'=>1
            ])))
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
        $images = Images::where('blog_id',$id)->get();
        $files = Files::where('blog_id',$id)->get();

        if($blog->img != null && $blog->file != null)
        {
            foreach($images as $img)
            {
                //delete img from public path
                $imgPath = public_path().'/blog-img/'.$img->img;
                unlink($imgPath);
            }

            foreach($files as $file)
            {
                //delete file from public path
                $filePath = public_path().'/blog-file/'.$file->file;
                unlink($filePath);

            }
            
            if($blog->delete())
            {
                return redirect()->back()->with('success','Blog Deleted Succfully');
            }else{
                return redirect()->back()->with('error','error Occure');
            }
        }elseif($blog->img != null)
        {
            foreach($images as $img)
            {
                //delete img from public path
                $imgPath = public_path().'/blog-img/'.$img->img;
                unlink($imgPath);
            }

              if($blog->delete())
              {
                  return redirect()->back()->with('success','Blog Deleted Succfully');
              }else{
                  return redirect()->back()->with('error','error Occure');
              }
        }elseif($blog->file != null){
            foreach($files as $file)
            {
                //delete file from public path
                $filePath = public_path().'/blog-file/'.$file->file;
                unlink($filePath);
            }

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
        $images = Images::where('blog_id',$id)->get();
        $files = Files::where('blog_id',$id)->get();

        $request->validate([
            'title'=>'required|max:15',
            'body'=>'required',
            'type'=>'required',
            'img'=>'image|mimes:jpeg,png,jpg,gif,svg',
            'file'=>'file'
        ]);
        if($request->file('img') && $request->file('file'))
        {
            foreach($images as $img)
            {
                //delete img from public path
                $imgPath = public_path().'/blog-img/'.$img->img;
                unlink($imgPath);
            }

            foreach($files as $file)
            {
                //delete file from public path
                $filePath = public_path().'/blog-file/'.$file->file;
                unlink($filePath);

            }
            //upload image //

            foreach($request->img as  $image)
            {
                $imageName = time().'.'.$request->img->extension();
                $request->img->move(public_path('blog-img'), $imageName);
    
                $storedImage = new Images();
                $storedImage->img = $imageName;
                $storedImage->blog_id = $blog->id;
                $storedImage->save();
            }
          
            //upload file
            foreach($request->file as  $file)
            {
                //upload file
               
                $fileName = time().'.'.$request->file->extension();
                $request->file->move(public_path('blog-file'), $fileName);

                $storedFile = new Files();
                $storedFile->file = $fileName;
                $storedFile->blog_id = $blog->id;
                $storedFile->save();
            }
            
            //update
            if($blog->update($request->all()))
            {
                return redirect()->back()->with('success','Blog Updated');
            }else{
                return redirect()->back()->with('error','error Occure');

            }
        }
        elseif($request->file('img'))
        {
            //delete img from public path

            foreach($images as $img)
            {
                //delete img from public path
                $imgPath = public_path().'/blog-img/'.$img->img;
                unlink($imgPath);
            }

            foreach($request->img as $index => $image)
            {
                $imageName = time().'.'.$request->img->extension();
                $request->img->move(public_path('blog-img'), $imageName);
    
                $storedImage = new Images();
                $storedImage->img = $imageName;
                $storedImage->blog_id = $blog->id;
                $storedImage->save();
            }
            if($blog->update($request->all()))
            {
                return redirect()->back()->with('success','Blog Updated');
            }else{
                return redirect()->back()->with('error','error Occure');

            }
        }
        elseif($request->file('file'))
        {
            //delete file
            $fileName = time().'.'.$request->file->extension();
            $request->file->move(public_path('blog-file'), $fileName);
            //upload file
            foreach($request->file as $index => $file)
            {
                //upload file
            
                $fileName = time().'.'.$request->file->extension();
                $request->file->move(public_path('blog-file'), $fileName);
            
                $storedFile = new Files();
                $storedFile->file = $fileName;
                $storedFile->blog_id = $blog->id;
                $storedFile->save();
            }


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
