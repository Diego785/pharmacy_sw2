<x-app-layout>

@section('template_title')
    {{ $inventario->name ?? "{{ __('Show') Inventario" }}
@endsection


    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Inventario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('inventarios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha Ingreso:</strong>
                            {{ $inventario->fecha_ingreso }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad Ingresada:</strong>
                            {{ $inventario->cantidad_ingresada }}
                        </div>
                        <div class="form-group">
                            <strong>Total Costo:</strong>
                            {{ $inventario->total_costo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
