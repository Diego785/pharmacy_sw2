<x-app-layout>

@section('template_title')
    Detalle Nota Baja
@endsection


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Detalle Nota Baja') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('detalle-nota-bajas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Cantidad</th>
										<th>Observacion</th>
										<th>Productoid</th>
										<th>Bajaid</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detalleNotaBajas as $detalleNotaBaja)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $detalleNotaBaja->cantidad }}</td>
											<td>{{ $detalleNotaBaja->observacion }}</td>
											<td>{{ $detalleNotaBaja->productoID }}</td>
											<td>{{ $detalleNotaBaja->bajaID }}</td>

                                            <td>
                                                <form action="{{ route('detalle-nota-bajas.destroy',$detalleNotaBaja->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('detalle-nota-bajas.show',$detalleNotaBaja->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('detalle-nota-bajas.edit',$detalleNotaBaja->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn" style="background-color: brown;border:1px "><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $detalleNotaBajas->links() !!}
            </div>
        </div>
    </div>
</x-app-layout>
