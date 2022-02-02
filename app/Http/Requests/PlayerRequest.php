<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlayerRequest extends FormRequest
{
    public function rules()
    {
        return [
            "player.name" => "required|string|max:100",
            "player.body" => "required|string|max:1000",
        ];
    }
}
