<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlagaAddPlantaRequest extends FormRequest
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
        // TODO: validate planta_id exists
        return [
            'planta' => 'required', //id de la planta a relacionar
            'descripcio' => 'nullable',
        ];
    }
}
