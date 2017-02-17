<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
// use Illuminate\support\Mail;    // default mail class
// use ProfileForm;    // model
// use App\User;       // model
// use App\Mail\Welcomemail;   // model

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

    public function persist ()

    {
      // create and save ProfileRegistrationForm information to DB
      // $ProfileRegistrationForm = Profile::create (
      //$this->only(['first_name', 'last_name' ,'phone', 'mobile','location'])
      //       );
      //  Mail::to($user)->send(new Welcomemail($user));

    }
}
