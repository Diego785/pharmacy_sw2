<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fecha_dada_baja') }}
            {{ Form::date('fecha_dada_baja', $notaBaja->fecha_dada_baja, ['class' => 'form-control' . ($errors->has('fecha_dada_baja') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Dada Baja']) }}
            {!! $errors->first('fecha_dada_baja', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('motivo') }}
            {{ Form::text('motivo', $notaBaja->motivo, ['class' => 'form-control' . ($errors->has('motivo') ? ' is-invalid' : ''), 'placeholder' => 'Motivo']) }}
            {!! $errors->first('motivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button class="btn btn-sm btn-primary"><i class="fa fa-fw fa-eye"></i>{{ __('Submit') }}</button>
    </div>
</div>