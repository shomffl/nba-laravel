<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public function team(){
        return $this->belongsTo("App\Team");
    }
    
    protected $fillable = [
        "name",
        "body",
        "team_id",
        ];
}
