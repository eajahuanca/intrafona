<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\ComunicadoRequest;
use App\Comunicado;

class ComunicadoController extends Controller
{
    public function __construct(){
        Carbon::setLocale('es');
    }

    public function index(){
        $comunicado = Comunicado::orderBy('created_at','DESC')->paginate(10);
        return view('admin.comunicado.index', compact('comunicado'));
    }

    public function create(){
        return view('admin.comunicado.create');
    }

    public function store(ComunicadoRequest $request){
        try{
            $comunicado = new Comunicado($request->all());
            $comunicado->save();
            flash('Se registro de manera correcta el comunicado')->success();
        }catch(\Exception $ex){
            flash('Ocurrio el siguiente Error: '.$ex->getMessage())->error();
        }
        return redirect()->route('comunicado.index');
    }

    public function edit($id){
        try{
            $comunicado = Comunicado::find($id);
            flash('Usted realizara un cambio a la información registrada')->warning();
            return view('admin.comunicado.edit', compact('comunicado'));
        }catch(\Exception $ex){
            flash('Ocurrio el siguiente Error'.$ex->getMessage())->error();
            return redirect()->route('comunicado.index');
        }
    }

    public function update(ComunicadoRequest $request, $id){
        try{
            $comunicado = Comunicado::find($id);
            $comunicado->fill($request->all());
            $comunicado->update();
            flash('Los datos del Comunicado se actualizaron de manera correcta')->success();
        }catch(\Exception $ex){
            flash('Ocurrio el siguiente Error'.$ex->getMessage())->error();
        }
        return redirect()->route('comunicado.index');
    }
}
