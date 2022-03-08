<?php

namespace App\Http\Requests\Klient;

use Illuminate\Foundation\Http\FormRequest;

class KlientRequest extends FormRequest
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
            'Imie' => 'required','string','max:255',
            'Nazwisko' => 'required','string','max:255',
            'Nazwa' => 'required','string','max:255',
            'Telefon' => 'required','integer',
            'Ulica' => 'required','string','max:255',
            'NumerDomu' => 'required','string','max:255',
            'NumerLokalu' => 'required','string','max:255',
            'KodPocztowy' => 'required','string','max:255',
            'Miejscowosc' => 'required','string','max:255',
            'Email' => 'required','email',
            'Haslo' => 'required','min:8',
             //Rule::unique('categories')->ignore($this->nazwa_kategorii)
        ];
    }
}
