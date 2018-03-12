<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vision extends Model
{
    protected $table = 'visiones';
    protected $fillable = [
        'id',
        'vis_descripcion',
        'vis_estado',
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
