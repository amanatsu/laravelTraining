<?php

namespace App\Http\Controllers;

use App\Http\Requests\validationRequest;
use Validator;
use Illuminate\Http\Request;

class validationController extends Controller
{
    //
    public function index(Request $request){
        $queryValidator = Validator::make($request->query(),[
            'id' => 'required',
            'pass' => 'required' ,
            
        ]);
        if ($queryValidator->fails())
        {
            $msg = 'パラメータクエリがおかしいようです';
        }
        else
        {
            $msg = 'ご入力ください!!';
        }
        
        return view('validation', compact('msg'));
        
    }
/*     public function post(Request $request){
    // １、Controllerにかく
            $validation = [
            'name' => 'required',
            'mail' => 'email' ,
            'age' => 'numeric|between:30,40'
        ];
        $request->validate($validation); 
        //$this->validate($request,$validation);
        $msg = 'ご利用ありがとうございました';
        return view('validation', compact('msg'));
    } */
   /*  public function post(validationRequest $request){
        // ２、〇〇Request.phpを使う
        $msg = 'ご利用ありがとうございました';
        return view('validation', compact('msg'));
    } */
    public function post(Request $request){
        // ３、Validator::makeを使う
        $rules = [
            'name' => 'required',
            'mail' => 'email' ,
            'age' => 'numeric|between:30,40'
        ];
        $messages =[
            'name.required' => '名前はちゃんと書こう。テストだったら０点ですよ。',
            'mail.email' => 'メールアドレスまちがってまっせあんちゃんorねぇちゃん',
            'age.numeric' => '英二じゃねぇよageだよ（イミフ）',
            'age.between' => '年齢がちがうっぽい　つ🍎',
        ];
        $validator = Validator::make($request->all(),$rules, $messages);

        if ($validator->fails())
        {
            return redirect('/validation')
            ->withErrors($validator)
            ->withInput();
        }

        $msg = 'ご利用ありがとうございました';
        
        return view('validation', compact('msg'));
    }
}
