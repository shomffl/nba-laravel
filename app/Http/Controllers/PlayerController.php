<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\Team;


class PlayerController extends Controller
{
    public function index(Player $player){
        return view("players/index")->with(["players" => $player->get()]);
    }
    public function create(Team $team){
        return view("players/create")->with(["teams" => $team->get()]);
    }

    public function show(Player $player){
        return view("players/show");
    }
    public function store(Request $request, Player $player){
        $input = $request["player"];
        $player->fill($input)->save();
        return redirect("/");
    }
}
