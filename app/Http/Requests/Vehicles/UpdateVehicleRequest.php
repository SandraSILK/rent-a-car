<?php

namespace App\Http\Requests\Vehicles;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVehicleRequest extends FormRequest
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
            'brand'   => 'required',
            'model'   => 'required',
            'year'    => 'required',
            'mileage' => 'required',
            'price'   => 'required',
            'colour'  => 'required',
        ];
    }

    public function messages()
    {
        return [
            'brand.required'   => 'Podanie marki jest wymagane.',
            'model.required'   => 'Podanie modelu jest wymagane.',
            'year.required'    => 'Podanie rocznika jest wymagane.',
            'mileage.required' => 'Podanie przebiegu jest wymagane.',
            'price.required'   => 'Podanie ceny jest wymagane.',
            'colour.required'  => 'Podanie koloru jest wymagane.',
        ];
    }
}
