<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public function team(){
        return $this->belongsTo("App\Team");
    }
    
    public function getBylimit(int $limit_count = 10){
        return $this->orderBy("updated_at", "DESC")->limit($limit_count)->get();
    }
    
    public function getPaginateByLimit(int $limit_count = 5){
        return $this->orderBy("updated_at", "DESC")->paginate($limit_count);
    }
    
    public function positions(){
        return $this->belongsToMany("App\Position");
    }
    
    protected $fillable = [
        "name",
        "body",
        "team_id",
        ];
}
