<?php

namespace CualDocs\Http\Requests;

use CualDocs\Http\Requests\Request;

class UserCreateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; /*Por defecto es false, pero debemos autorizarlo seteandolo en true*/
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            /*Aqui se valida*/
            /*Por el momento que solo sean requeridos*/
            'name'  => 'required',
            'email' => 'required|unique:users',
            'password' => 'required'
        ];
    }
}
