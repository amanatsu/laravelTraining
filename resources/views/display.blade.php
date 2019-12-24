<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
    this is display.php
    @php
        echo date("s")
    @endphp    
    @if (date("s") % 2 === 1)
        {{$c1}}
    @else
        {{$c2}}
    @endif
    
    {{ dd(get_defined_vars()) }}
</body>
</html>