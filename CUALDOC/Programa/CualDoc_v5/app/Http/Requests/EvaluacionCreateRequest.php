<?php

namespace CualDocs\Http\Requests;

use CualDocs\Http\Requests\Request;

class EvaluacionCreateRequest extends Request
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
            'calidad_atencion'   => 'required',
            'lugar_atencion'     => 'required',
            'tiempo_espera'      => 'required',
            'costo'              => 'required',
            'evaluacion_general' => 'required',
            'id_usuario'         => 'required',
            'id_medico'          => 'required'
        ];
    }
}
