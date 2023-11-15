<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('encabezado') }}
            {{ Form::text('encabezado', $notificacion->encabezado, ['class' => 'form-control' . ($errors->has('encabezado') ? ' is-invalid' : ''), 'placeholder' => 'Encabezado']) }}
            {!! $errors->first('encabezado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mensaje') }}
            {{ Form::text('mensaje', $notificacion->mensaje, ['class' => 'form-control' . ($errors->has('mensaje') ? ' is-invalid' : ''), 'placeholder' => 'Mensaje']) }}
            {!! $errors->first('mensaje', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_hora') }}
            {{ Form::text('fecha_hora', $notificacion->fecha_hora, ['class' => 'form-control' . ($errors->has('fecha_hora') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Hora']) }}
            {!! $errors->first('fecha_hora', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pedido_ProductoID') }}
            {{ Form::text('pedido_ProductoID', $notificacion->pedido_ProductoID, ['class' => 'form-control' . ($errors->has('pedido_ProductoID') ? ' is-invalid' : ''), 'placeholder' => 'Pedido Productoid']) }}
            {!! $errors->first('pedido_ProductoID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuarioID') }}
            {{ Form::text('usuarioID', $notificacion->usuarioID, ['class' => 'form-control' . ($errors->has('usuarioID') ? ' is-invalid' : ''), 'placeholder' => 'Usuarioid']) }}
            {!! $errors->first('usuarioID', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>