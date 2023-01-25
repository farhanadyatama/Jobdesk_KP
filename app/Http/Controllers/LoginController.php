<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');

    }
   
    public function authenticate(Request $request){
        // dd($request-> all());
        
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError','Login Failed!');

    }
    
    public function logout(Request $request){
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
    // public function regis()
    // {
    //     return view('login.login',[
    //         'title' =>  'Login'
    //     ]);

    // }
    // public function store()
    // {
    //     return request()-> all();

    // }

    // public function authenticate()
    // {
    //     return view('dashboard.index',[
    //         'title' =>  'Dashboard'
    //     ]);

    // }
    

    
}
