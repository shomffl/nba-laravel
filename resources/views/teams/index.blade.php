<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NBA</title>
       
    </head>
    <body>
       <h1>NBAチーム一覧</h1>
       @foreach ($teams as $team)
       <div style="display: inline-block; border: 4px solid; padding:3px; margin-bottom:10px">
            <h2><a href="teams/{{$team->id}}">{{$team->team_name}}</a></h2>
            <p>{{$team->body}}</p>
       </div>
       <br/>
       @endforeach
    </body>
</html>
