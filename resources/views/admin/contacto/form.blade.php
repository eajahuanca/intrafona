<div class="row">
    <div class="col-md-12">
        <div class="form-group col-md-12">
            {!! Form::label('con_direccion', 'Dirección') !!}
            {!! Form::text('con_direccion', null, ['class' => 'form-control']) !!}
            @if($errors->has('con_direccion'))
                <span style="color:red;">
                    <strong>{{ $errors->first('con_direccion') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group col-md-7">
            {!! Form::label('con_telefono', 'Teléfono') !!}
            {!! Form::text('con_telefono', null, ['class' => 'form-control']) !!}
            @if($errors->has('con_telefono'))
                <span style="color:red;">
                    <strong>{{ $errors->first('con_telefono') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group col-md-7">
            {!! Form::label('con_correo', 'Correo Electrónico') !!}
            {!! Form::text('con_correo', null, ['class' => 'form-control']) !!}
            @if($errors->has('con_correo'))
                <span style="color:red;">
                    <strong>{{ $errors->first('con_correo') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('con_estado', 'Estado') !!}
            {!! Form::select('con_estado', [true => 'Activo', false => 'Inactivo'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>