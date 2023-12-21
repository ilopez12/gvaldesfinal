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
								<h2 class="main-content-title tx-24 mg-b-5">Ver Menú</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Menú</a></li>
									<li class="breadcrumb-item active" aria-current="page">Ver por Fecha</li>
								</ol>
							</div>
							<div class="d-flex">
								<div class="justify-content-center">
									<button type="button" class="btn btn-primary my-2 btn-icon-text">
									  <i class="fe fe-download-cloud mr-2"></i>Descargar
									</button>
								</div>
							</div>
						</div>
						<!-- End Page Header -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-12">
								<div class="card custom-card">
									<div class="card-body">
                                        @csrf
										<div class="row">
                                            <div class="col-sm-6">
                                                    <label for="">Desde</label>
                                                    <input type="date" name="desde" id="desde" class="form-control">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="">Hasta</label>
                                                <input type="date" name="hasta" id="hasta" class="form-control">
                                            </div>
                                        </div>
                                        <button onclick="traemenu()" type="button" class="btn btn-primary my-2 btn-icon-text">
                                            <i class="fe fe-search mr-2"></i>Ver Menu
                                          </button>    

                                        <div class="row row-sm">
                                            <div class="col-lg-12">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table" id="example2">
                                                                <thead>
                                                                    <tr>
                                                                        {{-- <th class="wd-5p">#</th> --}}
                                                                        <th class="wd-10p">Fecha</th>
                                                                        <th class="wd-10p">Día</th>
                                                                        <th class="wd-10">Listado Proteína</th>
                                                                        <th class="wd-10">Listado Acomp</th>
                                                                        
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="bodyt">
                                                                   
                                                                   <tr>
                                                                    {{-- <td>1</td> --}}
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