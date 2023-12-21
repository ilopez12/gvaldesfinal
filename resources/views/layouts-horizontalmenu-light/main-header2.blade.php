			<!-- Main Header-->
			<div class="main-header side-header">
				<div class="container">
					<div class="main-header-left">
						<a class="main-header-menu-icon d-lg-none" href="" id="mainNavShow"><span></span></a>
						<a class="main-logo" href="{{url('/menu')}}">
							gvaldes
							{{-- <img src="{{URL::asset('assets/img/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
							<img src="{{URL::asset('assets/img/brand/logo-light.png')}}" class="header-brand-img desktop-logo theme-logo" alt="logo"> --}}
						</a>
					</div>
					<div class="main-header-center">
						<div class="responsive-logo">
							<a href="{{url('menu')}}"><img src="{{URL::asset('assets/img/brand/logo.png')}}" class="mobile-logo" alt="logo"></a>
							<a href="{{url('menu')}}"><img src="{{URL::asset('assets/img/brand/logo-light.png')}}" class="mobile-logo-dark" alt="logo"></a>
						</div>
						
					</div>
					<div class="main-header-right">
						<div class="dropdown header-search">
							<a class="nav-link icon header-search">
								<i class="fe fe-search"></i>
							</a>
							<div class="dropdown-menu">
								<div class="main-form-search p-2">
									
								</div>
							</div>
						</div>
						
						<div class="dropdown d-md-flex">
							<a class="nav-link icon full-screen-link" href="">
								<i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
								<i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
							</a>
						</div>
						<div class="dropdown main-profile-menu">
							<a class="d-flex" href="">
								<span class="main-img-user" ><img alt="avatar" src="{{URL::asset('assets/img/users/1.jpg')}}"></span>
							</a>
							<div class="dropdown-menu">
								<div class="header-navheading">
									<h6 class="main-notification-title">{{Auth::user()->name}}</h6>
									<p class="main-notification-text"></p>
								</div>
								<a class="dropdown-item" href="{{'/menu/all'}}">
									<i class="mdi mdi-animation"></i> Todos los pedidos
								</a>
								<a class="dropdown-item" href="{{url('logout')}}">
									<i class="fe fe-power"></i> Cerrar Sesion
								</a>
							</div>
						</div>
						<div class="main-header-notification">
							<a class="nav-link icon" href="{{url('menu/carrito')}}">
								<i class="fa fa-cart-plus header-icons"></i>
									<span class="badge badge-danger nav-link-badge">{{$pendientes}}</span>
							</a>
						</div>
						
						<button class="navbar-toggler navresponsive-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
							aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
							<i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
						</button><!-- Navresponsive closed -->
					</div>
				</div>
			</div>
			<!-- End Main Header-->