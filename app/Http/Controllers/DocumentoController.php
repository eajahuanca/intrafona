<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\DocumentoRequest;
use App\Documento;
use App\Tipodocumento;

class DocumentoController extends Controller
{
    public function __construct(){
        Carbon::setLocale('es');
    }

    public function index(){
        $documento = Documento::orderBy('created_at','DESC')->paginate(10);
        return view('admin.documento.index', compact('documento'));
    }

    public function create(){
        $tipos = Tipodocumento::where('tip_estado','=', 1)->pluck('tip_descripcion', 'id');
        return view('admin.documento.create', compact('tipos'));
    }

    public function store(DocumentoRequest $request){
        try{
            $documento = new Documento($request->all());
            $documento->idusuarioregistra = Auth::user()->id;
            $documento->idusuariomodifica = Auth::user()->id;
            $documento->save();
            flash('Se registro de manera correcta el Documento')->success();
        }catch(\Exception $ex){
            flash('Ocurrio el siguiente Error: '.$ex->getMessage())->error();
        }
        return redirect()->route('documento.index');
    }

    public function edit($id){
        try{
            $documento = Documento::find($id);
            $tipos = Tipodocumento::where('tip_estado','=', 1)->pluck('tip_descripcion', 'id');
            flash('Usted realizara un cambio a la información registrada')->warning();
            return view('admin.documento.edit', compact('documento','tipos'));
        }catch(\Exception $ex){
            flash('Ocurrio el siguiente Error'.$ex->getMessage())->error();
            return redirect()->route('documento.index');
        }
    }

    public function update(DocumentoRequest $request, $id){
        try{
            $documento = Documento::find($id);
            $documento->fill($request->all());
            $documento->idusuariomodifica = Auth::user()->id;
            $documento->update();
            flash('Los datos del Documento se actualizaron de manera correcta')->success();
        }catch(\Exception $ex){
            flash('Ocurrio el siguiente Error'.$ex->getMessage())->error();
        }
        return redirect()->route('documento.index');
    }
}
