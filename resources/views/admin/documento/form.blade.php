<div class="row">
    <div class="col-md-12">
        <div class="form-group col-md-6">
            {!! Form::label('doc_nombre', 'Documento (Archivo *.pdf, *.xlsx)') !!}
            {!! Form::file('doc_nombre', ['class' => 'form-control']) !!}
            <?php error_reporting(0); ?>
            @if($errors->has('doc_nombre'))
                <span style="color:red;">
                    <strong>{{ $errors->first('doc_nombre') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group col-md-12">
            {!! Form::label('doc_descripcion', 'Descripción') !!}
            {!! Form::textarea('doc_descripcion', null, ['class' => 'form-control', 'rows'=> '4']) !!}
            @if($errors->has('doc_descripcion'))
                <span style="color:red;">
                    <strong>{{ $errors->first('doc_descripcion') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('idtipodocumento', 'Tipo de Documento') !!}
            {!! Form::select('idtipodocumento', $tipos, null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('doc_estado', 'Estado') !!}
            {!! Form::select('doc_estado', [true => 'Activo', false => 'Inactivo'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>