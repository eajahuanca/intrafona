<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccesoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'acc_logo' => 'mimes:png,jpeg,jpg',
            'acc_nombre' => 'required|max:190',
            'acc_enlace' => 'required|max:190',
            'acc_descripcion' => 'required',
        ];
    }

    public function attributes(){
        return [
            'acc_logo' => 'Logo',
            'acc_nombre' => 'Nombre del Acceso Directo',
            'acc_enlace' => 'Enlace',
            'acc_descripcion' => 'Descricpion',
            'acc_estado' => 'Estado'
        ];
    }
}
