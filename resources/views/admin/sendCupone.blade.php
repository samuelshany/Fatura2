	
	
        @extends('admin.dashboard')
	@section('title', 'Add Category')
	@section('content')
    <div class="section over-hide padding-top-10 padding-top-mob-nav section-background-24 background-img-top">	
			<div class="section-1400 padding-top-bottom-120">
				<div class="container-fluid">
					<div class="row justify-content-center">
						<div class="col-lg-7 col-xl-5">
                        @foreach ($errors->all() as $error)
                <h5 style="height: 10px; font-size:15px">{{ $error }}</h5>
            @endforeach
            @if($mess != null)
            <h1>{{$mess}}</h1>
            @endif
							<div class="section py-4 py-md-5 px-3 px-sm-4 px-lg-5 over-hide border-4 section-shadow-blue bg-white section-background-24 background-img-top form">
								<form class="section" action="{{url('/sendCuponeH')}}" method="post">
                                @csrf									<h4 class="mb-4 text-sm-center">
										send cupone
									</h4>
									<div class="form-group">
										<input type="email" required name="email" class="form-style big gray-version no-shadow form-style-with-icon section-shadow-blue" placeholder="email" autocomplete="off">
										
									</div>	
									<div class="form-group my-2">
										<input type="text" required name="name" class="form-style big gray-version no-shadow form-style-with-icon section-shadow-blue" placeholder="cupone name" autocomplete="off">
										
									</div>
                                    <div class="form-group">
										<input type="text"  required name="value" class="form-style big gray-version no-shadow form-style-with-icon section-shadow-blue" placeholder="value" autocomplete="off">
										
									</div>
									<div class="row mt-4">	
										<div class="col-12 text-sm-center">
											<button type="submit" class="btn btn-dark-primary">send<i class="fas fa-arrow-right size-22 ml-3"></i></button>  
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