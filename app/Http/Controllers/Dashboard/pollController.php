<?php

namespace App\Http\Controllers\Dashboard;
use App\Models\Question;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pollController extends Controller
{

    //
    public function index(){
        return view('questions.index');
    }

    public function show($id)
    {
        return view('questions.show');
    }

    public function create(){
        return view('questions.create');
    }
    public function edit($id)
    {
        return view('questions.edit');
    }


}
