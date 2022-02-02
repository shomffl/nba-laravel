<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function players(){
        return $this->hasMany("App\Player");
    }
    public function getByTeam(int $limit_count = null){
        return $this->players()->with("team")->orderBy("updated_at", "DESC")->paginate($limit_count);
    }
}
