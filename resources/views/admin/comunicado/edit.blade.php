@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Comunicados - Editar</div>
                <div class="panel-body">
                    {!! Form::model($comunicado, ['route' => ['comunicado.update', $comunicado->id], 'method' => 'PUT', 'files' => true]) !!}
                    <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
                    <a href="{{ route('comunicado.index') }}" class="btn btn-danger btn-sm">Cancelar</a><br/><br/>
                    @include('admin.comunicado.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection