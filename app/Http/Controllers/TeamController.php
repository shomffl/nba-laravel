<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Player;

class TeamController extends Controller
{
    public function index(Team $team){
        return view("teams/index")->with(["teams"=> $team->getPaginateByLimit()]);
    }
    public function show(Team $team){
        return view("teams/show")->with(["players"=> $team->getByTeam()]);
    }
    public function create(Team $team){
        return view("teams/create");
    }
    public function store(Request $request, Team $team){
        $input = $request["team"];
        $team->fill($input)->save();
        return redirect("/teams");
    }
}
