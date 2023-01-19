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
        $request->validate([
            'title'=>'required',
            'body'=>'required',
            'file'=>'image'
        ]);

        if($request->file('file'))
        {
            $imageName = time().'.'.$request->img->extension();
            $request->img->move(public_path('questions'), $imageName);
            $question = Question::create(array_merge($request->all(),['img'=>$imageName]));
            $answers = $request->answer;
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
            $answers = $request->answer;
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
        $imgPath = public_path().'/questions/'.$question->img;
        unlink($imgPath);
        $answers = Answers::where('question_id',$question->id)->get();
        
        foreach($answers as $answer)
        {
            $answer->delete();
        }
        $question->delete();

        return redirect()->back()->with('success','Question Deleted');
    }


}
