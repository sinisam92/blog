@extends('layouts.master')

@section('title')
    Register User
@endsection

@section('content')
    <h2>Register User</h2>
    <form method="POST" action="/register">

        {{ csrf_field() }}
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
            @include('layouts.partials.error-message', ['field' => 'name'])
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email">
            @include('layouts.partials.error-message', ['field' => 'email'])
        </div>
        <div class="form-group">
                <label>Age</label>
                <input type="text" class="form-control" id="age" name="age" placeholder="Enter Age">
                
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
            @include('layouts.partials.error-message', ['field' => 'password'])
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection


