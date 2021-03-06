<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Player;
use App\Http\Requests\TeamRequest;

class TeamController extends Controller
{
    public function index(Team $team){
        return view("teams/index")->with(["teams"=> $team->getPaginateByLimit()]);
    }
    public function show(Team $team){
        return view("teams/show")->with(["players"=> $team->players]);
    }
    public function create(Team $team){
        return view("teams/create");
    }
    public function store(TeamRequest $request, Team $team){
        $input = $request["team"];
        $team->fill($input)->save();
        return redirect("/teams");
    }
    public function edit(Team $team){
        return view("teams/edit")->with(["team"=>$team]);
    }
    public function update(TeamRequest $request, Team $team){
        $input = $request["team"];
        $team->fill($input)->save();
        return redirect("/teams");
    }
    public function delete(Team $team){
        $team->delete();
        return redirect("/teams");
    }
}
