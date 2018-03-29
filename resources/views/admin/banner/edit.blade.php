@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Banners - Editar</div>
                <div class="panel-body">
                    {!! Form::model($banner, ['route' => ['banner.update', $banner->id], 'method' => 'PUT', 'files' => true]) !!}
                    <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
                    <a href="{{ route('banner.index') }}" class="btn btn-danger btn-sm">Cancelar</a><br/><br/>
                    @include('admin.banner.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection