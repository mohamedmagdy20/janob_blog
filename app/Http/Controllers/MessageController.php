<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
class MessageController extends Controller
{
    //
    public function index()
    {
        $messages = Message::paginate(10);
        return view('message.index',compact('messages'));
    }
}
