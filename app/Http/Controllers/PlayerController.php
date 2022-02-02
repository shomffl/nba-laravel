<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\Team;
use App\Http\Requests\PlayerRequest;


class PlayerController extends Controller
{
    public function index(Player $player){
        return view("players/index")->with(["players" => $player->getPaginateByLimit()]);
    }
    public function create(Team $team){
        return view("players/create")->with(["teams" => $team->get()]);
    }

    public function show(Player $player){
        return view("players/show")->with(["player"=>$player]);
    }
    public function store(PlayerRequest $request, Player $player){
        $input = $request["player"];
        $player->fill($input)->save();
        return redirect("/players/" . $player->id);
    }
    public function edit(Player $player, Team $team){
        return view("players/edit")->with(["player"=>$player, "teams"=>$team->get()]);
    }
    public function update(PlayerRequest $request, Player $player){
        $input = $request["player"];
        $player->fill($input)->save();
        return redirect("/players/" . $player->id);
    }
    public function delete(Player $player){
        $player->delete();
        return redirect("/");
    }
}
