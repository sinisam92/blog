<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct() 
    {
        //proverava da li je korisnik gost primenjuje na sve osim na logout
        $this->middleware('guest', ['except' => 'logout']);
    }
    public function index()
    {
    
        return view('login.index');
    }
    public function logout()
    {
        auth()->logout();

        return redirect('/posts');
    }
    public function login()
    {
        if (!auth()->attempt(request(['email', 'password']))) {
            return back()->withErrors([
                'message' => 'Omasijo Si Sifru. You shell not passsssss....'
            ]);
        }
        
        return redirect('/posts');
    }
}
