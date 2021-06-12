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
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/animsition.min.css" />
	<link rel="stylesheet" href="../css/unicons.css"/>
	<link rel="stylesheet" href="../css/lighbox.min.css"/>
	<link rel="stylesheet" href="../css/tooltip.min.css"/>
	<link rel="stylesheet" href="../css/swiper.min.css"/>
	<link rel="stylesheet" href="../css/style.css"/>
    <link rel="stylesheet" href="../css/all.min.css">
	<!-- Favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
	
	<script src="https://kit.fontawesome.com/8c2459f9f4.js" crossorigin="anonymous"></script>
</head>
<body>	
<h1>{{$mess}}</h1>
	<div class="animsition">
		<div class="section over-hide padding-top-120 padding-top-mob-nav pb-5 section-background-20 background-img-top">	
			<div class="section-1400 pt-xl-4">
				<div class="container-fluid padding-top-bottom-80">
					<div class="row">
						<div class="col-lg">
							<h2 class="display-8 mb-3">
								{{$product->productName}}
							</h2>
							
						</div>
						<div class="col-lg-auto align-self-center mt-4 mt-lg-0">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb no-border">
									<li class="breadcrumb-item"><a href="#" class="link link-dark-primary size-14" data-hover="Home">Home</a></li>
									<li class="breadcrumb-item"><a href="#" class="link link-dark-primary size-14" data-hover="Shop">Shop</a></li>
									<li class="breadcrumb-item active font-weight-500" aria-current="page"><span class="size-14">Product page</span></li>
								</ol>
							</nav>				
						</div>
					</div>
				</div>
			</div>
			<div class="section-1400">
				<div class="container-fluid">
					<div class="row justify-content-center">
						<div class="col-sm-8 col-md-6 col-lg-5 col-xl-4 pr-xl-5">
							<div class="section swiper-product-page pb-1 over-hide">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<a href="img/product-23.jpg" data-fancybox="gallery">
											<div class="section border-4 over-hide img-wrap">
												<img class="border-4" src="{{asset($product->productImage)}}" alt="">
											</div>
										</a>
									</div>
									<div class="swiper-slide">
										
									</div>
									<div class="swiper-slide">
										
									</div>
								</div>
							</div>
							<div class="row justify-content-center">
								<div class="col-8">
									<div class="section swiper-product-page-thumbs over-hide">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="section border-4 over-hide img-wrap product-thumbs">
													<img src="img/product-23.jpg" alt="">
												</div>
											</div>
											<div class="swiper-slide">
												<div class="section border-4 over-hide img-wrap product-thumbs">
													<img src="img/product-24.jpg" alt="">
												</div>
											</div>
											<div class="swiper-slide">
												<div class="section border-4 over-hide img-wrap product-thumbs">
													<img src="img/product-25.jpg" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-8 col-md-6 col-lg-7 col-xl-5 pr-xl-5 mt-5 mt-md-0">
							<div class="row">
								<div class="col">
									<h3 class="mb-0 font-weight-700">
										 <span>${{$product->productPrice}}</span>
									</h3>
								</div>
								<div class="col-auto align-self-center">
								
								</div>
							</div>
							<div class="row">
								<div class="col-12 pt-2 pb-3">
									<div class="section divider divider-gray"></div>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<p class="mb-0">
										{{$product->productDesc}}
									</p>
								</div>
							</div>
							<div class="row">
								<div class="col-12 pt-3">
									<div class="section divider divider-gray"></div>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-12">
								
								</div>
								<div class="col-12 col-md-9 col-lg-7 col-xl-6">
									<div class="form-group mx-auto">
									            
									</div>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-12">
									
								</div>
								<div class="col-12 col-md-9 col-lg-7 col-xl-6">
									<div class="form-group mx-auto">
									             
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 py-4">
									<div class="section divider divider-gray"></div>
								</div>
							</div>
							<div class="row">
                                <form action="{{url('/addToCart',$product->id)}}" method="post">@csrf  
								<div class="col-auto pr-sm-2 my-2">
									<div class="quantity shop-quantity">
										<input type="number" name="amount" min="1" max="9999" step="1" value="1" >
									</div>	
								</div>
								<div class="col-sm mt-2 ml-1 mt-sm-0 pl-sm-0">
									<button type="submit" class="btn btn-dark-primary"><i class="fas fa-cart size-20 mr-2"></i>Add to cart</button>
								</div>
                        </form>
							</div>
							<div class="row">
								<div class="col-12 py-4">
									<div class="section divider divider-gray"></div>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<p class="mb-0 text-center-v">
										<i class="fas fa-check size-22 color-primary mr-2"></i> Dynamic Color Options
									</p>
									<div class="w-100"></div>
									<p class="mb-0 text-center-v">
										<i class="fas fa-check size-22 color-primary mr-2"></i> Delivered in 3-5 Days
									</p>
									<div class="w-100"></div>
									<p class="mb-0 text-center-v">
										<i class="fas fa-check size-22 color-primary mr-2"></i> 30-Day Return Policy
									</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 mt-5 mt-xl-0">
							<div class="row">
								<div class="col-sm-6 col-lg-3 col-xl-12">
									<div class="section p-3 p-lg-4 border-4 bg-white landing-shadow-4">
										<div class="row">
											<div class="col-auto">
												<p class="mb-0 align-self-center">
													<i class="fas fa-archive-alt size-28 color-dark-blue"></i>
												</p>
											</div>
											<div class="col align-self-center">
												<p class="mb-0">
													Free shipping on orders over $50
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-lg-3 col-xl-12 mt-4 mt-sm-0 mt-xl-4">
									<div class="section p-3 p-lg-4 border-4 bg-white landing-shadow-4">
										<div class="row">
											<div class="col-auto">
												<p class="mb-0 align-self-center">
													<i class="fas fas-truck size-28 color-dark-blue"></i>
												</p>
											</div>
											<div class="col align-self-center">
												<p class="mb-0">
													Shipping on orders 3-5 day delivery
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-lg-3 col-xl-12 mt-4 mt-lg-0 mt-xl-4">
									<div class="section p-3 p-lg-4 border-4 bg-white landing-shadow-4">
										<div class="row">
											<div class="col-auto">
												<p class="mb-0 align-self-center">
													<i class="fas fas-redo size-28 color-dark-blue"></i>
												</p>
											</div>
											<div class="col align-self-center">
												<p class="mb-0">
													30-Day from order return policy
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-lg-3 col-xl-12 mt-4 mt-lg-0 mt-xl-4">
									<div class="section p-3 p-lg-4 border-4 bg-white landing-shadow-4">
										<div class="row">
											<div class="col-auto">
												<p class="mb-0 align-self-center">
													<i class="fas fa-shield-check size-28 color-dark-blue"></i>
												</p>
											</div>
											<div class="col align-self-center">
												<p class="mb-0">
													100% safe & secure checkout
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- section
		================================================== -->
       	
        </div>


	
<!-- JAVASCRIPT
================================================== -->
<script src="../js/jquery.min.js"></script>
	<script src="../js/popper.min.js"></script> 
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/plugins.js"></script> 
	<script src="../js/custom.js"></script> 
================================================== -->
</body>
</html>