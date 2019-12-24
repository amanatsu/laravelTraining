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
 
    @if (count($errors) > 0)
        <div>
            <p>極めて重大な問題が発生しました！！</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <table>
        <form action = "#" method="post">
            {{csrf_field()}}
            @if ($errors->has('name'))
                <tr>
                    <th>ERROR:</th>
                    <td>
                        {{$errors->first('name')}}
                    </td>
                </tr>
            @endif
            <tr>
                <th>name:</th>
                <td>
                    <input type="text" name="name" value="{{old('name')}}">
                </td>
            </tr>
            @if ($errors->has('mail'))
            <tr>
                <th>ERROR:</th>
                <td>
                    {{$errors->first('mail')}}
                </td>
            </tr>
            @endif
            <tr>
                <th>mail:</th>
                <td>
                    <input type="text" name="mail" value="{{old('mail')}}">
                </td>
            </tr>
            @if ($errors->has('age'))
            @foreach($errors->get('age') as $error)
            <tr>
                <th>ERROR:</th>
                <td>
                    {{$error}}
                </td>
            </tr>
            @endforeach
            @endif
            <tr>
                <th>age:</th>
                <td>
                    <input type="text" name="age" value="{{old('age')}}">
                </td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="send"></td>
            </tr>
        </form>
    </table>
    {{ dd(get_defined_vars()) }}
</body>
</html>