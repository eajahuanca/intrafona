<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;
use File;
use Storage;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';
    protected $fillable = [
        'us_nombre',
        'us_paterno',
        'us_materno',
        'us_nombrecompleto',
        'us_carnet',
        'us_expedido',
        'us_genero',
        'us_foto',
        'us_fechanacimiento',
        'us_direccion',
        'us_cargo',
        'us_jefes',
        'us_tipo',
        'us_cuenta',
        'us_estado',
        'us_obs',
        'email', 
        'password'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function documentos(){
        return $this->hasMany('App\Documento');
    }

    public function banners(){
        return $this->hasMany('App\Banner');
    }

    public function misiones(){
        return $this->hasMany('App\Mision');
    }

    public function visiones(){
        return $this->hasMany('App\Vision');
    }

    public function objetivos(){
        return $this->hasMany('App\Objetivo');
    }

    public function accesos(){
        return $this->hasMany('App\Acceso');
    }

    public function ministerios(){
        return $this->hasMany('App\Ministerio');
    }

    public function contactos(){
        return $this->hasMany('App\Contacto');
    }

    public function eventos(){
        return $this->hasMany('App\Evento');
    }

    public function setUsNombrecompletoAttribute(){
        $this->attributes['us_nombrecompleto'] = $this->attributes['us_nombre'].' '.$this->attributes['us_paterno'].' '.$this->attributes['us_materno'];
    }

    public function setUsFotoAttribute($archivo){
        if($archivo){
            $nuevoNombre = Carbon::now()->year.Carbon::now()->month.Carbon::now()->day
            . "-" .
            Carbon::now()->hour.Carbon::now()->minute.Carbon::now()->second.".".
            $archivo->getClientOriginalExtension();
            $this->attributes['us_foto'] = 'archivo/usuario/'.$nuevoNombre;
            $storage = Storage::disk('usuario')->put($nuevoNombre, \File::get($archivo));
        }
    }
}
