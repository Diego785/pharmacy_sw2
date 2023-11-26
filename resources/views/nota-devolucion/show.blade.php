<x-app-layout>

@section('template_title')
    {{ $notaDevolucion->name ?? "{{ __('Show') Nota Devolucion" }}
@endsection


    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Nota Devolucion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('nota-devolucions.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Motivo:</strong>
                            {{ $notaDevolucion->motivo }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Dev:</strong>
                            {{ $notaDevolucion->fecha_dev }}
                        </div>
                        <div class="form-group">
                            <strong>Facturaid:</strong>
                            {{ $notaDevolucion->facturaID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
