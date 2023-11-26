<x-app-layout>

@section('template_title')
    {{ $detallePedido->name ?? "{{ __('Show') Detalle Pedido" }}
@endsection


    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detalle Pedido</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalle-pedidos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $detallePedido->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $detallePedido->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Proveedorid:</strong>
                            {{ $detallePedido->proveedorID }}
                        </div>
                        <div class="form-group">
                            <strong>Productoid:</strong>
                            {{ $detallePedido->productoID }}
                        </div>
                        <div class="form-group">
                            <strong>Pedidoid:</strong>
                            {{ $detallePedido->pedidoID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
