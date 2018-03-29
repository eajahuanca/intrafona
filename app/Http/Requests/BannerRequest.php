<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ban_nombre' => 'mimes:png,jpeg,jpg',
            'ban_descripcion' => 'required',
        ];
    }

    public function attributes(){
        return [
            'ban_nombre' => 'Imagen (Banner)',
            'ban_descripcion' => 'Descricpion',
            'ban_estado' => 'Estado'
        ];
    }
}
