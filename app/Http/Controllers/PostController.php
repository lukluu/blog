<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "All Posts",
            "active" => "posts",
            "posts" => Post::with(['author', 'category'])->latest()->filter(request(['search']))->get()
            //  "posts" => Post::all()
        ]);
    }
    public function show(Post $post)
    {
        return view('single-post', [
            "title" => "Single-Post",
            "active" => "posts",
            "post" => $post
        ]);
    }
    
}
