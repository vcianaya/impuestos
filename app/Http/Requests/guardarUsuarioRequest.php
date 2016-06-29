<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class guardarUsuarioRequest extends Request
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
            'ci_usu' => 'required|numeric',
            'nom_usu' => 'required',
            'app_usu' => 'required',
            'apm_usu' => 'required',
            'area' => 'required',
            'equipo' => 'required',
            'cel_usu' => 'numeric',
            'email' => 'required|email',


        ];
    
        
    }
}
