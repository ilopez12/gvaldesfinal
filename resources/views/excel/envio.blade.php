@extends('layouts-verticalmenu-light.menumaestro')

@section('css')
		<!-- Internal DataTables css-->
		<link href="{{URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/plugins/datatable/responsivebootstrap4.min.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css')}}" rel="stylesheet" />
@endsection
@section('content')

<!-- Page Header -->
<div class="page-header">
	<div>
		<h2 class="main-content-title tx-24 mg-b-5">Pedidos del Dia {{\Carbon\Carbon::parse(date(now()))->locale('es')->translatedFormat('j \d\e F \d\e Y') }}</h2>
	</div>
   
</div>
<!-- Row -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-body">
              
                
                </div>
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th class="wd-20p">#</th>
                                <th class="wd-20p">Orden de</th>
                                <th class="wd-20p">Detalle</th>
                                <th class="wd-15p">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($info as $key => $item)
                         
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$item['ordenado']}}</td>
                                <td>{{$item['det_pedido']}}</td>
                                <td>$ {{number_format($item['monto'], 2 ) }}</td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Row -->

@endsection
@section('script')
@include('layout.script')
@endsection