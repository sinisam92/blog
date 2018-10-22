@extends('layouts.master')

@section('title')
    Create Post
@endsection

@section('content')
    <form method="POST" action="/posts">

        {{ csrf_field() }}
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
        </div>
        <div class="form-group">
                <label>Post</label> 
                <textarea type="textarea" class="form-control" id="body" name="body" placeholder="Enter text"></textarea>
        </div>
        <div class="form-group form-check">
                <input type="checkbox" checked="true" value="1" class="form-check-input" name="published" id="published">
                <label class="form-check-label">Publish this post?</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection