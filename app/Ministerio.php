<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use File;
use Storage;

class Ministerio extends Model
{
    protected $table = 'ministerios';
    protected $fillable = [
        'id',
        'min_logo',
        'min_nombre',
        'min_enlace',
        'min_descripcion',
        'min_estado',
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

    public function setAccLogoAttribute($archivo){
        if($archivo){
            $nuevoNombre = Carbon::now()->year.Carbon::now()->month.Carbon::now()->day
            . "-" .
            Carbon::now()->hour.Carbon::now()->minute.Carbon::now()->second.".".
            $archivo->getClientOriginalExtension();
            $this->attributes['min_logo'] = 'archivo/ministerio/'.$nuevoNombre;
            $storage = Storage::disk('ministerio')->put($nuevoNombre, \File::get($archivo));
        }
    }
}
