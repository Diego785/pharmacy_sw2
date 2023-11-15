<x-app-layout>

@section('template_title')
    Detalle Inventario
@endsection


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Detalle Inventario') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('detalle-inventarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Numero Lote</th>
										<th>Precio Compra</th>
										<th>Fecha Venc Lote</th>
										<th>Proveedorid</th>
										<th>Productoid</th>
										<th>Inventarioid</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detalleInventarios as $detalleInventario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $detalleInventario->cantidad }}</td>
											<td>{{ $detalleInventario->numero_lote }}</td>
											<td>{{ $detalleInventario->precio_compra }}</td>
											<td>{{ $detalleInventario->fecha_venc_lote }}</td>
											<td>{{ $detalleInventario->proveedorID }}</td>
											<td>{{ $detalleInventario->productoID }}</td>
											<td>{{ $detalleInventario->inventarioID }}</td>

                                            <td>
                                                <form action="{{ route('detalle-inventarios.destroy',$detalleInventario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('detalle-inventarios.show',$detalleInventario->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('detalle-inventarios.edit',$detalleInventario->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $detalleInventarios->links() !!}
            </div>
        </div>
    </div>
</x-app-layout>
