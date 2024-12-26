<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;    

class FrontController extends Controller
{
    public function blog()
    {
        $posts = Post::orderBy('id','DESC')->paginate(4);
        // var_dump($posts);
        return view('front.blogs',compact('posts'));
    }
 
    public function blogPost($id)
    {
        $posts = Post::find($id);
        return view('front.blog-post',compact('posts'));
    }
}
