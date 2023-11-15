<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $detalleInventario->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_lote') }}
            {{ Form::text('numero_lote', $detalleInventario->numero_lote, ['class' => 'form-control' . ($errors->has('numero_lote') ? ' is-invalid' : ''), 'placeholder' => 'Numero Lote']) }}
            {!! $errors->first('numero_lote', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_compra') }}
            {{ Form::text('precio_compra', $detalleInventario->precio_compra, ['class' => 'form-control' . ($errors->has('precio_compra') ? ' is-invalid' : ''), 'placeholder' => 'Precio Compra']) }}
            {!! $errors->first('precio_compra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_venc_lote') }}
            {{ Form::text('fecha_venc_lote', $detalleInventario->fecha_venc_lote, ['class' => 'form-control' . ($errors->has('fecha_venc_lote') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Venc Lote']) }}
            {!! $errors->first('fecha_venc_lote', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('proveedorID') }}
            {{ Form::text('proveedorID', $detalleInventario->proveedorID, ['class' => 'form-control' . ($errors->has('proveedorID') ? ' is-invalid' : ''), 'placeholder' => 'Proveedorid']) }}
            {!! $errors->first('proveedorID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('productoID') }}
            {{ Form::text('productoID', $detalleInventario->productoID, ['class' => 'form-control' . ($errors->has('productoID') ? ' is-invalid' : ''), 'placeholder' => 'Productoid']) }}
            {!! $errors->first('productoID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('inventarioID') }}
            {{ Form::text('inventarioID', $detalleInventario->inventarioID, ['class' => 'form-control' . ($errors->has('inventarioID') ? ' is-invalid' : ''), 'placeholder' => 'Inventarioid']) }}
            {!! $errors->first('inventarioID', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>