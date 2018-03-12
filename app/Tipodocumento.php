<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipodocumento extends Model
{
    protected $table = 'tipodocumentos';
    protected $fillable = [
        'id',
        'tip_nombre',
        'tip_descripcion',
        'tip_estado',
        'created_at','updated_at'
    ];

    public function documentos(){
        return $this->hasMany('App\Documento');
    }
}
