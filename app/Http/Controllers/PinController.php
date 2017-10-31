<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Residue_type;
use App\Location;
use App\Pin;
use JavaScript;

class PinController extends Controller
{
    public function show(){
        $residues = Residue_type::all();
        $pins = Pin::with('location')->get();

        JavaScript::put([
            'pins' => $pins
        ]);

        return view('map', compact('residues'));
    }
}
