<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComunicadoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'com_archivo' => 'mimes:png,jpeg,jpg',
            'com_width' => 'required|numeric',
            'com_height' => 'required|numeric',
        ];
    }

    public function attributes(){
        return [
            'com_archivo' => 'Archivo (Imagen)',
            'com_width' => 'Ancho del Archivo',
            'com_height' => 'Alto del Archivo',
            'com_estado' => 'Estado'
        ];
    }
}
