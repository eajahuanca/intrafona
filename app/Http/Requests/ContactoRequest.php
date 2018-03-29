<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'con_direccion' => 'required|max:100',
            'con_telefono' => 'required',
            'con_correo' => 'required|email'
        ];
    }

    public function attributes(){
        return [
            'con_direccion' => 'Dirección',
            'con_telefono' => 'Teléfono',
            'con_correo' => 'Correo Electrónico',
            'con_latitud' => 'Latitud',
            'con_longitud' => 'Longitud',
            'con_estado' => 'Estado'
        ];
    }
}
