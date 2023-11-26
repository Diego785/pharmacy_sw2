<x-app-layout>

@section('template_title')
    {{ $notaBaja->name ?? "{{ __('Show') Nota Baja" }}
@endsection


    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Nota Baja</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('nota-bajas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha Dada Baja:</strong>
                            {{ $notaBaja->fecha_dada_baja }}
                        </div>
                        <div class="form-group">
                            <strong>Motivo:</strong>
                            {{ $notaBaja->motivo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
