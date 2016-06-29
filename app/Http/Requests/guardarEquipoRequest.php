<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class guardarEquipoRequest extends Request
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
            'nom_equ' => 'required',
            'mod_equ' => 'required',
            'mar_equ' => 'required',
            'so_equ' => 'required',
            'ip_equ' => 'ip|required',
            'area' => 'required',            
            'se_equ' => 'required',
            'cs_equ' => 'required',
        ];
    }
}
