<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
{

    public function rules()
    {
        return [
            "team.name" => "required|string|max:50",
            "team.body" => "required|string|max:20",
        ];
    }
}
