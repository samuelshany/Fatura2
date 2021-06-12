
		
		<!-- Modal Search -->
		
	
        @extends('user.dashboard')
	@section('title', 'My Cart')
	@section('content')
		<!-- Modal Cart -->
		

		<!-- Primary Page Layout
		================================================== -->
		
		<!-- Hero
		================================================== -->

	
		<div class="section over-hide padding-top-120 padding-top-mob-nav padding-bottom-120 section-background-24 background-img-top">	
			<div class="section-1400 pt-xl-4">
				<div class="container-fluid padding-top-bottom-80">
					<div class="row">
						<div class="col-lg">
							<h2 class="display-8 mb-3">
								Shopping cart
							</h2>
						
						</div>
						<div class="col-lg-auto align-self-center mt-4 mt-lg-0">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb no-border">
									<li class="breadcrumb-item"><a href="#" class="link link-dark-primary size-14" data-hover="Home">Home</a></li>
									<li class="breadcrumb-item"><a href="#" class="link link-dark-primary size-14" data-hover="Shop">Shop</a></li>
									<li class="breadcrumb-item active font-weight-500" aria-current="page"><span class="size-14">Cart</span></li>
								</ol>
							</nav>				
						</div>
					</div>
				</div>
			</div>
			<div class="section-1400">
				<div class="container-fluid">
					<div class="row justify-content-center">
                    @foreach($cart as $car)
						<div class="col-12">
							<div class="section bg-light-2 border-4 py-5 py-sm-3 px-4 alert fade show mb-2" role="alert">
								<div class="row">
									<div class="col-sm-auto align-self-center text-right mt-n4 mt-sm-0">
										<a href="" class="link link-dark-primary link-normal" data-dismiss="alert"><i class="uil uil-multiply size-22"></i></a> 
									</div>
									<div class="w-100 d-block d-sm-none"></div>
									<div class="col-auto align-self-center shop-cart-img">
										<a href="#" class="animsition-link">
											<img class="border-4" src="{{$car->productImage}}" alt="">
										</a> 
									</div>
									<div class="w-100 d-block d-sm-none"></div>
									<div class="col align-self-center mt-3 mt-sm-0">
										<a href="#" class="link link-dark-primary link-normal mb-1 animsition-link">
											{{$car->productName}}
										</a> 
										
									</div>
									<div class="w-100 d-block d-lg-none"></div>
									<div class="col align-self-center mt-4 mt-lg-0">
										<h6 class="mb-0 color-secondary font-weight-700">
											${{$car->price}}
										</h6> 
									</div>
									<div class="w-100 d-block d-lg-none"></div>
									<div class="col-auto align-self-center mt-4 mt-lg-0">
										<div class="quantity shop-quantity light">
											<h5 class="mb-0 color-secondary font-weight-700"> {{$car->amount}} Pice</h5>
										</div>
									</div>
									<div class="w-100 d-block d-lg-none"></div>
									<div class="col align-self-center text-lg-right mt-4 mt-lg-0">
										<h6 class="mb-0 font-weight-700">
											${{$car->total}}
										</h6> 
									</div>
                                    <div class="col align-self-center text-lg-right mt-4 mt-lg-0">
										<h6 class="mb-0 font-weight-700">
											<form action="{{url('/deleteItem',$car->id)}}"> <button type="submit">delete</button></form>
										</h6> 
									</div>
								</div>
							</div>
						</div>
						@endforeach
						<div class="col-12 text-lg-right mt-3">
							<div class="row">
                            <form action="{{url('/applyCupone')}}" method="post">@csrf
								<div class="col col-sm-5 col-md-4 col-lg-2 align-self-center">
									<div class="form-group">
										<input type="text" name="cupone" class="form-contro" placeholder="Coupon code" autocomplete="off">
									</div>	
								</div>
								<div class="pl-0 col-auto align-self-center">
									<button class="btn btn-light-dark">
										Apply<span class="d-none d-sm-inline ml-1">coupon</span>
									</button> 
								</div>
								<div class="w-100 d-block d-md-none"></div>
                                </form>
							</div>
						</div>
						<div class="col-12 text-lg-right mt-4">
							<h5 class="mb-3">
								Cart totals
							</h5> 
						</div>
						<div class="col-lg offset-lg-8 offset-xl-9">
							<div class="row">
								<div class="col">
									
								</div>
								<div class="col-auto">
									
								</div>
							</div>
						</div>
						<div class="col-lg offset-lg-8 offset-xl-9">
							<div class="row">
								<div class="col">
									<h5 class="mb-0">
										Total:
									</h5> 
								</div>
								<div class="col-auto">
									<h5 class="mb-0">
										${{$total}}
									</h5> 
								</div>
							</div>
						</div>
						<div class="col-12 text-lg-right mt-4">
							<a href="{{url('/prooceed')}}" class="btn btn-dark-primary animsition-link">
								Proceed to checkout
								<i class="uil uil-arrow-right size-20 ml-2"></i>
							</a> 
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- section
		================================================== -->

	
	@endsection