<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\Tag;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::getPublishedPosts()->orderBy('created_at', 'desc')->paginate(10);

        return view('posts.index', ['posts' => $posts]); // compact(['posts'])
    }
    public function show($id)
    {
        //lazy loging $post = Post::findOrFail($id); ako je sajt posecen
        $post = Post::with('comments')->findOrFail($id);

        return view('posts.show', ['post' => $post]);
    }
    public function create()
    {
        $tags = Tag::all();

        return view('posts.create')->with('tags', $tags);
    }
    public function store()
    {
        $this->validate(
            request(),
            Post::VALIDATION_RULES
            );

         
        //merguje sve postove sa aurtorima
        $post = new Post();
        $post->title = request('title');
        $post->body = request('body');
        $post->author_id = auth()->user()->id;
        $post->published = true;
        $post->save();

        $post->tags()->attach(request('tags'));

        return redirect('/');

    }
}
