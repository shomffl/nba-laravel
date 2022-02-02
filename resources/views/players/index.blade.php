<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NBA</title>
       
    </head>
    <body>
       <h1>NBA選手一覧</h1>
       <div>
           <a href="/players/create">create</a>
       </div>
       @foreach ($players as $player)
       <div style="display: inline-block; border: 4px solid; padding:3px; margin-bottom:10px">
           <h2 style="margin:0;">
               <a href="/players/{{$player->id}}">{{$player->name}}</a>
            </h2>
            <div>
                {{$player->body}}
            </div>
             <div>
                {{$player->team->team_name}}
            </div>
       </div>
       <br/>
       @endforeach
    </body>
</html>
