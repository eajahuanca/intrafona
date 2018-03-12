<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mision extends Model
{
    protected $table = 'misiones';
    protected $fillable = [
        'id',
        'mis_descripcion',
        'mis_estado',
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
