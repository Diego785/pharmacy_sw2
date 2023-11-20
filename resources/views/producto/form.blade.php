<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_producto') }}
            {{ Form::text('nombre_producto', $producto->nombre_producto, ['class' => 'form-control' . ($errors->has('nombre_producto') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Producto']) }}
            {!! $errors->first('nombre_producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $producto->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_venta') }}
            {{ Form::text('precio_venta', $producto->precio_venta, ['class' => 'form-control' . ($errors->has('precio_venta') ? ' is-invalid' : ''), 'placeholder' => 'Precio Venta']) }}
            {!! $errors->first('precio_venta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad_stock') }}
            {{ Form::text('cantidad_stock', $producto->cantidad_stock, ['class' => 'form-control' . ($errors->has('cantidad_stock') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad Stock']) }}
            {!! $errors->first('cantidad_stock', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cod_barra') }}
            {{ Form::text('cod_barra', $producto->cod_barra, ['class' => 'form-control' . ($errors->has('cod_barra') ? ' is-invalid' : ''), 'placeholder' => 'Cod Barra']) }}
            {!! $errors->first('cod_barra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imagen') }}
            {{ Form::text('imagen', $producto->imagen, ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('adicional') }}
            {{ Form::text('adicional', $producto->adicional, ['class' => 'form-control' . ($errors->has('adicional') ? ' is-invalid' : ''), 'placeholder' => 'Adicional']) }}
            {!! $errors->first('adicional', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_vencimiento') }}
            {{ Form::date('fecha_vencimiento', $producto->fecha_vencimiento, ['class' => 'form-control' . ($errors->has('fecha_vencimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Vencimiento']) }}
            {!! $errors->first('fecha_vencimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('existencia_minimo') }}
            {{ Form::text('existencia_minimo', $producto->existencia_minimo, ['class' => 'form-control' . ($errors->has('existencia_minimo') ? ' is-invalid' : ''), 'placeholder' => 'Existencia Minimo']) }}
            {!! $errors->first('existencia_minimo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
    {{ Form::label('categoriaID', 'Categoria') }}
    {{ Form::select('categoriaID', $categorias, $producto->categoriaID, ['class' => 'form-control' . ($errors->has('categoriaID') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona una categoría']) }}
    {!! $errors->first('categoriaID', '<div class="invalid-feedback">:message</div>') !!}
</div>


    </div>
    <div class="box-footer mt20">
        <button class="btn btn-sm btn-primary"><i class="fa fa-fw fa-eye"></i>{{ __('Submit') }}</button>
    </div>
</div>