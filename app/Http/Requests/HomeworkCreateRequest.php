<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeworkCreateRequest extends FormRequest
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
            'limit_at' => 'required',
            'subject_id' => 'required',
            'body' => 'required'
        ];
    }

    //バリデーション項目名定義一部
    public function attributes()
    {
        return ['subject_id' => '科目'];
    }
}
