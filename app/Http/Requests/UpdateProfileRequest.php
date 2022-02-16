<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => [
                'required', 'string', 'max:255'
            ],
            'username' => [
                'required', 'string', 'max:255',
                Rule::unique('users', 'username')->ignore(Auth::user()->id)
            ],
            'email' => [
                'required', 'email', 'max:255',
                Rule::unique('users', 'email')->ignore(Auth::user()->id)
            ],
            'no_ktp' => [
               'required'
            ],

        ];
    }
}
