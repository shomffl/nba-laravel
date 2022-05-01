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
       <h1>選手登録ページ</h1>
       <form action="/players" method="POST">
           @csrf
           <div>
               <h2>名前</h2>
               <input type="text" name="player[name]" placeholder="選手名" />
               <p style="color:red">{{$errors->first("player.name")}}</p>
           </div>
           <div>
               <h2>コメント</h2>
               <textarea name="player[body]" placeholder="コメント"></textarea>
                <p style="color:red">{{$errors->first("player.body")}}</p>
           </div>
           <div>
               <select name="player[team_id]">
                   @foreach ($teams as $team)
                        <option value={{$team->id}}>{{$team->team_name}}</option>
                    @endforeach
               </select>
           </div>
           <div>
               @foreach ($positions as $position)
                <lable>
                    <input type="checkbox" value={{$position->id}} name="positions_array[]">
                        {{$position->position}}
                    </input>
                </lable>
            @endforeach
           </div>
           
           
           <input type="submit" value="保存"/ >
       </form>
       <div><a href="/">back</a></div>
    </body>
</html>
@endsection