<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        th {background-color: blue; color: blanchedalmond; padding: 5px 10px}
        td {border: solid 1px #aaa; color: #999; padding: 5px 10px}
    </style>
    <title>Document</title>
</head>
<body>
<p>{{$msg}}</p>
    <div>
        <p>いらっしゃいませ</p>
        <form method="get" action="#">
            <td><input type="text" name="id" placeholder="id"> </td>
            <td><button type="submit">select</button></td>
        </form>
        <form method="get" action="/usedb/delete">
            <td><input type="text" name="id" placeholder="id"> </td>
            <td><button type="submit">delete</button></td>
            </form>
        <table>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>mail</th>
                <th>age</th>
                <th>update</th>
            </tr>
        @foreach ($items as $item)

            <tr>
                <td>{{$item->id}}</td>
                <form method="post" action="#">
                    {{ csrf_field() }}
                <td><input type="text" name="updateName"
                    value="{{$item->name}}"> </td>
                <td><input type="text" name="updateMail"
                    value="{{$item->mail}}"> </td>
                <td><input type="text" name="updateAge"
                    value="{{$item->age}}"> </td>
                <td><button type="submit" formaction="/usedb/update?id={{$item->id}}">update</button></td>
                </form>
            </tr>
        @endforeach
        <form method="post" action="#">
            {{ csrf_field() }}
            <tr>
                <td></td>
                <td><input type="text" name="name"></td>
                <td><input type="text" name="mail"></td>
                <td><input type="text" name="age"></td>
                <td><button type="submit" formaction="/usedb/insert">insert</button></td>
            </tr>
        </form>
        </table>
        
        
    </div>

 
</body>
</html>