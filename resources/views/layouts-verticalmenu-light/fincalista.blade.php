<div class="row row-sm">
    @csrf
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table t2" id="example2">
                        <thead>
                            <tr>
                                <th class="wd-5p"></th>
                                <th class="wd-5p">Folio Real</th>
                                <th class="wd-5p">Cod. Obra</th>
                                <th class="wd-5p">Cod. Ubicación</th>
								<th class="wd-5p">Contribuyente</th>
								<th class="wd-5p">CIP/RUC/PASAP</th>
								<th class="wd-10p">Estatus</th>
								<th class="wd-10p">Fecha Creacion</th>
								<th class="wd-10p">Usuario Creacion</th>
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listado as $item)
                                <tr>
                                    @switch($tipo)
                                        @case('mant')
									        <td><a class="btn btn-sm btn-info" href="{{url('finca/vista/'.$item->id)}}"><i class="fe fe-edit-2"></i></a></td>      
                                            @break
                                        @case('traspaso')
									        <td><a class="btn btn-sm btn-info" href="{{url('finca/vistat/'.$item->id)}}"><i class="fe fe-edit-2"></i></a></td>         
                                            @break
                                        @case('recibo')
									        <td><a data-placement="bottom" data-toggle="tooltip" title="Nuevo Recibo"  class="btn btn-sm btn-info" href="{{url('recibos/vista/'.$item->id)}}"><i class="zmdi zmdi-collection-plus"></i></a></td>         

                                            @break
                                        @case('reimp')
                                            @break
                                        @case('anulaimp')
                                            @break
                                        @case('gestion')
									        <td><a data-placement="bottom" data-toggle="tooltip" title="Nueva Gestión" class="btn btn-sm btn-info" href="{{url('cobros/nueva/'.$item->id)}}"><i class="fe fe-edit-2"></i></a></td>         
                                            @break
                                        @case('cartera')
									        <td><a data-placement="bottom" data-toggle="tooltip" title="Asignar" class="btn btn-sm btn-info" onclick="modalasigna('{{$item->id}}', '{{$item->folio}}')"><i class="fe fe-edit-2"></i></a></td>         
                                            @break
                                        @case('estadoC')
                                            @break
                                        @case('notas')
                                            @break
                                        @case('hojacalculo')
                                            @break
                                        @case('acuerdoP')
                                            @break
                                        @default
                                            
                                    @endswitch
								   <td>{{$item->folio}}</td>
								   <td>{{$item->codobra}}</td>
								   <td>{{$item->cod_ubicacion}}</td>
								   <td>{{$item->nombre}}</td>
                                   <td>{{$item->cedula}}</td>
								   <td>
								   @if ($item->estatus_finca == 'INACTIVO')
										<span class="label text-danger d-flex"><span class="dot-label bg-danger mr-1"></span>{{$item->estatus_finca}}</span>
										@else
										<span class="label text-success d-flex"><span class="dot-label bg-success mr-1"></span>{{$item->estatus_finca}}</span>	
										@endif	
								   </td>
								   {{-- <td>{{$item->estatus_finca}}</td> --}}
								   <td>{{$item->created_at}}</td>
								   <td>{{$item->created_user}}</td>
                                
                                </tr>
                            @endforeach
                    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>