<x-app-layout>

@section('template_title')
    {{ $detalleNotaBaja->name ?? "{{ __('Show') Detalle Nota Baja" }}
@endsection


    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detalle Nota Baja</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalle-nota-bajas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $detalleNotaBaja->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Observacion:</strong>
                            {{ $detalleNotaBaja->observacion }}
                        </div>
                        <div class="form-group">
                            <strong>Productoid:</strong>
                            {{ $detalleNotaBaja->productoID }}
                        </div>
                        <div class="form-group">
                            <strong>Bajaid:</strong>
                            {{ $detalleNotaBaja->bajaID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
