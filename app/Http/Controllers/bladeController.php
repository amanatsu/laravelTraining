<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bladeController extends Controller
{
    //
    public function index()
    {
        $data = [
          ['name'=>'中村', 'mail'=>'y-nakamura@dyn.co.jp']  ,
          ['name'=>'宮内', 'mail'=>'s-miyauchi@dyn.co.jp']  ,
          ['name'=>'石田', 'mail'=>'isda@dyn.co.jp']  ,
          
        ];
        return view('blades/child', compact('data'));
    }
}
