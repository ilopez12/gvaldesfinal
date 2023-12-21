@extends('layouts-verticalmenu-light.master2')
@section('css')
@endsection
@section('content')
@if ($message =  Session::get('success'))
<script>
    swal({
        title: "Usuario Creado!",     
        icon: "success",
        button: {
            text: "Ok!",
            closeModal: false,
        },
        })
        .then((willDelete) => {
        if (willDelete) {
            window.location.href = "/login";
        }
        });
</script>
@endif
		<!-- Page -->
		<div class="page main-signin-wrapper">
	<form method="POST" action="{{ route('login') }}">
                        @csrf
			<!-- Row -->
			<div class="row signpages text-center">
				<div class="col-md-12">
					<div class="card">
						<div class="row row-sm">
							<div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
								{{-- <div class="mt-5 pt-4 p-2 pos-absolute"> --}}
									{{-- <img src="{{URL::asset('assets/img/brand/logo-light.png')}}" class="header-brand-img mb-4" alt="logo"> --}}
									{{-- <div class="clearfix"></div> --}}
									<img src="{{URL::asset('assets/img/logo2.jpg')}}" class="ht-100 mb-0" alt="user">
									{{-- <h5 class="mt-4 text-white">Create Your Account</h5>
									<span class="tx-white-6 tx-13 mb-5 mt-xl-0">Signup to create, discover and connect with the global community</span> --}}
								{{-- </div> --}}
							</div>
							<div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
								<div class="container-fluid">
									<div class="row row-sm">
										<div class="card-body mt-2 mb-2">
											<img src="{{URL::asset('assets/img/brand/logo.png')}}" class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
											<div class="clearfix"></div>
											<form>
												<h5 class="text-left mb-2">Iniciar Sesión</h5>
												{{-- <p class="mb-4 text-muted tx-13 ml-0 text-left">Signin to create, discover and connect with the global community</p> --}}
												<div class="form-group text-left">
													<label>Teléfono</label>
													<input class="form-control"  type="number" name="email" id="email">
												</div>
												<div class="form-group text-left">
													<label>Contraseña</label>
													<input class="form-control" name="password" id="password" type="password">
												</div>
												<button class="btn ripple btn-main-primary btn-block">Iniciar</button>
											</form>
											<div class="text-left mt-5 ml-0">
												{{-- <div class="mb-1"><a href="">Forgot password?</a></div> --}}
												<div>No tienes cuenta? <a href="/registrar">Registrate</a></div>
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
	</form>
		</div>
		<!-- End Page -->

@endsection
@section('script')
<script src="{{URL::asset('assets/js/main.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection