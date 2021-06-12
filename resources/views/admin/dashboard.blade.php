<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Fatura -  @yield('title')</title>
	<meta name="description"  content="" />
	<meta name="author" content="">
	<meta name="keywords"  content="" />
	<meta property="og:title" content="" />
	<meta property="og:type" content="" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="" />
	<meta property="og:image:width" content="470" />
	<meta property="og:image:height" content="246" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:card" content="" />
	<meta name="twitter:site" content="" />
	<meta name="twitter:domain" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:description" content="" />
	<meta name="twitter:image" content="" />

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="theme-color" content="#212121"/>
    <meta name="msapplication-navbutton-color" content="#212121"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121"/>
	
	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/animsition.min.css" />
	<link rel="stylesheet" href="css/unicons.css"/>
	<link rel="stylesheet" href="css/lighbox.min.css"/>
	<link rel="stylesheet" href="css/tooltip.min.css"/>
	<link rel="stylesheet" href="css/swiper.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<script src="https://kit.fontawesome.com/8c2459f9f4.js" crossorigin="anonymous"></script>		
	<!-- Favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
	
	
</head>
<body>	

	<div class="animsition">
	
        <!-- Navigation
		================================================== -->
				
        <div class="navigation-wrap cbp-af-header header-transparent">
            <div class="padding-on-scroll">
				<div class="section-1400">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12">
								<nav class="navbar navbar-expand-xl navbar-light">

									<a class="navbar-brand animsition-link" href="index.html"><img src="{{asset('images/1578905494228.jpg')}}"
											alt="logo"></a>

									<button class="navbar-toggler" type="button" data-toggle="collapse"
										data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
										aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"></span>
									</button>

									<div class="collapse navbar-collapse" id="navbarSupportedContent">
										<ul class="navbar-nav mr-xl-4 ml-auto pt-4 pt-xl-0">
											<li class="nav-item dropdown">
												<a class="nav-link" href="{{url('/addProduct')}}">Add product</a>
												
											</li>
											<li class="nav-item dropdown">
												<a class="nav-link" href="{{url('/addCategory')}}">Add category</a>
											
											</li>
											<li class="nav-item dropdown">
												<a class="nav-link" href="{{url('/sendCupone')}}">send Cupone</a>
											
											</li>
											<li class="nav-item dropdown mega-menu-dropdown-link">
												<a class="nav-link" href="{{url('/logout')}}">Logout</a>
																								
											</li>
										
											
										</ul>

									
										<div class="pb-3 pb-xl-0"></div>
									</div>

								</nav>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
        @yield('content')

        	
	</div>



	
<!-- JAVASCRIPT
================================================== -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins.js"></script> 
<script src="js/custom.js"></script> 
<!-- End Document
================================================== -->
</body>
</html>