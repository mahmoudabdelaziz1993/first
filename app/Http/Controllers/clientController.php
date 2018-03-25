<?php

namespace App\Http\Controllers;

use App\Client;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class clientController extends Controller
{
    public  function  dashboard(){
        $post=Post::all();
        return view('dashboard',['posts'=> $post]);
    }
    public function postsignup(Request $request){
        $uname = $request->input('username');
        $psw = bcrypt($request->input('password'));
        $email =$request->input('email');
        $user = new Client();
        $user-> email = $email;
        $user ->username = $uname;
        $user->password = $psw;
        $user ->save();
        return redirect()->back();

    }
    public function postsignin(Request $request){
        if (Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password')])){
            return redirect()->route('dashboard');
        }
        return redirect()->back();


    }
    public function logout(){
        auth::logout();
        return redirect()->route('home');
    }
}
