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
						<li class="nav-header"><span class="nav-label">Dashboard</span></li>
						<li class="nav-item">
							<a class="nav-link" href="{{url('index')}}"><span class="shape1"></span><span class="shape2"></span><i class="ti-home sidemenu-icon"></i><span class="sidemenu-label">Dashboard</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-wallet sidemenu-icon"></i><span class="sidemenu-label">Crypto Currencies</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('cryptodashbaord')}}">Dashboard</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('cryptomarket')}}">Marketcap</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('cryptocurrencyexchange')}}">Currency exchange</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('cryptobuysell')}}">Buy & Sell</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('cryptowallet')}}">Wallet</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('cryptotranscations')}}">Transcations</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-shopping-cart-full sidemenu-icon"></i><span class="sidemenu-label">E-Commerce</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('ecommercedashboard')}}">Dashboard</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('ecommerceproducts')}}">Products</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('ecommerceproductdetails')}}">Product Details</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('ecommercecart')}}">Cart</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('ecommercecheckout')}}">Checkout</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('ecommerceorders')}}">Orders</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('ecommerceaccount')}}">Account</a>
								</li>
							</ul>
						</li>
						<li class="nav-header"><span class="nav-label">Applications</span></li>
						<li class="nav-item">
							<a class="nav-link" href="{{url('widgets')}}"><span class="shape1"></span><span class="shape2"></span><i class="ti-server sidemenu-icon"></i><span class="sidemenu-label">Widgets</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-email sidemenu-icon"></i><span class="sidemenu-label">Mail</span><span class="badge badge-warning side-badge">2</span></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('mailinbox')}}">Mail-Inbox</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('viewmail')}}">View-Mail</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-write sidemenu-icon"></i><span class="sidemenu-label">Apps</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('chat')}}">Chat</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('cards')}}">Cards</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('calendar')}}">Calendar</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('contacts')}}">Contacts</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-face-smile sidemenu-icon"></i><span class="sidemenu-label">Icons</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('icons01')}}">Font Awesome</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('icons02')}}">Material Design Icons</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('icons03')}}">Simple Line Icons</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('icons04')}}">Feather Icons</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('icons05')}}">Ionic Icons</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('icons06')}}">Flag Icons</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('icons07')}}">Pe7 Icons</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('icons08')}}">Themify Icons</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('icons09')}}">Typicons Icons</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('icons10')}}">Weather Icons</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('icons11')}}">Material Icons</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-map-alt sidemenu-icon"></i><span class="sidemenu-label">Maps</span><span class="badge badge-secondary side-badge">2</span></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('mapmapel')}}">Mapel Maps</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('mapvector')}}">Vector Maps</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-agenda sidemenu-icon"></i><span class="sidemenu-label">Tables</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('tablebasic')}}">Basic Tables</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('tabledata')}}">Data Tables</a>
								</li>
							</ul>
						</li>
						<li class="nav-header"><span class="nav-label">Components</span></li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-package sidemenu-icon"></i><span class="sidemenu-label">Elements</span><i class="angle fe fe-chevron-right"></i></a>
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
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-briefcase sidemenu-icon"></i><span class="sidemenu-label">Advanced UI</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('accordion')}}">Accordion</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('carousel')}}">Carousel</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('collapse')}}">Collapse</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('counters')}}">Counters</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('modals')}}">Modals</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('timeline')}}">Timeline</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('darggablecard')}}">Darggable-Cards</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('sweetalert')}}">Sweet Alert</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('rating')}}">Ratings</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('search')}}">Search</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('userlist')}}">Userlist</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('blog')}}">Blog</a>
								</li>
							</ul>
						</li>
						<li class="nav-header"><span class="nav-label">Forms &amp; Charts</span></li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-receipt sidemenu-icon"></i><span class="sidemenu-label">Forms</span><span class="badge badge-info side-badge">6</span></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('formelements')}}">Form Elements</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('formadvanced')}}">Advanced Forms</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('formlayouts')}}">Form Layouts</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('formvalidation')}}">Form Validation</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('formwizards')}}">Form Wizards</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('formeditor')}}">WYSIWYG Editor</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-bar-chart-alt sidemenu-icon"></i><span class="sidemenu-label">Charts</span><span class="badge badge-danger side-badge">5</span></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('chartmorris')}}">Morris Charts</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('chartflot')}}">Flot Charts</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('chartchartjs')}}">ChartJS</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('chartsparkpeity')}}">Sparkline &amp; Peity</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('chartechart')}}">Echart</a>
								</li>
							</ul>
						</li>
						<li class="nav-header"><span class="nav-label">Other Pages</span></li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-palette sidemenu-icon"></i><span class="sidemenu-label ">Pages</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('profile')}}">Profile</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('invoice')}}">Invoice</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('pricing')}}">Pricing</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('gallery')}}">Gallery</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('faq')}}">Faqs</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('successmessage')}}">Success Message</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('dangermessage')}}">Danger Message</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('warningmessage')}}">Warning Message</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('empty')}}">Empty Page</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-shield sidemenu-icon"></i><span class="sidemenu-label">Utilities</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('background')}}">Background</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('border')}}">Border</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('display')}}">Display</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('flex')}}">Flex</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('height')}}">Height</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('margin')}}">Margin</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('padding')}}">Padding</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('position')}}">Position</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('width')}}">Width</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('extras')}}">Extras</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-lock sidemenu-icon"></i><span class="sidemenu-label">Custom Pages</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('signin')}}">Sign In</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('signup')}}">Sign Up</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('forgot')}}">Forgot Password</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('reset')}}">Reset Password</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('lockscreen')}}">Lockscreen</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('underconstruction')}}">UnderConstruction</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('error404')}}">404 Error</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{url('error500')}}">500 Error</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<!-- End Sidemenu -->