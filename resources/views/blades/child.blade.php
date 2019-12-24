@extends('blades/parent')
<!--親ページを指定。スラッシュでもドットでもいけるようだ。
親ページにのっかるイメージ。ただしアドレス的には子を指定する。
-->
@section('sidebar')
@parent
<!--parentを記述しないと親のsidebarを上書きする。
parentを記述した位置に親のsidebarの中身が出る。
-->
<p>これは子です</p>
@stop
<!--sectionの終了は親はshow 子はstopを使用するようだ
endsectionは古い表現のようだ-->
@section('content')
<p>ここは本文のコンテンツ</p>
<!--eachで配列分繰り返し
引数　bladeファイル, 引き渡す配列, 向こうでの変数名-->
@each('components/item', $data, 'item')
@stop


