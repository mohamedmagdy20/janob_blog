<?php

namespace App\Http\Controllers\Dashboard;
use App\Models\Question;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Answer;
class pollController extends Controller
{

    //
    public function index(){
        $questions = Question::paginate(10);
        return view('questions.index',compact('questions'));
    }

    public function show($id)
    {
        $question = Question::find($id);
        return view('questions.show',compact('question'));
    }

    public function create(){
        return view('questions.create');
    }
    public function edit($id)
    {
        $question = Question::find($id);
        return view('questions.edit',compact('question'));
    }


    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'title'=>'required',
            'body'=>'required',
            'file'=>'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $answers = $request->answers;

        if($request->file('file'))
        {
            $imageName = time().'.'.$request->file->extension();
            $request->file->move(public_path('questions'), $imageName);
            $question = Question::create(array_merge($request->all(),['file'=>$imageName]));
            if($question){  
                foreach($answers as $answer)
                {
                    Answer::create([
                        'question_id'=>$question->id,
                        'body'=>$answer
                    ]);
                }
                return redirect()->back()->with('success','Question Added');
            }else{
                return redirect()->back()->with('error','Error Occure');
            }
        
        }else{
            $question = Question::create($request->all());
            if($question){  
                foreach($answers as $answer)
                {
                    Answer::create([
                        'question_id'=>$question->id,
                        'body'=>$answer
                    ]);
                }
                return redirect()->back()->with('success','Question Added');
            }else{
                return redirect()->back()->with('error','Error Occure');
            }
        }
    }

    public function delete($id)
    {
        $question =  Question::find($id);
        //delete img from public path
        $imgPath = public_path().'/questions/'.$question->file;
        unlink($imgPath);
        $answers = Answer::where('question_id',$question->id)->get();
        
        foreach($answers as $answer)
        {
            $answer->delete();
        }
        $question->delete();
        return redirect()->back()->with('success','Question Deleted');
    }

    public function update(Request $request, $id){
        $question = Question::find($id);
        $answers = Answer::where('question_id',$question->id)->get();

        $request->validate([
            'title'=>'required',
            'body'=>'required',
            'file'=>'image'
        ]);

        if($request->file('file'))
        {
            $imgPath = public_path().'/questions/'.$question->file;
            unlink($imgPath);
            $imageName = time().'.'.$request->file->extension();
            $request->file->move(public_path('questions'), $imageName);
       
            foreach($answers as $index => $answer)
            {
                $answer->update([
                    'body'=>$request->answers[$index]
                ]);
            }
            if($question->update(array_merge($request->all(),[
                'file'=>$imageName
            ]))){
                return redirect()->back()->with('success','Question Updated');
            }else{
                return redirect()->back()->with('error','Error Occure');
            }
        }else{
            foreach($answers as $index => $answer)
            {
                $answer->update([
                    'body'=>$request->answers[$index]
                ]);
            }
            if($question->update($request->all())){
                return redirect()->back()->with('success','Question Updated');
            }else{
                return redirect()->back()->with('error','Error Occure');
            }
        }
    }


}
