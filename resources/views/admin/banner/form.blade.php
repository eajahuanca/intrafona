<div class="row">
    <div class="col-md-12">
        <div class="form-group col-md-6">
            {!! Form::label('ban_nombre', 'Banner (Imagen)') !!}
            {!! Form::file('ban_nombre', ['class' => 'form-control']) !!}
            <?php error_reporting(0); ?>
            @if($banner)
            <br>
            <img src="{{ asset($banner['ban_nombre']) }}" width="200px" height="150px"/>
            @endif
            @if($errors->has('ban_nombre'))
                <span style="color:red;">
                    <strong>{{ $errors->first('ban_nombre') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group col-md-12">
            {!! Form::label('ban_descripcion', 'Descripción') !!}
            {!! Form::textarea('ban_descripcion', null, ['class' => 'form-control', 'rows'=> '4']) !!}
            @if($errors->has('ban_descripcion'))
                <span style="color:red;">
                    <strong>{{ $errors->first('ban_descripcion') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('ban_estado', 'Estado') !!}
            {!! Form::select('ban_estado', [true => 'Activo', false => 'Inactivo'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>