<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'doc_nombre' => 'mimes:pdf,xlsx,xls',
            'doc_descripcion' => 'required',
            'idtipodocumento' => 'required'
        ];
    }

    public function attributes(){
        return [
            'doc_nombre' => 'Documento',
            'doc_descripcion' => 'Descripción',
            'doc_estado' => 'Estado',
            'idtipodocumento' => 'Tipo de Documento'
        ];
    }
}
