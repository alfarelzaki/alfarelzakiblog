<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PublicController extends Controller
{
    public function blog()
    {
        $posts = Post::all();
        $posts = $posts->sortByDesc('created_at');
        return view('blog', compact('posts'));
    }

    public function landing()
    {
        return view('welcome');
    }
}
