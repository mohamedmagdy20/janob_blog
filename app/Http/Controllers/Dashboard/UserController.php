<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ChangePassword;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::find(Auth::user()->id);
        return view('user.profile',compact('user'));
    }

    public function edit()
    {
        return view('user.edit');
    }



    public function verify()
    {
        $code = rand(10000,99999);
        Mail::to($email)->send(new ChangePassword(Auth::user()->email, $code));
        DB::transaction();
        try{
            $user->update([
                'v_code'=>$code
            ]);
            DB::commit();
        }catch(Exception $e)
        {
            DB::rollback();
            return redirect()->back()->with('error','Error Occure');
        }
        return view('user.verfication');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'img'=>'required|image'
        ]);
        $user = User::find(Auth::user()->id);
        if($user->update($request->all()))
        {
            return redirect()->back()->with('success','Admin Updated');
        }else{
            return redirect()->back()->with('error','Error Occure');
        }

    }

    public function checkVerfication(Request $request)
    {
        $request->validate([
            'code'=>'required'
        ]);

        $input = $request->code;

        if(Auth::user()->v_code == $input)
        {
            return view('user.change_password');
        }else{
            return redirect()->back()->with('error','Invaild Code');
        }
    }

    public function resend()
    {
        $code = rand(10000,99999);
        Mail::to($email)->send(new ChangePassword(Auth::user()->email, $code));
        DB::transaction();
        try{
            $user->update([
                'v_code'=>$code
            ]);
            DB::commit();
        }catch(Exception $e)
        {
            DB::rollback();
            return redirect()->back()->with('error','Error Occure');
        }
        return redirect()->back()->with('success','Code Resend .. Check Your Email');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
           'password'=>'required|confirmed|min:6'
        ]);
        $user = User::find(Auth::user()->id);
        if(Hash::check($request->password, $request->confirm_password))
        {
            $user->update([
                'password'=>Hash::make($request->password),
            ]);
            redirect()->back()->with('success','Password Changed');
        }
    }

}
