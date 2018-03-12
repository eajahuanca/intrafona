<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Acceso;
use App\Banner;
use App\Contacto;
use App\Documento;
use App\Evento;
use App\Ministerio;
use App\Mision;
use App\Objetivo;
use App\User;
use App\Vision;
use Carbon\Carbon;

class IntranetController extends Controller
{
    public function __construct(){
        Carbon::setLocale('es');
    }

    public function index(){
        try{
            $banner = Banner::where('ban_estado','=',1)->orderBy('created_at', 'DESC')->get();
            $acceso = Acceso::where('acc_estado','=',1)->orderBy('created_at', 'DESC')->get();
            $mision = Mision::where('mis_estado','=',1)->orderBy('created_at', 'DESC')->first();
            $vision = Vision::where('vis_estado','=',1)->orderBy('created_at', 'DESC')->first();
            $objetivo = Objetivo::where('obj_estado','=',1)->orderBy('created_at', 'DESC')->first();
            $documento = Documento::where('idtipodocumento','<>',1)->where('doc_estado','=',1)->orderBy('created_at','DESC')->get();
            $formulario = Documento::where('idtipodocumento','=',1)->where('doc_estado','=',1)->orderBy('created_at','DESC')->get();
            $superiores = User::where('us_estado','=',1)->where('us_jefes','<>','NORMAL')->get();
            $contacto = Contacto::where('con_estado','=',1)->orderBy('created_at','DESC')->first();
            $ministerio = Ministerio::where('min_estado','=',1)->orderBy('created_at','DESC')->get();
            $happy = 0;
            return view('intranet', compact('banner','acceso','mision','vision','objetivo','documento','formulario','superiores','contacto','ministerio','happy'));

        }catch(\Exception $ex){
            dd('póngase en contacto con el administrador del sistema');
        }
    }
}
