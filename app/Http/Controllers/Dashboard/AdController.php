<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advertisment;
use Carbon\Carbon;
class AdController extends Controller
{
    //
    public function index(){
        $ads  = Advertisment::paginate(10);
        return view('Ads.index',compact('ads'));
    }
    public function create(){
        return view('Ads.create');
    }
    public function edit($id){
        $ads =  Advertisment::find($id);
        return view('Ads.edit',compact('ads'));
    }
    public function show($id){
        $ads =  Advertisment::find($id);
        return view('Ads.show',compact('ads'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'body'=>'required',
            'date_from'=>'required',
            'date_to'=>'required',
            'img'=>'image'
        ]);
        if($request->file('img'))
        {
            $imageName = time().'.'.$request->img->extension();  
            $request->img->move(public_path('ads'), $imageName);
            if(Advertisment::create(array_merge($request->all(),[
                'img'=>$imageName,
                'rec'=>2
            ]))){
                return redirect()->back()->with('success','Advertisment Added');
            }else{
                return redirect()->back()->with('error','Error Occure');
            }
        }else{
            if(Advertisment::create($request->all()))
            {
                return redirect()->back()->with('success','Advertisment Added');
            }else{
                return redirect()->back()->with('error','Error Occure');
            }
        }
    }

    public function update(Request $request,$id)
    {
        // return $request->all();
        try{
            $request->validate([
                'title'=>'required',
                'body'=>'required',
                'date_from'=>'required',
                'date_to'=>'required',
                'img'=>''
            ]);
    
            $ads = Advertisment::find($id);
            
            if($request->file('img'))
            {
                $imgPath = public_path().'/ads/'.$ads->img;
                unlink($imgPath);

                $imageName = time().'.'.$request->img->extension();  
                $request->img->move(public_path('ads'), $imageName);
                if($ads->update(array_merge($request->all(),[
                    'img'=>$imageName
                ]))){
                    return redirect()->back()->with('success','Advertisment Added');
                }else{
                    return redirect()->back()->with('error','Error Occure');
                }
            }else{
                if($ads->update($request->all()))
                {
                    return redirect()->back()->with('success','Advertisment Added');
                }else{
                    return redirect()->back()->with('error','Error Occure');
                }
            }
        }catch(Exception $r){
            return $r;
        }
    }


    public function delete($id){
        $ads =Advertisment::find($id);
        $imgPath = public_path().'/ads/'.$ads->img;
        unlink($imgPath);
        $ads->delete();
        return redirect()->back()->with('success','Advertisment Deleted');
    }

}
