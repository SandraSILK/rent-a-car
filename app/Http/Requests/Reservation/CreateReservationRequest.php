<?php

namespace App\Http\Requests\Reservation;

use Illuminate\Foundation\Http\FormRequest;

class CreateReservationRequest extends FormRequest
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
            'name'      => 'required',
            'last_name' => 'required',
            'address'   => 'required',
            'email'     => 'required|email',
            'telephone' => 'required',
            'car'       => 'required',
            'date_to'   => 'required|date',
            'date_from' => 'required|date',
            'price'     => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'      => 'Imię jest polem wymaganym.',
            'last_name.required' => 'Nazwisko jest polem wymaganym.',
            'address.required'   => 'Adres jest polem wymaganym.',
            'email.required'     => 'Email jest polem wymaganym.',
            'email.email'        => 'Email musi mieć odpowiedni format.',
            'telephone.required' => 'Telefon jest polem wymaganym.',
            'car.required'       => 'Samochód jest polem wymaganym.',
            'date_to.required'   => 'Data od jest polem wymaganym.',
            'date_from.required' => 'Data do jest polem wymaganym.',
            'price.required'     => 'Cena jest polem wymaganym.',
        ];
    }
}
