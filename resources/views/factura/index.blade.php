<x-app-layout>

@section('template_title')
    Factura
@endsection


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Factura') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('facturas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nit</th>
										<th>Fecha</th>
										<th>Total</th>
										<th>Impuesto</th>
										<th>Descuento</th>
										<th>Subtotal</th>
										<th>Nota</th>
										<th>Clienteid</th>
										<th>Usuarioid</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($facturas as $factura)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $factura->nit }}</td>
											<td>{{ $factura->fecha }}</td>
											<td>{{ $factura->total }}</td>
											<td>{{ $factura->impuesto }}</td>
											<td>{{ $factura->descuento }}</td>
											<td>{{ $factura->subtotal }}</td>
											<td>{{ $factura->nota }}</td>
											<td>{{ $factura->clienteID }}</td>
											<td>{{ $factura->usuarioID }}</td>

                                            <td>
                                                <form action="{{ route('facturas.destroy',$factura->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('facturas.show',$factura->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('facturas.edit',$factura->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $facturas->links() !!}
            </div>
        </div>
    </div>
</x-app-layout>
