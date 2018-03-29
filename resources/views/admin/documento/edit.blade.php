@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Documentos - Editar</div>
                <div class="panel-body">
                    {!! Form::model($documento, ['route' => ['documento.update', $documento->id], 'method' => 'PUT', 'files' => true]) !!}
                    <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
                    <a href="{{ route('documento.index') }}" class="btn btn-danger btn-sm">Cancelar</a><br/><br/>
                    @include('admin.documento.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection