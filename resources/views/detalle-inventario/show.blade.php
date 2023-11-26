<x-app-layout>

@section('template_title')
    {{ $detalleInventario->name ?? "{{ __('Show') Detalle Inventario" }}
@endsection


    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detalle Inventario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalle-inventarios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $detalleInventario->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Lote:</strong>
                            {{ $detalleInventario->numero_lote }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Compra:</strong>
                            {{ $detalleInventario->precio_compra }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Venc Lote:</strong>
                            {{ $detalleInventario->fecha_venc_lote }}
                        </div>
                        <div class="form-group">
                            <strong>Proveedorid:</strong>
                            {{ $detalleInventario->proveedorID }}
                        </div>
                        <div class="form-group">
                            <strong>Productoid:</strong>
                            {{ $detalleInventario->productoID }}
                        </div>
                        <div class="form-group">
                            <strong>Inventarioid:</strong>
                            {{ $detalleInventario->inventarioID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
