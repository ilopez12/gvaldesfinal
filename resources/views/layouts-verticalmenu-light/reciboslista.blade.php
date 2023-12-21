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
                                <th class="wd-5p">Recibo</th>
                                <th class="wd-5p">Folio Real</th>
                                <th class="wd-5p">Cod. Finca</th>
                                <th class="wd-5p">Fecha Recibo</th>
								<th class="wd-5p">Contribuyente</th>
								<th class="wd-5p">CIP/RUC/PASAP</th> 
								<th class="wd-5p">Metodo de Pago</th> 
								<th class="wd-5p"># Cheque</th> 
								<th class="wd-5p">Pagado</th> 
                                <th class="wd-5p">Nominal</th> 
                                <th class="wd-5p">Recargo 1%</th> 
                                <th class="wd-5p">Recargo 10%</th> 
                                <th class="wd-5p">Saldo</th> 
                                <th class="wd-5p">Estado</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($recibos as $item)
                                <tr>
                                    @switch($tipo)
                                        @case('reimp')
									        <td><a class="btn btn-sm btn-info" data-placement="bottom" data-toggle="tooltip" title="Reimprimir Recibo" href="{{url('finca/vista/'.$item->id)}}"><i class="si si-printer"></i></a></td>      
                                            @break
                                        @case('anulaimp')
									        <td><a class="btn btn-sm btn-danger" data-placement="bottom" data-toggle="tooltip" title="Anular Recibo"  href="{{url('finca/vista/'.$item->id)}}"><i class="fe fe-minus"></i></a></td>      
                                            @break
                                    @endswitch 
                                    <td>{{$item->id}}</td>                               
                                    <td>{{$item->foliofinca}}</td>                               
                                    <td>{{$item->idfinca}}</td>                               
                                    <td>{{$item->created_at}}</td>                               
                                    <td>{{$item->contribuyentes}}</td>                               
                                    <td>{{$item->cedula}}</td>                               
                                    <td>{{$item->tipo_pago}}</td>                               
                                    <td>{{$item->n_cheque}}</td>                               
                                    <td>${{$item->monto_pagado}}</td>                               
                                    <td>${{$item->nominal}}</td>                               
                                    <td>${{$item->recargo1}}</td>                               
                                    <td>${{$item->recargo10}}</td>                               
                                    <td>${{$item->saldo}}</td>                               
                                    <td>{{$item->estatus}}</td>                               
                                </tr>
                            @endforeach
                    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>