@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Contactos</div>
                @include('flash::message')
                <div class="panel-body">
                    <a href="{{ route('contacto.create') }}" class="btn btn-primary btn-sm">Nuevo Contacto</a><br><br>
                    <table class="table table-bordered table-responsive">
                        <tr class="btn-primary">
                            <th>Dirección</th>
                            <th>Teléfono</th>
                            <th>Correo Electrónico</th>
                            <th>Estado</th>
                            <th>Fecha de Registro</th>
                            <th>Fecha de Actualización</th>
                            <th></th>
                        </tr>
                        @foreach($contacto as $item)    
                        <tr>
                            <td>{!! $item->con_direccion !!}</td>
                            <td>{{ $item->con_telefono }}px</td>
                            <td>{{ $item->con_correo }}px</td>
                            <td>
                                @if($item->con_estado)
                                <button class="btn btn-success btn-sm">Activo</button>
                                @else
                                <button class="btn btn-danger btn-sm">Inactivo</button>
                                @endif
                            </td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                            <td><a href="{{ route('contacto.edit', $item->id)}}" class="btn btn-warning btn-sm">Editar</a></td>
                        </tr>
                        @endforeach
                    </table>
                    {{ $contacto->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection