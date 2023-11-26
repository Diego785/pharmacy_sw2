<x-app-layout>

@section('template_title')
    {{ $producto->name ?? "{{ __('Show') Producto" }}
@endsection


    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Producto:</strong>
                            {{ $producto->nombre_producto }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $producto->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Venta:</strong>
                            {{ $producto->precio_venta }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad Stock:</strong>
                            {{ $producto->cantidad_stock }}
                        </div>
                        <div class="form-group">
                            <strong>Cod Barra:</strong>
                            {{ $producto->cod_barra }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $producto->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Adicional:</strong>
                            {{ $producto->adicional }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Vencimiento:</strong>
                            {{ $producto->fecha_vencimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Existencia Minimo:</strong>
                            {{ $producto->existencia_minimo }}
                        </div>
                        <div class="form-group">
                            <strong>Categoriaid:</strong>
                            {{ $producto->categoriaID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
