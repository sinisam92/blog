@extends('layouts.master')

@section('title')

  {{$user->title}}

@endsection

@section('content')
    <h2><a href="/posts">All Posts</a></h2>
    @foreach($user->posts as $post)
    <div class="blog-post">
        <p> {{$post->author->name}}</p>
        <h2 class="blog-post-title">
            {{ $post->title }}
            {{$post->body}}
        </h2>
    </div>
    @endforeach

@endsection