<?php

namespace App\Http\Requests;

use App\Rules\RecaptchaRule;
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
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'contact' => 'required',
            'inquiry_type' => 'required',
            'message' => 'required',
            //'g-recaptcha-response' => ['required', new RecaptchaRule]
        ];
    }
}
