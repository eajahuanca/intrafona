@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Banners - Crear</div>
                <div class="panel-body">
                    {!! Form::open(['route' => 'banner.store', 'method' => 'POST', 'files' => true]) !!}
                    <button type="submit" class="btn btn-success btn-sm">Registrar</button>
                    <a href="{{ route('banner.index') }}" class="btn btn-danger btn-sm">Cancelar</a><br/><br/>
                    @include('admin.banner.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection