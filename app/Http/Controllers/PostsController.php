<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', ['posts' => $posts]);
    }
    public function get($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.single', ['post' => $post]);
    }
}
