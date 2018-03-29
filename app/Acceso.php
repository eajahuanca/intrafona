<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use File;
use Storage;

class Acceso extends Model
{
    protected $table = 'accesos';
    protected $fillable = [
        'id',
        'acc_logo',
        'acc_nombre',
        'acc_enlace',
        'acc_descripcion',
        'acc_estado',
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

    public function setAccLogoAttribute($archivo){
        if($archivo){
            $nuevoNombre = Carbon::now()->year.Carbon::now()->month.Carbon::now()->day
            . "-" .
            Carbon::now()->hour.Carbon::now()->minute.Carbon::now()->second.".".
            $archivo->getClientOriginalExtension();
            $this->attributes['acc_logo'] = 'archivo/acceso/'.$nuevoNombre;
            $storage = Storage::disk('acceso')->put($nuevoNombre, \File::get($archivo));
        }
    }
}
