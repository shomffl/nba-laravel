<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NBA</title>
       
    </head>
    <body>
       <h1>選手編集ページ</h1>
       <form action="/players/{{$player->id}}" method="POST">
           @csrf
           @method("PUT")
           <div>
               <h2>名前</h2>
               <input type="text" name="player[name]" placeholder="選手名" value="{{$player->name}}"/>
                <p style="color:red">{{$errors->first("player.name")}}</p>
           </div>
           <div>
               <h2>コメント</h2>
               <textarea name="player[body]" placeholder="コメント">{{$player->body}}</textarea>
               <p style="color:red">{{$errors->first("player.body")}}</p>
           </div>
           <div>
               <select name="player[team_id]">
                   @foreach ($teams as $team)
                        <option value={{$team->id}}>{{$team->team_name}}</option>
                    @endforeach
               </select>
           </div>
           <input type="submit" value="送信"/ >
       </form>
       <div><a href="/">back</a></div>
    </body>
</html>
