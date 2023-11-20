<x-app-layout>

@section('template_title')
    Nota Devolucion
@endsection


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Nota Devolucion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('nota-devolucions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Motivo</th>
										<th>Fecha Dev</th>
										<th>Facturaid</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notaDevolucions as $notaDevolucion)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $notaDevolucion->motivo }}</td>
											<td>{{ $notaDevolucion->fecha_dev }}</td>
											<td>{{ $notaDevolucion->facturaID }}</td>

                                            <td>
                                                <form action="{{ route('nota-devolucions.destroy',$notaDevolucion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('nota-devolucions.show',$notaDevolucion->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('nota-devolucions.edit',$notaDevolucion->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $notaDevolucions->links() !!}
            </div>
        </div>
    </div>
</x-app-layout>
