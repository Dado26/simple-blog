<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\SimpleBlogRequest;


class PostController extends Controller
{
    public function index()
            {
        
        $posts = Post::latest()->paginate(6);
        
        return view('posts.index',compact('posts'));
            }
            
     public function show(Post $post)
            {
        //$post = Post::find($post);
         return view('posts.show', compact('post'));
       
            }
            
     public function create_post(SimpleBlogRequest $request){
         
         Post::create($request->all());
    /*$post = new Post;
    
    $post->body = $request->body;
    $post->title = $request->title;
    
    
    $post->save();*/
    
    return redirect()->back();
        
     }
}
