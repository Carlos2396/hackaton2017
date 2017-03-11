<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function pin(){
        return $this->hasMany(Pin::class);
    }
}
