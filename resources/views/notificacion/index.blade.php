<x-app-layout>

@section('template_title')
    Notificacion
@endsection


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Notificacion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('notificacions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Encabezado</th>
										<th>Mensaje</th>
										<th>Fecha Hora</th>
										<th>Pedido</th>
										<th>Usuario</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notificacions as $notificacion)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $notificacion->encabezado }}</td>
											<td>{{ $notificacion->mensaje }}</td>
											<td>{{ $notificacion->fecha_hora }}</td>
											<td>{{ $notificacion->pedido_Producto->fecha_pedido }}</td>
											<td>{{ $notificacion->user->name }}</td>

                                            <td>
                                                <form action="{{ route('notificacions.destroy',$notificacion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('notificacions.show',$notificacion->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('notificacions.edit',$notificacion->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $notificacions->links() !!}
            </div>
        </div>
    </div>
</x-app-layout>
