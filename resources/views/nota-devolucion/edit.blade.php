<x-app-layout>

@section('template_title')
    {{ __('Update') }} Nota Devolucion
@endsection


    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Nota Devolucion</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('nota-devolucions.update', $notaDevolucion->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('nota-devolucion.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
