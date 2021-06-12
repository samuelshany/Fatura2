<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Fatura - Login</title>
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
    <link rel="stylesheet" href="css/all.min.css">
	<!-- Favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
	
	<script src="https://kit.fontawesome.com/8c2459f9f4.js" crossorigin="anonymous"></script>
</head>
<body>	

	<div class="animsition">
	
        <!-- Navigation
		================================================== -->
				
      
		
		<!-- Modal Search -->
		
		
		
		<!-- Modal Cart -->
		
		

		<!-- Primary Page Layout
		================================================== -->
		
		<!-- Hero
		================================================== -->

		<div class="section over-hide padding-top-10 padding-top-mob-nav section-background-24 background-img-top">	
			<div class="section-1400 padding-top-bottom-120">
				<div class="container-fluid">
					<div class="row justify-content-center">
						<div class="col-lg-7 col-xl-5">
                            @if($mess != null)
                                <h1>{{$mess}}</h1>
                            @endif
							<div class="section py-4 py-md-5 px-3 px-sm-4 px-lg-5 over-hide border-4 section-shadow-blue bg-white section-background-24 background-img-top form">
								<form class="section" action="{{url('/loginHandel')}}" method="post">
                                @csrf									<h4 class="mb-4 text-sm-center">
										Sign in.
									</h4>
									<div class="form-group">
										<input type="email" name="email" class="form-style big gray-version no-shadow form-style-with-icon section-shadow-blue" placeholder="Username" autocomplete="off">
										<i class="input-icon big fas fa-user"></i>
									</div>	
									<div class="form-group mt-3">
										<input type="password" name="password" class="form-style big gray-version no-shadow form-style-with-icon section-shadow-blue" placeholder="Password" autocomplete="off">
										<i class="input-icon big fas fa-unlock-alt"></i>
									</div>
									<div class="row mt-3">
										<div class="col pr-0">	
											
										</div>
										<div class="col-auto align-self-center text-right pl-0">	
											<a href="recovery.html" class="link link-gray-primary size-15 font-weight-500 animsition-link" data-hover="Forgot password?">Forgot password?</a> 
										</div>
									</div>
									<div class="row mt-4">	
										<div class="col-12 text-sm-center">
											<button type="submit" class="btn btn-dark-primary">Sign in<i class="fas fa-arrow-right size-22 ml-3"></i></button>  
										</div>
									</div>
									<p class="mt-4 mb-0 text-sm-center size-16">
										Not registered? <a href="{{url('/register')}}" class="link link-dark-primary-2 link-normal animsition-link">Create an account</a> 
									</p>
								</form>									
							</div>	
						</div>		
					</div>
				</div>
			</div>
		</div>

		<!-- Footer
		================================================== -->



	 
		
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