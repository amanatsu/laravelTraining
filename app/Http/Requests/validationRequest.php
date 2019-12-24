<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'validation')
        {
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //ここにvalidationを追加する
                'name' => 'required',
                'mail' => 'email' ,
                'age' => 'numeric|between:30,40'
            ];
    }

    public function messages()
    {
        //カスタムメッセージいれるとこ
        //該当しないと英語メッセージになるのです。
        return [
            'name.required' => '名前はちゃんと書こう。テストだったら０点ですよ。',
            'mail.email' => 'メールアドレスまちがってまっせあんちゃんorねぇちゃん',
            'age.numeric' => '英二じゃねぇよageだよ（イミフ）',
            'age.between' => '年齢がちがうっぽい　つ🍎',
        ];
    }
}
