<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NBA</title>
       
    </head>
    <body>
       <h1>チーム編集ページ</h1>
       <form action="/teams/{{$team->id}}" method="POST">
           @csrf
           @method("PUT")
           <div>
               <h2>名前</h2>
               <input type="text" name="team[team_name]" placeholder="チーム名" value="{{$team->team_name}}"/>
                <p style="color:red">{{$errors->first("team.team_name")}}</p>
           </div>
           <div>
               <h2>コメント</h2>
               <textarea name="team[body]" placeholder="コメント">{{$team->body}}</textarea>
               <p style="color:red">{{$errors->first("team.body")}}</p>
           </div>
            <input type="submit" value="送信"/ >
       </form>
       <div><a href="/teams">back</a></div>
    </body>
</html>
