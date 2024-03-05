<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        // get post data
        $posts = Post::orderBy('id', 'DESC')->paginate(6);

        // get here all post with who user created this post with eager loading.
        // compact the post data to welcome view.

        return view('welcome', compact('posts'));
    }
    public function show($id){
        //get single post data
        $post = Post::where('id', $id)->firstOrFail();
        // dd($post);
        return view('post',compact('post'));
    }
}
