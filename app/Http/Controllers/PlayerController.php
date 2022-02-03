<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\Team;
use App\Position;
use App\Http\Requests\PlayerRequest;


class PlayerController extends Controller
{
    public function index(Player $player){
        return view("players/index")->with(["players" => $player->getPaginateByLimit()]);
    }
    public function create(Position $position,Team $team){
        return view("players/create")->with(["positions"=> $position->get(),"teams" => $team->get()]);
    }

    public function show(Player $player){
        return view("players/show")->with(["player"=>$player]);
    }
    public function store(PlayerRequest $request, Player $player){
        $input_player = $request["player"];
        $input_position = $request->positions_array;
        $player->fill($input_player)->save();
        $player->positions()->attach($input_position);
        return redirect("/players/" . $player->id);
    }
    public function edit(Player $player, Team $team, Position $position){
        return view("players/edit")->with(["player"=>$player, "teams"=>$team->get(), "positions"=>$position->get()]);
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
