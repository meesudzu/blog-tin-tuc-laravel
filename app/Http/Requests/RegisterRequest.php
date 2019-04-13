<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:191', 'unique:users,email'],
            'password' => ['required', 'string', 'min:6', 'max:32', 'confirmed'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => __('app.email_required'),
            'email.string' => __('app.email_string'),
            'email.email' => __('app.email_email'),
            'email.max' => __('app.email_max'),
            'email.unique' => __('app.email_unique'),
            'password.required' => __('app.password_required'),
            'password.string' => __('app.password_string'),
            'password.min' => __('app.password_min'),
            'password.confirmed' => __('app.password_confirmed'),
            'name.string' => __('app.name_string'),
        ];
    }
}
