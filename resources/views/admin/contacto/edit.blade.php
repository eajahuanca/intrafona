@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Contactos - Editar</div>
                <div class="panel-body">
                    {!! Form::model($contacto, ['route' => ['contacto.update', $contacto->id], 'method' => 'PUT']) !!}
                    <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
                    <a href="{{ route('contacto.index') }}" class="btn btn-danger btn-sm">Cancelar</a><br/><br/>
                    @include('admin.contacto.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection