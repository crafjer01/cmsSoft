<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;

class WebController extends Controller
{
    public function blog()
    {
        $posts = Post::orderBy('id', 'DESC')->Active()->paginate(5);

        return view('blog.posts.index', compact('posts'));
    }

    public function category($slug)
    {
        $categoryID = Category::where('slug', $slug)->pluck('id')->first();
        $posts = Post::where('category_id', $categoryID)->orderBy('id', 'DESC')->Active()->paginate(5);

        return view('blog.posts.index', compact('posts'));
    }

    public function tag($slug)
    {
        $posts = Post::whereHas('tags', function($query) use ($slug){
            $query->where('slug', $slug);
        })->orderBy('id', 'DESC')->Active()->paginate(5);

        return view('blog.posts.index', compact('posts'));
    }

    public function post($slug)
    {
        $post = Post::where('slug', $slug)->Active()->first();

       // dd($post);

        return view('blog.posts.show', compact('post'));
    }
}
