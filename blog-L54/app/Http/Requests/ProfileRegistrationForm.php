<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRegistrationForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false; // default
        return true; // only can be make
                     //  after login credentials has been created.
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'first_name' => 'required',
            // 'last_name' => 'required',
            // 'phone' => '',
            // 'mobile' => '',
            // 'location' => 'required',
        ];
    }
}
