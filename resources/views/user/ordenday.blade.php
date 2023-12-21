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
		<h2 class="main-content-title tx-24 mg-b-5">Pedidos del Dia {{\Carbon\Carbon::parse($ordenes[0]->fecha)->locale('es')->translatedFormat('j \d\e F \d\e Y') }}</h2>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="/">Menu Pedidos</a></li>
			<li class="breadcrumb-item active" aria-current="page">Pedidos</li>
		</ol>
	</div>
    <div class="d-flex">
        <div class="justify-content-center">
            {{-- <button type="button" class="btn btn-white btn-icon-text my-2 mr-2">
              <i class="fe fe-send mr-2"></i> Enviar Pedidos 
            </button> --}}
            <a class="btn btn-primary my-2 btn-icon-text" style="color: white" href="/admin/generarenvio">
              <i class="fe fe-download-cloud mr-2"></i> Descargar Pedidos
            </a>
        </div>
    </div>
</div>
<!-- Row -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-body">
                <div>
                    <h6 class="main-content-label mb-1">Pedidos del día {{\Carbon\Carbon::parse($ordenes[0]->fecha)->locale('es')->translatedFormat('j \d\e F \d\e Y') }}</h6>
                <div class="row row-sm">	
                    <div class="col-sm-6">
                        <p class="text-muted card-sub-title">Total de Pedidos: {{$pedidos}}</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="text-muted card-sub-title">Monto Total: $ {{ number_format($total, 2 ) }}</p>
                    </div>
                </div>
                
                </div>
                <div class="table-responsive">
                    <table class="table" id="example2">
                        <thead>
                            <tr>
                                <th class="wd-20p">#</th>
                                <th class="wd-20p">Orden de</th>
                                {{-- <th class="wd-25p">Proteína</th>
                                <th class="wd-20p">Acompañamientos</th> --}}
                                <th class="wd-15p">Fecha</th>
                                <th class="wd-15p">Precio</th>
                                <th class="wd-15p">Adicional</th>
                                <th class="wd-15p">Total</th>
                                <th class="wd-15p">Enviada</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ordenes as $key => $item)
                            @php
                                $adicional = $item->total_acomp +  $item->acomp_adc ;
                            @endphp
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$item->solicitante}}</td>
                                {{-- <td>{{$item->proteina}}</td>
                                <td>{{$item->acomp}}</td> --}}
                                <td>{{\Carbon\Carbon::parse($item->fecha)->format('d/m/y') }}</td>
                                <td>$ {{number_format($item->total_prot, 2 ) }}</td>
                                <td>$ {{number_format($adicional, 2 ) }}</td>
                                <td>$ {{number_format($item->total, 2 ) }}</td>
                                <td>{{$item->enviada}}</td>
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