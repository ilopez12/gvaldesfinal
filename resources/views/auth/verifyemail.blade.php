@extends('layouts-verticalmenu-light.master2')
@section('css')
@endsection
@section('content')

		<!-- Page -->
		<div class="page main-signin-wrapper">

			<!-- Row -->
			<div class="row signpages text-center">
				<div class="col-md-12">
					<div class="card">
						<div class="row row-sm">
							<div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
								<div class="mt-3 pt-3 p-2 pos-absolute">
									<img src="{{URL::asset('assets/img/brand/logo-light.png')}}" class="header-brand-img mb-4" alt="logo">
									<div class="clearfix"></div>
									<img src="{{URL::asset('assets/img/svgs/user.svg')}}" class="ht-100 mb-0" alt="user">
									{{-- <h5 class="mt-4 text-white">Reset Your Password</h5> --}}
									<span class="tx-white-6 tx-13 mb-5 mt-xl-0">Verificación de correo</span>
								</div>
							</div>
							<div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
								<div class="container-fluid">
									<div class="row row-sm">
										<div class="card-body mt-2 mb-2">
											<img src="{{URL::asset('assets/img/brand/logo.png')}}" class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
											<div class="clearfix"></div>
											{{-- <h5 class="text-left mb-2">Forgot Password</h5> --}}
											<h3> Confirmar tu e-mail</h3>
											<p>Hemos enviado un código de verificación a {{$info->email}} para asegurarnos de que eres realmente tú. (mira en tu carpeta de correo no deseado).</p> 
											
											@csrf
											<input type="hidden" name="email" id="email" value="{{$info->email}}">{{-- <form > --}}
                                                <input type="hidden" id="id" name="id" value="{{$info->id}}">
												<div class="form-group text-left">
													{{-- <label>Ingrese código de Verificación</label> --}}
													<input class="form-control" id="codigo" name="codigo" placeholder="Ingrese código de Verificación" type="text" value="">
												</div>
												<button onclick="verificacodigo()" class="btn ripple btn-main-primary btn-block">Confirmar</button>
											{{-- </form> --}}
											<div class="card-footer border-top-0 pl-0 mt-3 text-left ">
												{{-- <p>Did you remembered your password?</p> --}}
												<p class="mb-0"><a href="{{url('login')}}">Iniciar Sesión</a></p>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection