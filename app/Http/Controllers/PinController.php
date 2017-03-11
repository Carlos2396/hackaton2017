<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Residue_type;
use App\Location;
use App\Pin;

class PinController extends Controller
{
    public function show(){
        $pins = Pin::all()->toArray();
        $residues = Residue_type::all();
        $lats;
        $lngs;
        $types;
        $i = 0;
        for($i; $i<sizeof($pins); $i++){
            $lats[$i] = Location::find($pins[$i]['location_id'])->lat;
            $lngs[$i] = Location::find($pins[$i]['location_id'])->lng;
            $types[$i] = Residue_type::find( $pins[$i]['residue_id'])->id; 
        }

        return view('map', compact('residues', 'lats', 'lngs', 'types'));
    }
}
