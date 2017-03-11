<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Location;
use App\Pin;

class RegistrationController extends Controller
{
    public function create(){
        return view('registration.create');
    }

    public function store(){
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'name' => request('name'),
            'email'=> request('email'), 
            'password' => bcrypt(request('password'))
        ]);
        
        $location = Location::create([
            'user_id' => $user->id,
            'name' => 'La estrella de Puebla',
            'address' => 'av. Osa Mayor no. 8500',
            'lat' => 19.034558,
            'lng' => -98.232218
        ]);

        Pin::create([
            'user_id' => $user->id,
            'residue_id' => 1,
            'location_id' => $location->id
        ]);

        auth()->login($user);

        return redirect('/profile');
    }
}
