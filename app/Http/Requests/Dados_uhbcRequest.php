<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Dados_uhbcRequest extends Request
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
            'data_bc' => 'required',
            'hora_bc' => 'required',
            'nivel_montante_bc' => 'required', 
            'nivel_jusante_bc'=> 'required', 
            'geracao_ug1_bc' => 'required', 
            'geracao_ug2_bc'=> 'required', 
            'estadoug1_bc' => 'required', 
            'estadoug2_bc' => 'required'
        ];
    }
}
