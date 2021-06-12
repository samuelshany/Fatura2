	
	
        @extends('admin.dashboard')
	@section('title', 'Add Product')
	@section('content')
    <div class="section over-hide padding-top-10 padding-top-mob-nav section-background-24 background-img-top">	
			<div class="section-1400 padding-top-bottom-120">
				<div class="container-fluid">
					<div class="row justify-content-center">
						<div class="col-lg-7 col-xl-5">
                        @foreach ($errors->all() as $error)
                <h5 style="height: 10px; font-size:15px">{{ $error }}</h5>
            @endforeach
							<div class="section py-4 py-md-5 px-3 px-sm-4 px-lg-5 over-hide border-4 section-shadow-blue bg-white section-background-24 background-img-top form">
								<form class="section" action="{{url('/addProductHandel')}}" method="post" enctype="multipart/form-data">
                                @csrf									<h4 class="mb-4 text-sm-center">
										Add Product
									</h4>
                                    <div class="form-group">
										<select class="form-control" name="productCategory">
                                            @foreach($categories as $category)
                                                <option value="{{$category->categoryName}}"> {{$category->categoryName}}</option>
                                            @endforeach
                                        </select>
										
									</div>
									<div class="form-group">
										<input type="text" required name="productName" class="form-control my-2" placeholder="product name" autocomplete="off">
										
									</div>	
									<div class="form-group">
										<input type="text" required name="productPrice" class="form-control my-2" placeholder="product price" autocomplete="off">
										
									</div>
                                    <div class="form-group">
										<input type="text" required name="productAmount" class="form-control my-2" placeholder="product Amount" autocomplete="off">
										
									</div>
                                    <div class="form-group">
										<input type="text" required name="desc" class="form-control my-2" placeholder="product Description" autocomplete="off">
										
									</div>
                                    <div class="form-group">
										<input type="file" required name="productImage" class="form-control my-2" autocomplete="off">
										
									</div>
									<div class="row mt-4">	
										<div class="col-12 text-sm-center">
											<button type="submit" class="btn btn-dark-primary">Add<i class="fas fa-arrow-right size-22 ml-3"></i></button>  
										</div>
									</div>
								
								</form>									
							</div>	
						</div>		
					</div>
				</div>
			</div>
		</div>

    @endsection