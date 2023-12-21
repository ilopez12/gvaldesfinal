@extends('layouts-verticalmenu-light.master2')
@section('css')
@endsection
@section('content')

		<!-- Page -->
		<div class="page main-signin-wrapper">
            <form action="{{url('resetownpass')}}" method="POST">
@csrf
			<!-- Row -->
			<div class="row signpages text-center">
				<div class="col-md-12">
					<div class="card">
						<div class="row row-sm">
							<div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
								<div class="mt-4 pt-5 p-2 pos-absolute">
									<img src="{{URL::asset('assets/img/brand/logo-light.png')}}" class="header-brand-img mb-4" alt="logo">
									<div class="clearfix"></div>
									<img src="{{URL::asset('assets/img/svgs/user.svg')}}" class="ht-100 mb-0" alt="user">
									<h5 class="mt-4 text-white">Cambiar Contraseña</h5>
									{{-- <span class="tx-white-6 tx-13 mb-5 mt-xl-0">Signup to create, discover and connect with the global community</span> --}}
								</div>
							</div>
							<div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
								<div class="container-fluid">
									<div class="row row-sm">
										<div class="card-body mt-2 mb-2">
											<img src="{{URL::asset('assets/img/brand/logo.png')}}" class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
											<div class="clearfix"></div>
											{{-- <h5 class="text-left mb-2">Reset Your Password</h5>
											<p class="mb-4 text-muted tx-13 ml-0 text-left">It's free to signup and only takes a minute.</p> --}}
											
												<div class="form-group text-left">
													<label>Correo Electrónico</label>
													<input class="form-control" name="email" id="email" placeholder="Ingrese su correo" type="text">
												</div>
												<div class="form-group text-left">
													<label>Nueva Contraseña</label>
													<input class="form-control" name="pass" id="pass" placeholder="Ingrese su password" type="password">
												</div>
												<div class="form-group text-left">
													<label>Confirme Contraseña</label>
													<input class="form-control" name="confpass" id="confpass" placeholder="Ingrese su password" type="password">
												</div>
												<button class="btn ripple btn-main-primary btn-block">Reset Password</button>
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
        </form>
		</div>
		<!-- End Page -->

@endsection
@section('script')
<script src="{{URL::asset('assets/js/admin.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection