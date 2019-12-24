<head>
    <title>Laravel Sample</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
    <div class="container ops-main">
        <div class="row">
            <div class="col-md-12">
                <h3 class="ops-title">お品書き</h3>
            </div>
        </div>
 
            <div class="col-md-11 col-md-offset-1">
                <table class="table text-center">
                    <tr>
                        <th class="text-center">ページ</th>
                        <th class="text-center">説明</th>
                    </tr>
                    @foreach($menus as $menu)
                        <tr>
                            <td>
                                <a href="{{ $menu["url"] }}">{{ $menu["title"] }}</a>
                            </td>
                            <td>{{ $menu["remarks"] }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <p>関数のHowto</p>
            <p>implode</p>
            <p>string.joinみたいなやつ。
                配列はkey valueでも大丈夫だがkeyは出ない。</p>
            <p>
            <pre><code class="prettyprint lang-php">
                $array = array('ps4', 'switch', 'steam');
                $comma_separated = implode(",", $array);
                echo $comma_separated;
            </code>
            //結果：
            <?php
            $array = array('ps4', 'switch', 'steam');
            //$array = ['main'=>'ps4', 'sub'=>'switch'];
            $comma_separated = implode(",", $array);
            echo $comma_separated;
            ?>
            </pre>

           
                <pre><code class="prettyprint lang-cs">
                    private async Task GetSomething()
                    {
                        List<string> hatena = new List(string);
                        hatena.Add("something");
                        await GetDoingAsync(hatena);
                    }
                </code>
                </pre>
         
            
         
        </div>

