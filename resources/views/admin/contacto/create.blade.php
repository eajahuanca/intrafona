@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Contactos - Crear</div>
                <div class="panel-body">
                    {!! Form::open(['route' => 'contacto.store', 'method' => 'POST']) !!}
                    <button type="submit" class="btn btn-success btn-sm">Registrar</button>
                    <a href="{{ route('contacto.index') }}" class="btn btn-danger btn-sm">Cancelar</a><br/><br/>
                    @include('admin.contacto.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection