<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function players(){
        return $this->hasMany("App\Player");
    }
    public function getPaginateByLimit(int $limit_count = 5){
        return $this->orderBy("updated_at", "DESC")->paginate($limit_count);
    }
    public function getByTeam(int $limit_count = null){
        return $this->players()->with("team")->orderBy("updated_at", "DESC")->paginate($limit_count);
    }
    protected $fillable = [
        "team_name",
        "body",
        ];
}
