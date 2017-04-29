<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CultiuRequest extends FormRequest
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
            'parcela_id' => 'required',
            'planta_id' => 'required',
            'data_ini' => 'required',
            'data_fi' => 'required',
            'descripcio' => 'nullable',

        ];
    }
}
