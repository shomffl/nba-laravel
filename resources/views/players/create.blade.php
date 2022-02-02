<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NBA</title>
       
    </head>
    <body>
       <h1>選手登録ページ</h1>
       <form>
           <div>
               <h2>名前</h2>
               <input name="player[name]" placeholder="選手名" />
           </div>
           <div>
               <h2>コメント</h2>
               <textarea name="player[body]" placeholder="コメント"></textarea>
           </div>
           <div>
               <select>
                   @foreach ($teams as $team)
                        <option>{{$team->team_name}}</option>
                    @endforeach
               </select>
           </div>
       </form>
    </body>
</html>
