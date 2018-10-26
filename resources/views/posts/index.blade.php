@extends('layouts.master')

@section('title')
    All posts
@endsection

@section('content')
    <h1>Posts</h1>
    <ul>
        @foreach($posts as $post)
        <li>
            <div class="blog-post">
                <h2 class="blog-post-title">
                        <a href="/posts/{{ $post->id }}">
                            {{ $post->title }}
                        </a>
                </h2>
                  <p>Napisao: {{$post->author->name}}</p>
                  <p>{{ $post->created_at }}</p>
                <p>{{ $post->body }}</p>
            </div>
        </li>
        @endforeach

    </ul>
@endsection
