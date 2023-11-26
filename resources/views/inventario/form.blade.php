<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fecha_ingreso') }}
            {{ Form::date('fecha_ingreso', $inventario->fecha_ingreso, ['class' => 'form-control' . ($errors->has('fecha_ingreso') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Ingreso']) }}
            {!! $errors->first('fecha_ingreso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad_ingresada') }}
            {{ Form::text('cantidad_ingresada', $inventario->cantidad_ingresada, ['class' => 'form-control' . ($errors->has('cantidad_ingresada') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad Ingresada']) }}
            {!! $errors->first('cantidad_ingresada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total_costo') }}
            {{ Form::text('total_costo', $inventario->total_costo, ['class' => 'form-control' . ($errors->has('total_costo') ? ' is-invalid' : ''), 'placeholder' => 'Total Costo']) }}
            {!! $errors->first('total_costo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button class="btn btn-sm btn-primary"><i class="fa fa-fw fa-eye"></i>{{ __('Submit') }}</button>
    </div>
</div>