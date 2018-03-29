@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Banners</div>
                @include('flash::message')
                <div class="panel-body">
                    <a href="{{ route('banner.create') }}" class="btn btn-primary btn-sm">Nuevo Banner</a><br><br>
                    <table class="table table-bordered table-responsive">
                        <tr class="btn-primary">
                            <th>Banner</th>
                            <th>Descripción</th>
                            <th>Estado</th>
                            <th>Fecha de Registro</th>
                            <th>Fecha de Actualización</th>
                            <th></th>
                        </tr>
                        @foreach($banner as $item)    
                        <tr>
                            <td><img src="{{ $item->ban_nombre }}" width="100px" height="60px"/></td>
                            <td>{!! $item->ban_descripcion !!}</td>
                            <td>
                                @if($item->ban_estado)
                                <button class="btn btn-success btn-sm">Activo</button>
                                @else
                                <button class="btn btn-danger btn-sm">Inactivo</button>
                                @endif
                            </td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                            <td><a href="{{ route('banner.edit', $item->id)}}" class="btn btn-warning btn-sm">Editar</a></td>
                        </tr>
                        @endforeach
                    </table>
                    {{ $banner->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection