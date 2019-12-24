<?php
//テストコードを記述

//配列
//どっちでもいい
//$arr1 = ["a","b","c"];
$arr1 = array("a","b","c");

/* 
C#でいう以下のようなことをやりたい
private class IdValue
{
    string id = "";
    string value = "";
}
List<IdValue> arr2 = new List<IdValue>();
IdValue idvalue = new IdValue();
idvalue.id = "1";
idvalue.value = "やまだ";
arr2.Add(idvalue);
idvalue = new IdValue();
idvalue.id = "2";
idvalue.value = "さとう";
arr2.Add(idvalue);
*/

//１、普通に配列と連想配列の組み合わせ　key名が文字列なのがなんかかゆい
$arr2 = [["id"=>"1", "value"=>"やまだ"], ["id"=>"2", "value"=>"さとう"]];

var_dump($arr2);

$result = "なし";
foreach ($arr2 as $arr)
{
    if ($arr["id"] == "2")
    {
        $result = $arr["value"];
    }
}
echo $result;

//２、クラスつくって配列に変換する　なんかめんどくさい
class IdValue{
    public $id = "";
    public $value = "";
}
class Idvalues{
    public $Idvalues = [];
    public function __construct()
    {
        $this->Idvalues[0] = new IdValue();
        $this->Idvalues[0] -> id = "1";
        $this->Idvalues[0] -> value = "やまだ";
        $this->Idvalues[1] = new IdValue();
        $this->Idvalues[1] -> id = "2";
        $this->Idvalues[1] -> value = "さとう";
    }
}
$iv = new Idvalues();
$ivarray = (array)$iv;
var_dump($ivarray);

//３、２よりこっちのほうが近い
$iv2 = [];
$iv2[0] = new IdValue();
$iv2[0] -> id = "1";
$iv2[0] -> value = "やまだ";
$iv2[1] = new IdValue();
$iv2[1] -> id = "2";
$iv2[1] -> value = "さとう";
var_dump($iv2);

?>