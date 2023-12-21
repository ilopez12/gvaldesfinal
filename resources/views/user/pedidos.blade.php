@extends('layouts-horizontalmenu-light.master')

@section('css')
		<!-- Internal DataTables css-->
		<link href="{{URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/plugins/datatable/responsivebootstrap4.min.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css')}}" rel="stylesheet" />
@endsection
@include('layouts-verticalmenu-light.css')
@section('content')

						<!-- Page Header -->
						<div class="page-header ml-5 mr-5">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5 mt-5">Pedidos hasta el día {{\Carbon\Carbon::parse(date(now()))->locale('es')->translatedFormat('j \d\e F \d\e Y') }}</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Pedidos</a></li>
									<li class="breadcrumb-item active" aria-current="page">Todoso los Pedidos</li>
								</ol>
							</div>
						</div>
						<!-- End Page Header -->

						<!-- Row -->
						<div class="row row-sm  ml-5 mr-5">
							<div class="col-lg-12">
								<div class="card custom-card">
									<div class="card-body">
										<div class="table-responsive">
											<table id="example3" class="table table-striped table-bordered text-nowrap" >
												<thead>
													<tr>
														<th style="width: 10%">#</th>
														<th >Fecha</th>
														<th >Pedido</th>
														<th >Estatus</th>
														<th >Ordenado</th>
														<th >Detalle</th>
														<th >Total</th>
													</tr>
												</thead>
												<tbody>
													@foreach ($ordenes as $key => $item)
														<tr>
															<td>{{$key+1}}</td>
															<td>{{$item['fecha']}}</td>
															<td>{{$item['encabezado']}}</td>
															<td>{{$item['estatus']}}</td>
															<td>{{$item['orden_d']}}</td>
															<td>{{$item['detalle']}}</td>
															<td>$ {{number_format($item['total'], 2 ) }}</td>
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
		<!-- Internal Data Table js -->
		<script src="{{URL::asset('assets/plugins/datatable/jquery.dataTables.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/fileexport/dataTables.buttons.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/fileexport/buttons.bootstrap4.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/fileexport/jszip.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/fileexport/pdfmake.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/fileexport/vfs_fonts.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/fileexport/buttons.html5.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/fileexport/buttons.print.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/fileexport/buttons.colVis.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/table-data.js')}}"></script>
@endsection