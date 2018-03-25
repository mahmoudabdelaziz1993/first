<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class postController extends Controller
{
    //
    public function createpost (Request $request){
        $this->validate($request, [
            'new_post'=>'required|max:100'
        ]);
        $post=new Post();
        $post->body=$request['new_post'];
        $message = 'post faild';

        if($request->user()-> post()->save($post)){
            $message = 'post succesfully posted';
        }

        return redirect()->back()-> with(['message'=> $message]);

    }
    public function delete($post_id){
        if(auth::user()==$post_id){
        $post = Post::find($post_id);
        $post->delete();
        return redirect()->route('dashboard')->with(['message'=> 'succesfuly deleted']);}
        return redirect()->route('dashboard')->with(['message'=> 'can not delete this']);

    }
}
