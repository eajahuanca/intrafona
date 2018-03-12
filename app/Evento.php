<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use File;
use Storage;

class Evento extends Model
{
    protected $table = 'eventos';
    protected $fillable = [
        'id',
        'eve_logo',
        'eve_logonombre',
        'eve_nombre',
        'eve_descripcion',
        'eve_lugar',
        'eve_fechaini',
        'eve_fechafin',
        'eve_horaini',
        'eve_horafin',
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

    public function setEveLogoAttribute($archivo){
        if($archivo){
            $nuevoNombre = Carbon::now()->year.Carbon::now()->month.Carbon::now()->day
            . "-" .
            Carbon::now()->hour.Carbon::now()->minute.Carbon::now()->second.".".
            $archivo->getClientOriginalExtension();
            $this->attributes['eve_logo'] = 'archivo/evento/'.$nuevoNombre;
            $storage = Storage::disk('evento')->put($nuevoNombre, \File::get($archivo));
            $this->attributes['eve_logonombre'] = $archivo->getClientOriginalName();
        }
    }
}
