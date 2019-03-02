<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class WebController extends Controller
{
    public function blog()
    {
        $posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(5);

        return view('blog.posts.index', compact('posts'));
    }
}
