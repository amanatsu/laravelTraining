<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>検索用フォーム</h2>
    {{Form::open(["route"=>"cookie_test","method"=>"get"])}}
    <div>
    {{Form::select('food',[
            'apple' => 'りんご',
            'banana' => 'バナナ',
            'grape' => 'ぶどう',
    ],request()->cookie('search_default'))}}
    </div>
    <div>
    {{Form::button('検索',["type"=>"submit","name"=>"form_type","value"=>"search"])}}
    </div>
    {{Form::close()}}

    <h2>Cookie更新用フォーム</h2>
    {{Form::open(["route"=>"cookie_test","method"=>"get"])}}
    <div>
        {{Form::select('food',[
            'apple' => 'りんご',
            'banana' => 'バナナ',
            'grape' => 'ぶどう',
        ])}}
    </div>
    <div>
        {{Form::button('更新',["type"=>"submit","name"=>"form_type","value"=>"cookie_update"])}}
    </div>
    {{Form::close()}}

</body>
</html>