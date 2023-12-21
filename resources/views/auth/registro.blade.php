@extends('layouts-verticalmenu-light.mastermenu')
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
			<h2 class="main-content-title tx-24 mg-b-5">Nuevo Usuario</h2>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{url('userindex')}}">Usuarios</a></li>
				<li class="breadcrumb-item active" aria-current="page">Nuevo Usuario</li>
			</ol>
		</div>
		<div class="d-flex">
			<div class="justify-content-center">
				<a class="btn btn-primary my-2 btn-icon-text" style="color: white" href="{{url('userindex')}}">
				  <i class="si si-action-undo mr-2"></i> Volver
				</a>
			</div>
		</div>
	</div>
    <div class="row row-sm">
        <div class="col-lg-12 col-md-12">
            <div class="card custom-card">
               
                <div class="card-body">
                    {{-- <form method="POST" action="{{ route('register') }}"> --}}
                        @csrf
                        <div class="row row-sm">
                            <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                                <div class="form-group has-success mg-b-0">
                                    <label for="name" class="col-md-4 col-form-label text-md-end" style="font-weight: 550">{{ __('Nombre') }} *</label>
                                    <input required id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    
                                    <label for="apell" class="col-md-4 col-form-label text-md-end mg-t-20" style="font-weight: 550;">{{ __('Apellidos') }}  *</label>
                                    <input required id="apell" type="text" class="form-control @error('name') is-invalid @enderror" name="apell" value="{{ old('Apellidos') }}" required autocomplete="name" autofocus>

                                    @error('apell')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                                <div class="form-group has-danger mg-b-0">
                                    <label for="email" class="col-md-4 col-form-label text-md-end" style="font-weight: 550">{{ __('Correo') }}  *</label>
                                    <input id="email" type="email" onchange="verificaemail()" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    
                                    <label for="cedula" class="col-md-4 col-form-label text-md-end mg-t-20" style="font-weight: 550;">{{ __('Cédula/Pasaporte') }}</label>
                                    <input id="cedula" onchange="verificaced()" type="text" class="form-control  @error('cedula') is-invalid @enderror" name="cedula" value="{{ old('cedula') }}" required autocomplete="cedula">
                                </div>
                            </div>
                            <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                                <div class="form-group has-danger mg-b-0">
                                    <label for="rol" class="col-md-4 col-form-label text-md-end mg-t-20" style="font-weight: 550">{{ __('Rol') }}</label>
                                    <select name="rol" id="rol" class="form-control select2">
                                        @foreach ($roles as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                                <div class="form-group has-danger mg-b-0">                                    
                                    <label for="dept" class="col-md-4 col-form-label text-md-end mg-t-20" style="font-weight: 550">{{ __('Departamento') }}</label>
                                    <select name="dept" id="dept" class="form-control select2">
                                        @foreach ($dept as $item2)
                                            <option value="{{$item2->id}}">{{$item2->departamento}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>


                        </div>
                        <input type="hidden" name="c_user" id="c_user" value="{{Auth::user()->email}}">
                        <input type="hidden" name="tipo_c" id="tipo_c" value="interno">

                            <p style="color: red"> * Campos Requeridos</p>
                        <div class="row mb-0">
                            <div class="col-md-12 offset-md-4">
                                <button onclick="createuser()" type="submit" class="btn btn-primary">
                                    {{ __('Crear') }}
                                </button>
                            </div>
                        </div>
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </div>
{{-- </div> --}}
@endsection
@section('script')
        <!-- Internal Select2 js-->
        <script src="{{URL::asset('assets/js/select2.js')}}"></script>

		<!-- Internal Jquery-Ui js-->
		<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

		<!-- Internal Jquery.maskedinput js-->
		<script src="{{URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>

		<!-- Internal Specturm-colorpicker js-->
		<script src="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>

		<!-- Internal Ion-rangeslider js-->
        <script src="{{URL::asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>

		<!-- Internal Form-elements js-->
		<script src="{{URL::asset('assets/js/form-elements.js')}}"></script>
@endsection