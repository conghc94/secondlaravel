<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'ctl00$ContentPlaceHolder1$Phone'=>'required|integer|max:13',
            'ctl00$ContentPlaceHolder1$Address'=>'required',
            'ctl00$ContentPlaceHolder1$CurrentPassword'=>'required',
        ];
    }
}
