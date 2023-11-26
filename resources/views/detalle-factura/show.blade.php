<x-app-layout>

@section('template_title')
    {{ $detalleFactura->name ?? "{{ __('Show') Detalle Factura" }}
@endsection


    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detalle Factura</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalle-facturas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $detalleFactura->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Subtotal:</strong>
                            {{ $detalleFactura->subtotal }}
                        </div>
                        <div class="form-group">
                            <strong>Precio U:</strong>
                            {{ $detalleFactura->precio_u }}
                        </div>
                        <div class="form-group">
                            <strong>Productoid:</strong>
                            {{ $detalleFactura->productoID }}
                        </div>
                        <div class="form-group">
                            <strong>Facturaid:</strong>
                            {{ $detalleFactura->facturaID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
