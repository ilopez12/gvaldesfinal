			<!-- Sidemenu -->
			<div class="main-sidebar main-sidebar-sticky side-menu">
				<div class="sidemenu-logo">
					<a class="main-logo" href="{{url('index')}}">
						<img src="{{URL::asset('assets/img/brand/logo-light.png')}}" class="header-brand-img desktop-logo" alt="logo">
						<img src="{{URL::asset('assets/img/brand/icon-light.png')}}" class="header-brand-img icon-logo" alt="logo">
						<img src="{{URL::asset('assets/img/brand/logo.png')}}" class="header-brand-img desktop-logo theme-logo" alt="logo">
						<img src="{{URL::asset('assets/img/brand/icon.png')}}" class="header-brand-img icon-logo theme-logo" alt="logo">
					</a>
				</div>
				<div class="main-sidebar-body">
					<ul class="nav">
						<li class="nav-header"><span class="nav-label">Inicio</span></li>
						<li class="nav-item">
							<a class="nav-link" href="{{url('/')}}"><span class="shape1"></span><span class="shape2"></span><i class="ti-home sidemenu-icon"></i><span class="sidemenu-label">Inicio</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-wallet sidemenu-icon"></i><span class="sidemenu-label">Menu</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('admin')}}">Nuevo Menú</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('admin/all')}}">Todos los Menú</a>
								</li>
								
								
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-shopping-cart-full sidemenu-icon"></i><span class="sidemenu-label">Pedidos</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('menu/pedidosday')}}">Pedidos del día</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('menu/rango')}}">Todos los pedidos</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{url('menu')}}"><span class="shape1"></span><span class="shape2"></span><i class="ti-server sidemenu-icon"></i><span class="sidemenu-label">Vista Menú</span></a>
						</li>
						<li class="nav-header"><span class="nav-label">Reportes</span></li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-agenda sidemenu-icon"></i><span class="sidemenu-label">Reportes</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('tablebasic')}}">Basic Tables</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('tabledata')}}">Data Tables</a>
								</li>
							</ul>
						</li>
						<li class="nav-header"><span class="nav-label">Administración de Usuarios</span></li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-package sidemenu-icon"></i><span class="sidemenu-label">Usuarios</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('alerts')}}">Alerts</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('avatar')}}">Avatar</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('breadcrumbs')}}">Breadcrumbs</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('buttons')}}">Buttons</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('badge')}}">Badge</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('dropdown')}}">Dropdown</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('thumbnails')}}">Thumbnails</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('listgroup')}}">List Group</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('navigation')}}">Navigation</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('pagination')}}">Pagination</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('popover')}}">Popover</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('progress')}}">Progress</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('spinners')}}">Spinners</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('mediaobject')}}">Media Object</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('typography')}}">Typography</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('tooltip')}}">Tooltip</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('toast')}}">Toast</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('tags')}}">Tags</a>
								</li>
							</ul>
						</li>
						
						
						
					</ul>
				</div>
			</div>
			<!-- End Sidemenu -->