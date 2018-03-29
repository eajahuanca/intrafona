<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\BannerRequest;
use App\Banner;

class BannerController extends Controller
{
    public function __construct(){
        Carbon::setLocale('es');
    }

    public function index(){
        $banner = Banner::orderBy('created_at','DESC')->paginate(10);
        return view('admin.banner.index', compact('banner'));
    }

    public function create(){
        return view('admin.banner.create');
    }

    public function store(BannerRequest $request){
        try{
            $banner = new Banner($request->all());
            $banner->idusuarioregistra = Auth::user()->id;
            $banner->idusuariomodifica = Auth::user()->id;
            $banner->save();
            flash('Se registro de manera correcta el Banner')->success();
        }catch(\Exception $ex){
            flash('Ocurrio el siguiente Error: '.$ex->getMessage())->error();
        }
        return redirect()->route('banner.index');
    }

    public function edit($id){
        try{
            $banner = Banner::find($id);
            flash('Usted realizara un cambio a la información registrada')->warning();
            return view('admin.banner.edit', compact('banner'));
        }catch(\Exception $ex){
            flash('Ocurrio el siguiente Error'.$ex->getMessage())->error();
            return redirect()->route('banner.index');
        }
    }

    public function update(BannerRequest $request, $id){
        try{
            $banner = Banner::find($id);
            $banner->fill($request->all());
            $banner->idusuariomodifica = Auth::user()->id;
            $banner->update();
            flash('Los datos del Banner se actualizaron de manera correcta')->success();
        }catch(\Exception $ex){
            flash('Ocurrio el siguiente Error'.$ex->getMessage())->error();
        }
        return redirect()->route('banner.index');
    }
}
