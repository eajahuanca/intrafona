<div class="row">
    <div class="col-md-12">
        <div class="form-group col-md-6">
            {!! Form::label('com_archivo', 'Archivo (Imagen)') !!}
            {!! Form::file('com_archivo', ['class' => 'form-control']) !!}
            <?php error_reporting(0); ?>
            @if($comunicado)
            <br>
            <img src="{{ asset($comunicado['com_archivo']) }}" width="{{ $comunicado->com_width }}px" height="{{ $comunicado->com_height }}px"/>
            @endif
            @if($errors->has('com_archivo'))
                <span style="color:red;">
                    <strong>{{ $errors->first('com_archivo') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('com_width', 'Ancho del Archivo (px)') !!}
            {!! Form::text('com_width', null, ['class' => 'form-control']) !!}
            @if($errors->has('com_width'))
                <span style="color:red;">
                    <strong>{{ $errors->first('com_width') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('com_height', 'Alto del Archivo (px)') !!}
            {!! Form::text('com_height', null, ['class' => 'form-control']) !!}
            @if($errors->has('com_height'))
                <span style="color:red;">
                    <strong>{{ $errors->first('com_height') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('com_estado', 'Estado') !!}
            {!! Form::select('com_estado', [true => 'Activo', false => 'Inactivo'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>