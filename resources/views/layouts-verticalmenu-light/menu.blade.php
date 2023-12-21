			<!-- Sidemenu -->
			<div class="main-sidebar main-sidebar-sticky side-menu">
				<div class="sidemenu-logo">
					<a class="main-logo" href="{{url('index')}}" style="color: white">
						gvaldes
						{{-- <img src="{{URL::asset('assets/img/brand/logo-light.png')}}" class="header-brand-img desktop-logo" alt="logo">
						<img src="{{URL::asset('assets/img/brand/icon-light.png')}}" class="header-brand-img icon-logo" alt="logo">
						<img src="{{URL::asset('assets/img/brand/logo.png')}}" class="header-brand-img desktop-logo theme-logo" alt="logo">
						<img src="{{URL::asset('assets/img/brand/icon.png')}}" class="header-brand-img icon-logo theme-logo" alt="logo"> --}}
					</a>
				</div>
				<div class="main-sidebar-body">
					<ul class="nav">
						<li class="nav-header"><span class="nav-label"></span></li>
						<li class="nav-item">
							<a class="nav-link" href="{{url('/home')}}"><span class="shape1"></span><span class="shape2"></span><i class="ti-home sidemenu-icon"></i><span class="sidemenu-label">Inicio</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="{{ url('/') }}"><span class="shape1"></span><span class="shape2"></span><i class=" fe fe-book-open"></i><span class="sidemenu-label">Menú</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="nav-sub">
										<li class="nav-sub-item">
											<a class="nav-sub-link " href="/admin"><span class="shape1"></span><span class="shape2"></span><i class="sidemenu-icon"></i><span class="sidemenu-label">Nuevo Menú</span></a>
											<a class="nav-sub-link " href="/admin/all"><span class="shape1"></span><span class="shape2"></span><i class="sidemenu-icon"></i><span class="sidemenu-label">Todos los Menú</span></a>
										</li>
									</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="fe fe-file-text"></i><span class="sidemenu-label">Pedidos</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="nav-sub">
										<li class="nav-sub-item">
											<a class="nav-sub-link " href="{{ url('menu/pedidosday') }}"><span class="shape1"></span><span class="shape2"></span><i class="sidemenu-icon"></i><span class="sidemenu-label">Pedidos del día</span></a>
											<a class="nav-sub-link " href="{{ url('menu/rango') }}"><span class="shape1"></span><span class="shape2"></span><i class="sidemenu-icon"></i><span class="sidemenu-label">Todos los pedidos</span></a>
										</li>
									</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{url('/menu')}}"><span class="shape1"></span><span class="shape2"></span><i class="fe fe-file"></i><span class="sidemenu-label"> Vista Menú</span></a>
						</li>
					</ul>
				</div>
			</div>
			<!-- End Sidemenu -->