<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{
    public function index(Team $team){
        return view("teams/index")->with(["teams"=> $team->get()]);
    }
}
