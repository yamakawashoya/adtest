<?php

namespace App\Http\Requests;

use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'fullname' => 'required|max:255',
            'gender' => 'required|in:male,female,other',
            'email' => 'required|email|max:255',
            'postcode' => 'required|numeric',
            'address' => 'required|max:255',
            'building_name' => 'nullable|max:255',
            'opinion' => 'required|max:1000',
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => '名前は必須項目です。',
            'fullname.max' => '名前は255文字以内で入力してください。',
            'gender.required' => '性別は必須項目です。',
            'gender.in' => '性別は男性、女性、その他のいずれかを選択してください。',
            'email.required' => 'メールアドレスは必須項目です。',
            'email.email' => '正しいメールアドレスを入力してください。',
            'email.max' => 'メールアドレスは255文字以内で入力してください。',
            'postcode.required' => '郵便番号は必須項目です。',
            'postcode.numeric' => '郵便番号は数字で入力してください。',
            'address.required' => '住所は必須項目です。',
            'address.max' => '住所は255文字以内で入力してください。',
            'building_name.max' => '建物名は255文字以内で入力してください。',
            'opinion.required' => 'ご意見は必須項目です。',
            'opinion.max' => 'ご意見は1000文字以内で入力してください。',
        ];
    }
}