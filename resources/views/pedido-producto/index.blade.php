<x-app-layout>

@section('template_title')
    Pedido Producto
@endsection


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pedido Producto') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pedido-productos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Fecha Pedido</th>
										<th>Total</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pedidoProductos as $pedidoProducto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $pedidoProducto->fecha_pedido }}</td>
											<td>{{ $pedidoProducto->total }}</td>

                                            <td>
                                                <form action="{{ route('pedido-productos.destroy',$pedidoProducto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pedido-productos.show',$pedidoProducto->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pedido-productos.edit',$pedidoProducto->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $pedidoProductos->links() !!}
            </div>
        </div>
    </div>
</x-app-layout>
