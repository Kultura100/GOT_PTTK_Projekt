<?php

namespace App\Http\Requests\Wycieczki;

use Illuminate\Foundation\Http\FormRequest;

class WycieczkiRequest extends FormRequest
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
            'id_turysty' => 'required',
            'dataod' => 'required','date','before:datado',
            'datado' => 'required','date','after:dataod',            
            'punkty' => 'required'
        ];
    }
}