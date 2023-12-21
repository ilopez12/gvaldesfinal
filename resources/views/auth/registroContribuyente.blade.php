@extends('layouts-verticalmenu-light.master2')
@section('css')
@endsection

@section('content')
@if ($message = Session::get('existente'))
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
            title: "Usuario Existente!",  
            text: "El contribuyente ya ha sido registrado anteriormente. Para más Información, contactar con el departamento de Valorización",   
            icon: "warning",
            buttons: ["Iniciar Sesión", "Ok!"],
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
                swal.close();
            }else{
                window.location.href = "/login";
            }
          }); 
    </script>
  
@endif
@include('layout.response')
		<!-- Page -->
		<div class="page main-signin-wrapper">

			<!-- Row -->
			<div class="row signpages text-center">
				<div class="col-md-12">
					<div class="card">
						<div class="row row-sm" style="height: 100%;">
							<div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
								<div class="mt-5 p-2 pos-absolute">
									{{-- <img src="{{URL::asset('assets/img/brand/logo-light.png')}}" class="header-brand-img mb-4" alt="logo">
									<div class="clearfix"></div>
									<img src="{{URL::asset('assets/img/svgs/user.svg')}}" class="ht-100 mb-0" alt="user"> --}}
									{{-- <h5 class="mt-4 text-white">E-Valoriza</h5>
									<span class="tx-white-6 tx-13 mb-5 mt-xl-0">Crea tu cuenta </span> --}}
								</div>
							</div>
							<div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
								<div class="container-fluid">
									<div class="row row-sm" >
										<div class="card-body mt-2 mb-2">
											<img src="{{URL::asset('assets/img/brand/logo.png')}}" class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
											<div class="clearfix"></div>
											{{-- <h5 class="text-left mb-2">Creación de Usuario</h5> --}}
											{{-- <p class="mb-4 text-muted tx-13 ml-0 text-left">Ingresa tu RUC</p> --}}
											<form method="POST" action="{{url('/crearusuario')}}">
                                                @csrf
                                                <div class="row" style="padding-top: 15px">
                                                    <div class="col-12">
                                                        <div class="form-group text-left">
                                                            <label>Nombre</label>
                                                            <input required class="form-control" id="nombre" name="nombre" type="text">
                                                        </div>
                                                    </div>
        
                                                        <div class="col-12">
                                                            <div class="form-group text-left">
                                                            <label for="email" >{{ __('Celular') }}</label>                                                
                                                                <input id="email" type="number" class="form-control" onchange="validausuario()" name="email" value="" required autocomplete="email">

                                                            </div>
                                                        </div>
                                
                                                        <div class="col-12">                                                        
                                                            <div class="form-group text-left">
                                                                <label for="password">{{ __('Contraseña') }}</label>
                                                                <input id="password" type="password" class="form-control " name="password" required autocomplete="new-password">
                                
                                                            </div>
                                                        </div>
                                
                                                      
                                                </div>
                                                
												<button class="btn ripple btn-main-primary btn-block">Registrar</button>
											</form>
											<div class="text-left mt-5 ml-0">
												<p class="mb-0">Ya tienes una cuenta? <a href="{{url('login')}}">Iniciar Sesión</a></p>
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

		</div>
		<!-- End Page -->

@endsection
@section('script')
<script src="{{URL::asset('assets/js/admin.js')}}"></script>
<script src="{{URL::asset('assets/js/main.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection

