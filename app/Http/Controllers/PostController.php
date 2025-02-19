<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function index()
    {
        return view('postsindex');
    }

    public function show($slug)
    {
        $viewPath = "posts.$slug";
        if (view()->exists($viewPath)) {
            return view($viewPath);
        }

        abort(404, 'Post not found.');
    }
}
