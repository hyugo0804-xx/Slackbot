<?php

namespace App\Http\Requests;

use App\Http\Controllers\InquiryController;
use Illuminate\Foundation\Http\FormRequest;

class InquiryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'     => 'required|email:rfc',
            'contact_detail'   => 'required|max:1024',
            'last_name' => 'required|max:20',
            'first_name' => 'required|max:20',
            'last_name_kana' => 'required|max:20',
            'first_name_kana' => 'required|max:20',
            'phone' => 'required | numeric | digits_between:8,11',
            // 'hoge1' => 
            // 'hoge2' =>
            // 'hoge3' => 
            
        ];
    }

     /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'required'  => ':attributeは必須です。',
            'max'       => ':attributeは最大:max文字で入力してください。',
            'rfc'       => '正しいメールアドレスを入力してください。',
        ];
    }

     /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'last_name'      => '苗字',
            'first_name'      => 'お名前',
            'last_name_kana'      => 'ふりがな',
            'first_name_kana'      => 'ふりがな',
            'phone'      => '電話番号',
            'email'     => 'メールアドレス',
            'contact_detail'   => 'メッセージ',
        ];
    }

}
