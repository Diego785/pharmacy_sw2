<x-app-layout>

@section('template_title')
    Producto
@endsection


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Producto') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('productos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre Producto</th>
										<th>Descripcion</th>
										<th>Precio Venta</th>
										<th>Cantidad Stock</th>
										<th>Cod Barra</th>
										<th>Imagen</th>
										<th>Adicional</th>
										<th>Fecha Vencimiento</th>
										<th>Existencia Minimo</th>
										<th>Categoria</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $producto->nombre_producto }}</td>
											<td>{{ $producto->descripcion }}</td>
											<td>{{ $producto->precio_venta }}</td>
											<td>{{ $producto->cantidad_stock }}</td>
											<td>{{ $producto->cod_barra }}</td>
											<td>{{ $producto->imagen }}</td>
											<td>{{ $producto->adicional }}</td>
											<td>{{ $producto->fecha_vencimiento }}</td>
											<td>{{ $producto->existencia_minimo }}</td>
                                            <td>{{ $categorias[$producto->categoriaID] }}</td>

                                            <td>
                                                <form action="{{ route('productos.destroy',$producto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('productos.show',$producto->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('productos.edit',$producto->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $productos->links() !!}
            </div>
        </div>
    </div>
</x-app-layout>
