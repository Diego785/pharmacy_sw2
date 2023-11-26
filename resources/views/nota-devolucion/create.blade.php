<x-app-layout>

@section('template_title')
    {{ __('Create') }} Nota Devolucion
@endsection


    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Nota Devolucion</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('nota-devolucions.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('nota-devolucion.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
