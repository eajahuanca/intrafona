<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\AccesoRequest;
use App\Acceso;

class AccesoController extends Controller
{
    public function __construct(){
        Carbon::setLocale('es');
    }

    public function index(){
        $acceso = Acceso::orderBy('created_at','DESC')->paginate(10);
        return view('admin.acceso.index', compact('acceso'));
    }

    public function create(){
        return view('admin.acceso.create');
    }

    public function store(AccesoRequest $request){
        try{
            $acceso = new Acceso($request->all());
            $acceso->idusuarioregistra = Auth::user()->id;
            $acceso->idusuariomodifica = Auth::user()->id;
            $acceso->save();
            flash('Se registro de manera correcta el link de acceso')->success();
        }catch(\Exception $ex){
            flash('Ocurrio el siguiente Error: '.$ex->getMessage())->error();
        }
        return redirect()->route('acceso.index');
    }

    public function edit($id){
        try{
            $acceso = Acceso::find($id);
            flash('Usted realizara un cambio a la información registrada')->warning();
            return view('admin.acceso.edit', compact('acceso'));
        }catch(\Exception $ex){
            flash('Ocurrio el siguiente Error'.$ex->getMessage())->error();
            return redirect()->route('acceso.index');
        }
    }

    public function update(AccesoRequest $request, $id){
        try{
            $acceso = Acceso::find($id);
            $acceso->fill($request->all());
            $acceso->idusuariomodifica = Auth::user()->id;
            $acceso->update();
            flash('Los datos del acceso se actualizaron de manera correcta')->success();
        }catch(\Exception $ex){
            flash('Ocurrio el siguiente Error'.$ex->getMessage())->error();
        }
        return redirect()->route('acceso.index');
    }
}
