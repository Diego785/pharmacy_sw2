<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $detalleFactura->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('subtotal') }}
            {{ Form::text('subtotal', $detalleFactura->subtotal, ['class' => 'form-control' . ($errors->has('subtotal') ? ' is-invalid' : ''), 'placeholder' => 'Subtotal']) }}
            {!! $errors->first('subtotal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_u') }}
            {{ Form::text('precio_u', $detalleFactura->precio_u, ['class' => 'form-control' . ($errors->has('precio_u') ? ' is-invalid' : ''), 'placeholder' => 'Precio U']) }}
            {!! $errors->first('precio_u', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('productoID') }}
            {{ Form::text('productoID', $detalleFactura->productoID, ['class' => 'form-control' . ($errors->has('productoID') ? ' is-invalid' : ''), 'placeholder' => 'Productoid']) }}
            {!! $errors->first('productoID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('facturaID') }}
            {{ Form::text('facturaID', $detalleFactura->facturaID, ['class' => 'form-control' . ($errors->has('facturaID') ? ' is-invalid' : ''), 'placeholder' => 'Facturaid']) }}
            {!! $errors->first('facturaID', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>