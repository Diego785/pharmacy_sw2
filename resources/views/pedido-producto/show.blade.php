<x-app-layout>

@section('template_title')
    {{ $pedidoProducto->name ?? "{{ __('Show') Pedido Producto" }}
@endsection


    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pedido Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pedido-productos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha Pedido:</strong>
                            {{ $pedidoProducto->fecha_pedido }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $pedidoProducto->total }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
