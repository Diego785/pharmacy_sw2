<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $detallePedido->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('precio', $detallePedido->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('proveedorID') }}
            {{ Form::text('proveedorID', $detallePedido->proveedorID, ['class' => 'form-control' . ($errors->has('proveedorID') ? ' is-invalid' : ''), 'placeholder' => 'Proveedorid']) }}
            {!! $errors->first('proveedorID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('productoID') }}
            {{ Form::text('productoID', $detallePedido->productoID, ['class' => 'form-control' . ($errors->has('productoID') ? ' is-invalid' : ''), 'placeholder' => 'Productoid']) }}
            {!! $errors->first('productoID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pedidoID') }}
            {{ Form::text('pedidoID', $detallePedido->pedidoID, ['class' => 'form-control' . ($errors->has('pedidoID') ? ' is-invalid' : ''), 'placeholder' => 'Pedidoid']) }}
            {!! $errors->first('pedidoID', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>