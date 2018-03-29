<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use File;
use Storage;

class Comunicado extends Model
{
    protected $table = 'comunicados';
    protected  $fillable = [
        'id',
        'com_archivo',
        'com_width',
        'com_height',
        'com_estado',
        'created_at',
        'updated_at'
    ];

    public function setComArchivoAttribute($archivo){
        if($archivo){
            $nuevoNombre = Carbon::now()->year.Carbon::now()->month.Carbon::now()->day
                . "-" .
                Carbon::now()->hour.Carbon::now()->minute.Carbon::now()->second.".".
                $archivo->getClientOriginalExtension();
            $this->attributes['com_archivo'] = 'archivo/comunicados/'.$nuevoNombre;
            $storage = Storage::disk('comunicados')->put($nuevoNombre, \File::get($archivo));
        }
    }
}
