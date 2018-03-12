<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table = 'contactos';
    protected $fillable = [
        'id',
        'con_direccion',
        'con_telefono',
        'con_correo',
        'con_latitud',
        'con_longitud',
        'con_estado',
        'idusuarioregistra',
        'idusuariomodifica',
        'created_at',
        'updated_at'
    ];

    public function userRegistra(){
        return $this->belongsTo('App\User','idusuarioregistra','id');
    }

    public function userModifica(){
        return $this->belongsTo('App\User','idusuariomodifica','id');
    }
}
