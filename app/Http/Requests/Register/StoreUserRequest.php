<?php

namespace App\Http\Requests\Register;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|string|email|max:255|unique:users',
            'phone'      => 'required',
            'password'   => 'required|string|min:6|confirmed',
        ];
    }

    public function messages()
    {
        return [ 
            'first_name.required' => 'Imię jest wymagane.',
            'first_name.sring'    => 'Imię musi mieć poprawny format.',
            'first_name.max'      => 'Imię może mieć maksymalnie 255znaków.',
            'last_name.required'  => 'Nazwisko jest wymagane.',
            'last_name.string  '  => 'Nazwisko musi mieć poprawny format.',
            'last_name.max'       => 'Nazwisko może mieć maksymalnie 255znaków.',
            'email.required'      => 'Email jest wymagany.',
            'email.string'        => 'Email musi mieć poprawny format.',
            'email.email'         => 'Email musi mieć poprawny format.',
            'email.max'           => 'Email może mieć maksymalnie 255znaków.',
            'phone.required'      => 'Telefon jest wymagany.',
            'password.required'   => 'Hasło jest wymagane.',
            'password.string'     => 'Hasło musi mieć poprawny format.',
            'password.min'        => 'Hasło musi mieć min. 6 znaków.',
            'password.confirmed'  => 'Oba hasła muszą być taie same.',
        ];
    }
}
