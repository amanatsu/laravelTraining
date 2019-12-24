<html>
<body>
@section('sidebar')
これは親です
@show

<div class="container">
    @yield('content')
    <!--yieldは子のコンテンツに任せるということ
    子にSection('content')の指定が必須-->
</div>
@include('blades/including', ['target' => 'hoge'])
    <!--includeはコンテンツを差し込む
    継承はできないので固定となる-->
</body>
</html>