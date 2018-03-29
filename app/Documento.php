<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use File;
use Storage;

class Documento extends Model
{
    protected $table = 'documentos';
    protected $fillable = [
        'id',
        'doc_nombre',
        'doc_nombreoriginal',
        'doc_tamanio',
        'doc_tipo',
        'doc_descripcion',
        'doc_estado',
        'idtipodocumento',
        'idusuarioregistra',
        'idusuariomodifica',
        'created_at',
        'updated_at'
    ];

    public function tipodocumentos(){
        return $this->belongsTo('App\Tipodocumento','idtipodocumento','id');
    }

    public function userRegistra(){
        return $this->belongsTo('App\User','idusuarioregistra','id');
    }

    public function userModifica(){
        return $this->belongsTo('App\User','idusuariomodifica','id');
    }

    public function setDocNombreAttribute($archivo){
        if($archivo){
            $nuevoNombre = Carbon::now()->year.Carbon::now()->month.Carbon::now()->day
            . "-" .
            Carbon::now()->hour.Carbon::now()->minute.Carbon::now()->second.".".
            $archivo->getClientOriginalExtension();
            $this->attributes['doc_nombre'] = 'archivo/documento/'.$nuevoNombre;
            $storage = Storage::disk('documento')->put($nuevoNombre, \File::get($archivo));
            $this->attributes['doc_nombreoriginal'] = $archivo->getClientOriginalName();
            $this->attributes['doc_tamanio'] = $archivo->getClientSize();
            $this->attributes['doc_tipo'] = $archivo->getClientOriginalExtension();
        }
    }    
}
