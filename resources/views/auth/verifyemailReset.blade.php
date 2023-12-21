@extends('layouts-verticalmenu-light.master2')
@section('css')
@endsection
@section('content')
@if ($message = Session::get('NC'))
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
	    swal("Código Erroneo", "El código ingresado no coincide, verifique y vuelva a ingresarlo", "warning");
</script>
@endif
@if ($message = Session::get('EX'))
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
	   swal("Tiempo Exedido", "Excedio el tiempo para el código de verificación, debe generar uno nuevo", "warning");
</script>
@endif

		<!-- Page -->
		<div class="page main-signin-wrapper">

			<!-- Row -->
			<div class="row signpages text-center">
				<div class="col-md-12">
					<div class="card">
						<div class="row row-sm">
							
							<div class="col-lg-12 col-xl-12 col-xs-12 col-sm-12 login_form ">
								<div class="container-fluid">
									<div class="row row-sm">
										<div class="card-body mt-2 mb-2">
											<img src="{{URL::asset('assets/img/brand/logo.png')}}" class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
											<div class="clearfix"></div>
											<i class="zmdi zmdi-lock" data-toggle="tooltip" title="" data-original-title="zmdi zmdi-lock"></i>
											<h3> Confirmar tu e-mail</h3>
											<p>Hemos enviado un código de verificación a {{$dat3}} para asegurarnos de que eres realmente tú. (mira en tu carpeta de correo no deseado).</p> 
											<form action="{{url('resets')}}" method="POST">
											@csrf
											<input type="hidden" name="email" id="email" value="{{$dat3}}">{{-- <form > --}}
                                                <input type="hidden" id="id" name="id" value="{{$dat2}}">
                                                <input type="hidden" id="pass" name="pass" value="{{$dat1}}">
												<div class="form-group text-left">
													{{-- <label>Ingrese código de Verificación</label> --}}
													<input class="form-control" id="codigo" name="codigo" placeholder="Ingrese código de Verificación" type="text" value="">
												</div>
												<button class="btn ripple btn-main-primary btn-block">Confirmar</button>
											</form>
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