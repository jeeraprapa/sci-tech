<?php

namespace App\Http\Controllers;

use SciTech\Admin\Models\Blog;

class BlogController extends Controller
{

    public function index ()
    {
        $blogs = Blog::orderBy('published_at','desc')->get();

        return view('blog',compact('blogs'));
    }
}
