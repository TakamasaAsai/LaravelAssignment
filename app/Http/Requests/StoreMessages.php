<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMessages extends FormRequest
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
            //
            'title' => 'string|max:200'
//            'title' => [
//        'required','string',
//        function ($attribute, $value, $fail) {
//            if (strlen($value) > 30) {
//                return $fail('30バイト以内で入力してください。');
//            }
//        }
//    ]
        ];
    }
}
