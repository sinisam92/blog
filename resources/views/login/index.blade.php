@extends('layouts.master')

@section('title')

    Login User
@endsection

@section('content')

    <form method="POST" action="/login">

        {{ csrf_field() }}
       
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
           
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
           
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @if(count($errors->all()))
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
        @endforeach
    @endif


@endsection