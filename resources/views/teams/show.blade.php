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
       <h1>所属選手一覧</h1>
       @foreach ($players as $player)
            <h2><a href="/players/{{$player->id}}">{{$player->name}}</a></h2>
       @endforeach
    </body>
</html>
@endsection