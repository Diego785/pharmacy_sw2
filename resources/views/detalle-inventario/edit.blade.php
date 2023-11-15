<x-app-layout>

@section('template_title')
    {{ __('Update') }} Detalle Inventario
@endsection


    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Detalle Inventario</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('detalle-inventarios.update', $detalleInventario->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('detalle-inventario.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
