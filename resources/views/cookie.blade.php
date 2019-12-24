<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>{{$msg}}</p>

    <form action = "#" method="post">
        {{csrf_field()}}
        <p><input type="text" name="textvalue" size="30"></p>
        <p><input type="image" src="cookie.png" alt="送信する"></p>
    </form>

   {{--  {{ dd(get_defined_vars()) }} --}}
</body>
</html>