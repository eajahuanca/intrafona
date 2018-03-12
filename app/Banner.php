<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use File;
use Storage;

class Banner extends Model
{
    protected $table = 'banners';
    protected $fillable = [
        'id',
        'ban_nombre',
        'ban_nombreoriginal',
        'ban_descripcion',
        'ban_estado',
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

    public function setBanNombreAttribute($archivo){
        if($archivo){
            $nuevoNombre = Carbon::now()->year.Carbon::now()->month.Carbon::now()->day
            . "-" .
            Carbon::now()->hour.Carbon::now()->minute.Carbon::now()->second.".".
            $archivo->getClientOriginalExtension();
            $this->attributes['ban_nombre'] = 'archivo/banner/'.$nuevoNombre;
            $storage = Storage::disk('banner')->put($nuevoNombre, \File::get($archivo));
            $this->attributes['ban_nombreoriginal'] = $archivo->getClientOriginalName();
        }
    }
}
