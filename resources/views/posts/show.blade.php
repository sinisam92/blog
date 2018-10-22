@extends('layouts.master')

@section('title')

    <title>{{ $post->title }}</title>

@endsection

@section('content')
    <h2><a href="/posts">All Posts</a></h2>
    <div class="blog-post">
        <h2 class="blog-post-title">               
            {{ $post->title }}
        </h2>
        <p>{{ $post->body }}</p>    
    </div>

@endsection