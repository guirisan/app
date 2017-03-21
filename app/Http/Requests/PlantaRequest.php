<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlantaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;    //TO-DO CHANGE
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nom' => 'required|',
            'nom_cientific' => 'nullable',
            'descripcio' => 'nullable',
            'sembra_ini' => 'nullable',
            'sembra_fi' => 'nullable',
            'sembra' => 'nullable',
            'cultiu' => 'nullable',
            'collita' => 'nullable',
            'user_id' => 'nullable',
            'grup_id' => 'nullable',
            'familia_id' => 'nullable',
        ];
    }
}
