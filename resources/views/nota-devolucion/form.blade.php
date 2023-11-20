<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('motivo') }}
            {{ Form::text('motivo', $notaDevolucion->motivo, ['class' => 'form-control' . ($errors->has('motivo') ? ' is-invalid' : ''), 'placeholder' => 'Motivo']) }}
            {!! $errors->first('motivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_dev') }}
            {{ Form::date('fecha_dev', $notaDevolucion->fecha_dev, ['class' => 'form-control' . ($errors->has('fecha_dev') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Dev']) }}
            {!! $errors->first('fecha_dev', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('facturaID') }}
            {{ Form::text('facturaID', $notaDevolucion->facturaID, ['class' => 'form-control' . ($errors->has('facturaID') ? ' is-invalid' : ''), 'placeholder' => 'Facturaid']) }}
            {!! $errors->first('facturaID', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button class="btn btn-sm btn-primary"><i class="fa fa-fw fa-eye"></i>{{ __('Submit') }}</button>
    </div>
</div>