<x-app-layout>

@section('template_title')
    Nota Baja
@endsection


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Nota Baja') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('nota-bajas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Fecha Dada Baja</th>
										<th>Motivo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notaBajas as $notaBaja)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $notaBaja->fecha_dada_baja }}</td>
											<td>{{ $notaBaja->motivo }}</td>

                                            <td>
                                                <form action="{{ route('nota-bajas.destroy',$notaBaja->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('nota-bajas.show',$notaBaja->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('nota-bajas.edit',$notaBaja->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $notaBajas->links() !!}
            </div>
        </div>
    </div>
</x-app-layout>
