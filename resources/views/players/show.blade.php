<!DOCTYPE html>
@extends("layouts.app")
@section("content")
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NBA</title>
       
    </head>
    <body>
       <h1>詳細ページ</h1>
       <h2>{{$player->name}}</h2>
       <p>{{$player->body}}</p>
       <p>所属チーム : {{$player->team->team_name}}</p>
       <div style="display:flex">
           <p>ポジション : </p>
           <span>
               @foreach ($player->positions as $position)
                    {{$position->position}}
                @endforeach
           </span>
       </div>
        
       <a href="/">back</a>
    </body>
</html>
@endsection
