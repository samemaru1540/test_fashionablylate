<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string',],
            'email' => ['required', 'string', 'email', 'max:255'],
            'tel' => ['required', 'numeric', 'digits_between:3,4'],
            'address' => ['required', 'string', 'max:255'],
            'tet' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'inquiry' => ['required', 'string'],
            'detail' => ['required', 'string', 'max:255'],
        ];
    }

        public function messages()
        {
            return [
                'first_name.required' => '姓を入力してください',
                'last_name.required' => '名を入力してください',
                'gender.required' => '性別を入力してください',
                'email.required' => 'メールアドレスを入力してください',
                'email.email' => 'メールアドレスはメール形式で入力してください',
                'tel.required' => '電話番号を入力してください',
                'tel.numeric' => '電話番号は5桁までの数字で入力してください',
                'address.required' => '住所を入力してください',
                'inquiry.required' => 'お問合わせの種類を入力してください',
                'detail.required' => 'お問い合わせ内容を入力してください',
                'detail.max' => 'お問い合わせ内容は120文字以内で入力してください',
            ];
        }
}
