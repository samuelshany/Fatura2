
		
		<!-- Modal Search -->
		
	
	@extends('user.dashboard')
	@section('title', 'Market')
	@section('content')
		<!-- Modal Cart -->
		

		<!-- Primary Page Layout
		================================================== -->
		
		<!-- Hero
		================================================== -->

		<div class="section over-hide padding-top-120 padding-top-mob-nav pb-5 section-background-20 background-img-top">	
			<div class="section-1400 pt-xl-4">
				<div class="container-fluid padding-top-bottom-80">
					<div class="row">
						<div class="col-lg">
							<h2 class="display-8 mb-3">
								Shop 
							</h2>
							
						</div>
						<div class="col-lg-auto align-self-center mt-4 mt-lg-0">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb no-border">
									<li class="breadcrumb-item"><a href="#" class="link link-dark-primary size-14" data-hover="Home">Home</a></li>
									<li class="breadcrumb-item active font-weight-500" aria-current="page"><span class="size-14">Shop</span></li>
								</ol>
							</nav>				
						</div>
					</div>
				</div>
			</div>
			<div class="section-1400">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12 text-left pb-4">
							<button class="btn btn-filter-tag-small font-weight-700 filter mr-3 position-relative" data-filter="all"><a href="{{url('/market')}}">All categories</a></button>
							@foreach($categories as $category)
							<button class="btn btn-filter-tag-small font-weight-700 filter mr-3 position-relative" data-filter="all"><a href="{{url('/filterProducts',$category->id)}}">{{$category->categoryName}}</a></button>
							@endforeach
						</div>
					</div>
					<div class="row shop-mix-wrapper-1">
						@foreach($products as $product)
						<div class="col-sm-6 col-lg-4 col-xl-3 pb-4 shop-mix-wrap-1 woman">
							<div class="section shop-wrap-3 img-wrap border-4">
								<img class="border-4" src="{{asset($product->productImage)}}" alt="">
								<div class="shop-wrap-2-left">
									<div class="shop-wrap-2-left-circle bg-blue color-white size-13 font-weight-600">new</div>
								</div>
								<div class="shop-wrap-2-right">
									<a href="img/product-13.jpg" class="shop-wrap-2-right-circle" data-fancybox=""><i class="fas fa-search size-16"></i></a>
									<a href="product-1.html" class="shop-wrap-2-right-circle animsition-link mt-2"><i class="fas fa-plus size-16"></i></a>
									<a href="#" class="shop-wrap-2-right-circle mt-2"><i class="fas fa-heart size-16"></i></a>
								</div>
								<div class="shop-wrap-2-text">
									<div class="shop-wrap-2-size">
										<p class="mb-0 color-white text-uppercase size-13 font-weight-600">
											<span class="mx-1">s</span><span class="mx-1">m</span><span class="mx-1">l</span><span class="text-line-through color-gray-dark mx-1">xl</span>
										</p>
									</div>
									<div class="row">
										<div class="col">
											<h6 class="mb-2">
												<a href="#" class="link-heading animsition-link">{{$product->productName}}</a>
											</h6>
											<p class="lead mb-1 font-weight-600">
												<span class="color-primary">${{$product->productPrice}}</span>
											</p>
											
										</div>
										<div class="col-auto align-self-center">
											<p class="mb-0">
												<a href="{{url('/cart',$product->id)}}" class="link-heading animsition-link">
													<i class="fas fa-cart size-28"></i>
													<span class="btn-small-icon bg-dark-blue color-white">+</span>
												</a>
											</p>
										</div>
									</div>
								</div>
							</div>	
						</div>
						@endforeach

				
					</div>
				</div>
			</div>
			<div class="section-1400">
				<div class="container-fluid">
					<div class="row justify-content-center">
						<div class="col-12 pt-4">
							<nav aria-label="Page navigation example">
								<ul class="pagination justify-content-center">
									<li class="page-item disabled">
										<a class="page-link" href="#" tabindex="-1" aria-disabled="true">
											<span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
										</a>
									</li>
									<li class="page-item active"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item">
										<a class="page-link" href="#" aria-label="Next">
											<span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- section
		================================================== -->

	
	@endsection