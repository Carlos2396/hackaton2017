<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Residue_type;

class Pin extends Model
{
    public function residue_type(){
        return $this->belongsTo(Residue_type::class);
    }
}
