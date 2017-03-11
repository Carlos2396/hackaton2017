<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class LocationController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){
        return view('location.create');
    }

    public function store(){

        $this->validate(request(), [
            'name' => 'required',
            'address' => 'required',
        ]);

        Location::create([
            'user_id' => auth()->user()->id,
            'name' => request('name'),
            'address' => request('address'),
            'lat' => (double)request('lat'),
            'lng' => (double)request('lng')
        ]);

        return view('profile.index');
    }
}
