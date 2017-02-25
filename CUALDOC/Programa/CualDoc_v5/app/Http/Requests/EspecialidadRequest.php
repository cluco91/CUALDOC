<?php

namespace CualDocs\Http\Requests;

use CualDocs\Http\Requests\Request;

class EspecialidadRequest extends Request
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
            'especialidad'=>'required|min:3' /*Requerido y que minimo tenga 3 caracteres*/
        ];
    }
}
