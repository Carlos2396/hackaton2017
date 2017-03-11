<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Pin;
use App\Residue_type;

class SessionsController extends Controller
{
    public function __construct(){
        $this->middleware('guest')->except(['destroy', 'show', 'storepin']);
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
        $residue_types = Residue_type::all();
        $pins = $user->pins->toArray();
        $lats;
        $lngs;
        $types;
        $i = 0;
        for($i; $i<sizeof($pins); $i++){
            $lats[$i] = Location::find( $pins[$i]['location_id'])->lat;
            $lngs[$i] = Location::find( $pins[$i]['location_id'])->lng;
            $types[$i] = Residue_type::find( $pins[$i]['residue_id'])->id; 
        }



        return view('profile.index', compact('locations', 'residue_types', 'lats', 'lngs', 'types'));
    }

    public function storepin(){
        Pin::create([
            'user_id' => auth()->user()->id,
            'residue_id' => request('residue_type'),
            'location_id' => request('location')
        ]);

        redirect('/profile');
    }
}
