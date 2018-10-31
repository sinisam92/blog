@extends('layouts.master')

@section('title')

    {{ $post->title }}

@endsection

@section('content')
    <h2><a href="/posts">All Posts</a></h2>
    <div class="blog-post">
        <p>Napisao: {{$post->author->name}}</p>
        <h2 class="blog-post-title">
            {{ $post->title }}
        </h2>

        <p>{{ $post->created_at}}</p>
        <p>
            <ul>
                @foreach($post->tags as $tag)
                    <li>
                    <a href="/posts/tags/{{ $tag->name }}">{{ $tag->name }}</a> 
                    </li>  
                @endforeach
            </ul>
            
        </p>
        <p>{{ $post->body }}</p>

        @if(count($post->comments))

            <h4>Comments</h4>
            <ul class="list-unstyled">
                @foreach($post->comments as $comment)
                    <li>
                        <p><strong>Author: </strong> {{ $comment->author}}</p>
                        <p> {{ $comment->text }} </p>

                        <form method="POST" action="/posts/{{ $post->id }}/comments/{{ $comment->id }}"> 
                            {{ csrf_field() }} 
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </li>
                @endforeach
               
            </ul>

        @endif
        <h4>Comment on this topic?</h4>
        <form method="POST" action="/posts/{{ $post->id }}/comments">

            {{ csrf_field() }}
            <div class="form-group">
                <label>Author</label>
                <input type="text" class="form-control" id="author" name="author" placeholder="Enter name">
                @include('layouts.partials.error-message', ['field' => 'author'])
            </div>
            <div class="form-group">
                    <label>Comment</label> 
                    <textarea type="textarea" class="form-control" id="text" name="text" placeholder="Enter comment"></textarea>
                    @include('layouts.partials.error-message', ['field' => 'text'])
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
