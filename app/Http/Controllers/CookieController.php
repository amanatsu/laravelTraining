<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
    //
    public function index(Request $request){
        $msg = $request->hasCookie('msg') 
        ? "クッキー保存値：".$request->cookie('msg')
        : "クッキーをタッチ！";
        return view('cookie', compact('msg'));
    }

    public function post(Request $request){
        $msg = "保存しました";
        // 自ページに遷移させるとなぜかクッキー保存されない。
        //$response = new Response(view('cookie', compact('msg')));
        // これなら大丈夫
        //$response = new Response(view('welcome', compact('msg')));
        $response = new Response('（・大・）保存しました。お手数ですがブラウザバック願います。');
        $response->cookie('msg', $request->input('textvalue'), 1);

        return $response;

      //別のやり方
        //$response = response()->view("welcome", compact('msg'));
            #$response->withCookie(cookie()->forever('search_default', $request->input("food")));
        //$response->cookie(cookie()->forever("msg",'hoge'));
        
  
    }
}
