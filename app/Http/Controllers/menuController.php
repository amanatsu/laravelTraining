<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class menuController extends Controller
{
    //
    public function index()
    {
        $menus = [
            ["url"=>"book", "title"=>"BOOK", "remarks" => "BOOKサンプル(mysql鯖が死んでると無理)"],
            ["url"=>"response", "title"=>"Response", "remarks" => "Responseの内容表示"],
            ["url"=>"display", "title"=>"display", "remarks" => "Bladeのログの表示"],
            ["url"=>"blades", "title"=>"Blade", "remarks" => "Bladeサンプル"],
            ["url"=>"validation", "title"=>"validation", "remarks" => "入力チェック"],
            ["url"=>"usedb", "title"=>"usedb", "remarks" => "sqliteを使ったSQLやりとり"],
        ];
        return view('menu',compact("menus"));
    }
}
