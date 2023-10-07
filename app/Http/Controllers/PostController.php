<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index(){
        return view('posts',[
            "title"=>"All Posts",
            "posts"=>Post::with(['user','category'])->latest()->get()
            // "posts"=>Post::all()
        ]);
    }
    public function show( Post $post){
        return view('post',[
            "title"=>"Post",
            "posts"=>$post
        ]);
    }
}
