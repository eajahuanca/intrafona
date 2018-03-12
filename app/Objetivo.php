<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objetivo extends Model
{
    protected $table = 'objetivos';
    protected $fillable = [
        'id',
        'obj_descripcion',
        'obj_estado',
        'idusuarioregistra',
        'idusuariomodifica',
        'created_at',
        'upated_at'
    ];
    public function userRegistra(){
        return $this->belongsTo('App\User','idusuarioregistra','id');
    }

    public function userModifica(){
        return $this->belongsTo('App\User','idusuariomodifica','id');
    }
}
