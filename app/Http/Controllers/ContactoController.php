<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\ContactoRequest;
use App\Contacto;

class ContactoController extends Controller
{
    public function __construct(){
        Carbon::setLocale('es');
    }

    public function index(){
        $contacto = Contacto::orderBy('created_at','DESC')->paginate(10);
        return view('admin.contacto.index', compact('contacto'));
    }

    public function create(){
        return view('admin.contacto.create');
    }

    public function store(ContactoRequest $request){
        try{
            $contacto = new Contacto($request->all());
            $contacto->idusuarioregistra = Auth::user()->id;
            $contacto->idusuariomodifica = Auth::user()->id;
            $contacto->con_latitud = 0;
            $contacto->con_longitud = 0;
            $contacto->save();
            flash('Se registro de manera correcta el Contacto')->success();
        }catch(\Exception $ex){
            flash('Ocurrio el siguiente Error: '.$ex->getMessage())->error();
        }
        return redirect()->route('contacto.index');
    }

    public function edit($id){
        try{
            $contacto = Contacto::find($id);
            flash('Usted realizara un cambio a la información registrada')->warning();
            return view('admin.contacto.edit', compact('contacto'));
        }catch(\Exception $ex){
            flash('Ocurrio el siguiente Error'.$ex->getMessage())->error();
            return redirect()->route('contacto.index');
        }
    }

    public function update(ContactoRequest $request, $id){
        try{
            $contacto = Contacto::find($id);
            $contacto->fill($request->all());
            $contacto->idusuariomodifica = Auth::user()->id;
            $contacto->update();
            flash('Los datos del Contacto se actualizaron de manera correcta')->success();
        }catch(\Exception $ex){
            flash('Ocurrio el siguiente Error'.$ex->getMessage())->error();
        }
        return redirect()->route('contacto.index');
    }
}
