<x-app-layout>

@section('template_title')
    {{ $notificacion->name ?? "{{ __('Show') Notificacion" }}
@endsection


    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Notificacion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('notificacions.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Encabezado:</strong>
                            {{ $notificacion->encabezado }}
                        </div>
                        <div class="form-group">
                            <strong>Mensaje:</strong>
                            {{ $notificacion->mensaje }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Hora:</strong>
                            {{ $notificacion->fecha_hora }}
                        </div>
                        <div class="form-group">
                            <strong>Pedido Productoid:</strong>
                            {{ $notificacion->pedido_ProductoID }}
                        </div>
                        <div class="form-group">
                            <strong>Usuarioid:</strong>
                            {{ $notificacion->usuarioID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
