<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct(){
        $this->middleware('guest')->except(['destroy', 'show']);
    }

    public function create(){
        return view('sessions.create');
    }

    public function destroy(){
        auth()->logout();

        return redirect()->home();
    }

    public function store(){
        if ( !auth()->attempt( ['email' => request('email'), 'password' => request('password')] ) ){
            return back()->withErrors([
                'message' => 'Please check your email and password and try again.'
            ]);
        }

        return redirect('profile');
    }

    public function show(){
        $user =  auth()->user();
        $locations = $user->locations;
        $pins = $user->pins;

        return view('profile.index', compact('locations', 'pins'));
    }
}
