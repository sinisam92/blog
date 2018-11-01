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
                  <p>Napisao: <a href="/users/{{ $post->author->id}}">{{$post->author->name}}</a></p>
                  <p>{{ $post->created_at }}</p>
                <p>{{ $post->body }}</p>
            </div>
        </li>
        @endforeach
        <nav class="blog-pagination">
        <a class="btn btn-outline-{{ $posts->currentPage() == 1 ?   'secondary disabled' : 'primary' }}" href="{{ $posts->previousPageUrl() }}">Previouse</a>
            <a class="btn btn-outline-{{ $posts->hasMorePages() ?  'primary' : 'secondary disabled' }}" href="{{ $posts->nextPageUrl() }}">Next</a>
            Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}
        </nav>
    </ul>
@endsection
