@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Comunicados</div>
                @include('flash::message')
                <div class="panel-body">
                    <a href="{{ route('comunicado.create') }}" class="btn btn-primary btn-sm">Nuevo Comunicado</a><br><br>
                    <table class="table table-bordered table-responsive">
                        <tr class="btn-primary">
                            <th>Archivo/Comunicado</th>
                            <th>Ancho</th>
                            <th>Alto</th>
                            <th>Estado</th>
                            <th>Fecha de Registro</th>
                            <th>Fecha de Actualización</th>
                            <th></th>
                        </tr>
                        @foreach($comunicado as $item)    
                        <tr>
                            <td><img src="{{ $item->com_archivo }}" width="150px" height="100px"/></td>
                            <td>{{ $item->com_width }}px</td>
                            <td>{{ $item->com_height }}px</td>
                            <td>
                                @if($item->com_estado)
                                <button class="btn btn-success btn-sm">Activo</button>
                                @else
                                <button class="btn btn-danger btn-sm">Inactivo</button>
                                @endif
                            </td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                            <td><a href="{{ route('comunicado.edit', $item->id)}}" class="btn btn-warning btn-sm">Editar</a></td>
                        </tr>
                        @endforeach
                    </table>
                    {{ $comunicado->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection