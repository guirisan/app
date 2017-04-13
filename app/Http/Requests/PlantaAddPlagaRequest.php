<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlantaAddPlagaRequest extends FormRequest
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
        // TODO: validate plaga_id exists
        return [
            'plaga' => 'required', //id de la plaga a relacionar
            'descripcio' => 'nullable',
        ];
    }
}
