<div class="row">
    <div class="col-md-12">
        <div class="form-group col-md-6">
            {!! Form::label('acc_logo', 'Logo del acceso directo') !!}
            {!! Form::file('acc_logo', ['class' => 'form-control']) !!}
            @if($errors->has('acc_logo'))
                <span style="color:red;">
                    <strong>{{ $errors->first('acc_logo') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group col-md-12">
            {!! Form::label('acc_nombre', 'Nombre del Acceso Directo') !!}
            {!! Form::text('acc_nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre']) !!}
            @if($errors->has('acc_nombre'))
                <span style="color:red;">
                    <strong>{{ $errors->first('acc_nombre') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group col-md-12">
            {!! Form::label('acc_enlace', 'Enlace del Acceso') !!}
            {!! Form::text('acc_enlace', null, ['class' => 'form-control', 'placeholder' => 'http://example.com']) !!}
            @if($errors->has('acc_enlace'))
                <span style="color:red;">
                    <strong>{{ $errors->first('acc_enlace') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group col-md-12">
            {!! Form::label('acc_descripcion', 'Descripción') !!}
            {!! Form::textarea('acc_descripcion', null, ['class' => 'form-control', 'rows'=> '4']) !!}
            @if($errors->has('acc_descripcion'))
                <span style="color:red;">
                    <strong>{{ $errors->first('acc_descripcion') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('acc_estado', 'Estado') !!}
            {!! Form::select('acc_estado', [true => 'Activo', false => 'Inactivo'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>