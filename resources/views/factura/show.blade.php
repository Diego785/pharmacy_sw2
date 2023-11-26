<x-app-layout>

@section('template_title')
    {{ $factura->name ?? "{{ __('Show') Factura" }}
@endsection


    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Factura</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('facturas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nit:</strong>
                            {{ $factura->nit }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $factura->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $factura->total }}
                        </div>
                        <div class="form-group">
                            <strong>Impuesto:</strong>
                            {{ $factura->impuesto }}
                        </div>
                        <div class="form-group">
                            <strong>Descuento:</strong>
                            {{ $factura->descuento }}
                        </div>
                        <div class="form-group">
                            <strong>Subtotal:</strong>
                            {{ $factura->subtotal }}
                        </div>
                        <div class="form-group">
                            <strong>Nota:</strong>
                            {{ $factura->nota }}
                        </div>
                        <div class="form-group">
                            <strong>Clienteid:</strong>
                            {{ $factura->clienteID }}
                        </div>
                        <div class="form-group">
                            <strong>Usuarioid:</strong>
                            {{ $factura->usuarioID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
