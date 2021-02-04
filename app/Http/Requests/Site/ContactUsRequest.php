<?php

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest
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
            "name" => ['required', 'min:3', 'max:40'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'min:3', 'max:200'],
            'msg' => ['required', 'min:3', 'max:3000']
        ];
    }
}
