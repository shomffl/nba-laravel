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
       <h1>NBA選手一覧</h1>
       <div>
           <a href="/teams">チーム一覧</a>
       </div>
       <div>
           <a href="/players/create">選手追加</a>
       </div>
       @foreach ($players as $player)
       <div style="display: inline-block; border: 4px solid; padding:3px; margin-bottom:10px">
           <h2 style="margin:0; padding:0;">
               <a href="/players/{{$player->id}}">{{$player->name}}</a>
            </h2>
            <h3 style="margin:0; padding:0;">所属チーム : {{$player->team->team_name}}</h3>
            <div style="display:flex;">
                <p>ポジション : </p>
                @foreach ($player->positions as $position)
                    {{$position->position}}
                @endforeach
            </div>
            <div style="display:flex; gap:3px;">
                <a href="/players/{{$player->id}}/edit">編集</a>
                <form action="players/{{$player->id}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button onclick="return checkDelete()">削除</button>
                </form>
            </div>
       </div>
       @endforeach
       <div>{{$players->links("pagination::semantic-ui")}}</div>
       <script>
           function checkDelete(){
               const check = window.confirm("本当に削除しても大丈夫ですか？")
               if (check){
                   return true;
               }else{
                   return false;
               }
           }
       </script>
    </body>
</html>
@endsection