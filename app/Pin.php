<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Residue_type;

class Pin extends Model
{
    public function residue_type(){
        return $this->belongsTo(Residue_type::class);
    }
    public function location(){
        return $this->belongsTo(Location::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
