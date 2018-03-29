@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Accesos Directos</div>
                @include('flash::message')
                <div class="panel-body">
                    <a href="{{ route('acceso.create') }}" class="btn btn-primary btn-sm">Nuevo Acceso Directo</a><br><br>
                    <table class="table table-bordered table-responsive">
                        <tr class="btn-primary">
                            <th>Logo</th>
                            <th>Nombre</th>
                            <th>Enlace</th>
                            <th>Descripción</th>
                            <th>Estado</th>
                            <th>Fecha de Registro</th>
                            <th>Fecha de Actualización</th>
                            <th></th>
                        </tr>
                        @foreach($acceso as $item)    
                        <tr>
                            <td><img src="{{ $item->acc_logo }}" width="60px" height="60px"/></td>
                            <td>{{ $item->acc_nombre }}</td>
                            <td>{!! $item->acc_enlace !!}</td>
                            <td>{!! $item->acc_descripcion !!}</td>
                            <td>
                                @if($item->acc_estado)
                                <button class="btn btn-success btn-sm">Activo</button>
                                @else
                                <button class="btn btn-danger btn-sm">Inactivo</button>
                                @endif
                            </td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                            <td><a href="{{ route('acceso.edit', $item->id)}}" class="btn btn-warning btn-sm">Editar</a></td>
                        </tr>
                        @endforeach
                    </table>
                    {{ $acceso->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection