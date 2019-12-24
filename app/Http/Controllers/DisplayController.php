<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisplayController extends Controller
{
    //
    public function index()
    {
        $c1 = "赤";
        $c2 = "黄";
        $c3 = "青";
        $title = "Display";
        return view('display',compact("c1","c2","c3", "title"));
    }
}
