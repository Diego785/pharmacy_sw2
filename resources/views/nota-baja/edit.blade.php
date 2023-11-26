<x-app-layout>

@section('template_title')
    {{ __('Update') }} Nota Baja
@endsection


    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Nota Baja</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('nota-bajas.update', $notaBaja->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('nota-baja.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
