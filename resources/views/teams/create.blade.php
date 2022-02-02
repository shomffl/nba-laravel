<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NBA</title>
       
    </head>
    <body>
       <h1>チーム登録ページ</h1>
       <form action="/teams" method="POST">
           @csrf
           <div>
               <h2>チーム名</h2>
               <input type="text" name="team[name]" placeholder="チーム名" />
               <p style="color:red">{{$errors->first("team.name")}}</p>
           </div>
           <div>
               <h2>コメント</h2>
               <textarea name="team[body]" placeholder="コメント"></textarea>
                <p style="color:red">{{$errors->first("team.body")}}</p>
           </div>
           <input type="submit" value="保存"/ >
       </form>
       <div><a href="/teams">back</a></div>
    </body>
</html>
