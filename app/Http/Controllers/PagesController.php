<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');//->except('logout');
       // $this->middleware('guest:admin')->except('logout');
       // $this->middleware('guest:user')->except('logout');
    }

    public function adminlogin(){

        
        return view('auth.adminLogin');
    }
    public function stafflogin(){
        return view('auth.login');
    }
    public function homepage(){
        return view('welcome');
    }
    public function adminvalidatelogin(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ]);

        $credentials=\request(['email','password']);
        if(!auth()->guard('admin')->attempt($credentials)){
            return redirect()->back()->with('error','Invalid email or password');
        }
        return redirect()->route('admin.home');
    }

    public function staffvalidatelogin(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ]);

        $credential=\request(['email','password']);
        if(!auth()->guard('user')->attempt($credential)){
            return redirect()->back()->with('error','Invalid email or password');
        }
        return redirect()->route('user.home');
    }
    public  function adminlogout(){
        session()->flush();
        return view('welcome');
    }

    public function stafflogout(){
        session()->flush();
        return view('welcome');
    }
}
