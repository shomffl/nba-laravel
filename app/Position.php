<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public function players(){
        return $this->belongsToMany("App\Player");
    }
}
