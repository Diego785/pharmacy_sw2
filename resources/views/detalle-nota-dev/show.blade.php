<x-app-layout>

@section('template_title')
    {{ $detalleNotaDev->name ?? "{{ __('Show') Detalle Nota Dev" }}
@endsection


    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detalle Nota Dev</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalle-nota-devs.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $detalleNotaDev->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Observacion:</strong>
                            {{ $detalleNotaDev->observacion }}
                        </div>
                        <div class="form-group">
                            <strong>Productoid:</strong>
                            {{ $detalleNotaDev->productoID }}
                        </div>
                        <div class="form-group">
                            <strong>Notadevid:</strong>
                            {{ $detalleNotaDev->notadevID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
