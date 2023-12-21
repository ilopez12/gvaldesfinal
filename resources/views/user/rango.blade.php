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
								<h2 class="main-content-title tx-24 mg-b-5">Ver Pedidos</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Pages</a></li>
									<li class="breadcrumb-item active" aria-current="page">Empty Page</li>
								</ol>
							</div>
							{{-- <div class="d-flex">
								<div class="justify-content-center">
									<button type="button" class="btn btn-white btn-icon-text my-2 mr-2">
									  <i class="fe fe-download mr-2"></i> Import
									</button>
									<button type="button" class="btn btn-white btn-icon-text my-2 mr-2">
									  <i class="fe fe-filter mr-2"></i> Filter
									</button>
									<button type="button" class="btn btn-primary my-2 btn-icon-text">
									  <i class="fe fe-download-cloud mr-2"></i> Download Report
									</button>
								</div>
							</div> --}}
						</div>
						<!-- End Page Header -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-12">
								<div class="card custom-card">
									<div class="card-body">
                                        @csrf
										<div class="row">
                                            <div class="col-sm-4">
                                                    <label for="">Desde</label>
                                                    <input type="date" name="desde" id="desde" class="form-control">
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="">Hasta</label>
                                                <input type="date" name="hasta" id="hasta" class="form-control">
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="">Usuarios</label>
                                                <select name="usuario" id="usuario" class="form-control">
                                                    <option value="0">Seleccione</option>
                                                    @foreach ($usuarios as $item)
                                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach
                                                </select>
                                                {{-- <input type="date" name="usuario" id="usuario" class="form-control"> --}}
                                            </div>
                                
                                        </div>
                                        <button onclick="traepedidos()" type="button" class="btn btn-primary my-2 btn-icon-text">
                                            <i class="fe fe-search mr-2"></i>Ver Pedidos
                                          </button>    

                                        <div class="row row-sm">
                                            <div class="col-lg-12">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div>
                                                            
                                                        <div class="row row-sm">	
                                                            <div class="col-sm-6">
                                                                <p class="text-muted card-sub-title">Total de Pedidos: </p>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p class="text-muted card-sub-title">Monto Total: $</p>
                                                            </div>
                                                        </div>
                                                   
                                        </div>
                                                        <div class="table-responsive">
                                                            <table class="table" id="example2">
                                                                <thead>
                                                                    <tr>
                                                                        {{-- <th class="wd-5p">#</th> --}}
                                                                        <th class="wd-10p">Orden de</th>
                                                                        {{-- <th class="wd-10">Proteína</th> --}}
                                                                        {{-- <th class="wd-10">Acomp</th> --}}
                                                                        <th class="wd-10p">Fecha</th>
                                                                        <th class="wd-10p">Precio</th>
                                                                        <th class="wd-15p">Adicional</th>
                                                                        <th class="wd-15p">Total</th>
                                                                        <th class="wd-15p">Enviada</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="bodyt">
                                                                   
                                                                   <tr>
                                                                    {{-- <td>1</td> --}}
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                   </tr>
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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