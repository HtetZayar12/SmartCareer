@extends('frontendtemplate')
@section('content')
<div class="container-fluid mb-5" >	
	<div class="row">
		<div class="col-md-3 mt-5 d-none d-sm-block">
			<div class="container-fluid">
			    <div class="accordion" id="accordionExample">
						@php $i=1; @endphp
						@foreach($categories as $category)
						<div class="card">
    					<div class="card-header" id="headingOne">
	      					<h2 class="mb-0">
	        				<button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne{{$i}}" aria-expanded="true" aria-controls="collapseOne{{$i}}">
	          				{{$category->name}}
	        				</button>
	      					</h2>
	    				</div>
						<div id="collapseOne{{$i}}" class="collapse @if($loop->first) {{'show'}} @endif" aria-labelledby="headingOne" data-parent="#accordionExample">
	      					<div class="card-body">
			        			@foreach($category->subcategories as $subcategory)
			        				<a class="btn btn-link">{{$subcategory->name}}</a>
			        			
			        			@endforeach
	     		 			</div>
						</div>
					</div>
	 				@php $i++; @endphp
	  				@endforeach
				</div>
			</div>
		</div>
		


		<div class="col-md-9 mt-5" >
			<h6 class="text-info mb-3">freelancers founded for you</h6>
			<div class="row">
				<div class="col-sm-12">
					<div class="jobs">
						@foreach($freelancers as $freelancer)
								<div class="card shadow mb-5">
									<div class="card-body px-5">
										<div class="row">
											<div class="col-sm-2">
												<img src="{{asset($freelancer->photo)}}" width="60px" height="60px" class="rounded-circle">
											</div>
											<div class="col-sm-10">
												<h5 class="font-weight-bold">{{$freelancer->user->name}}</h5>
							  					<p>{{$freelancer->subcategory->name}}</p>
											</div>
										</div>
										<hr>
										<p>{{$freelancer->description}}</p>
										<div>
											<a class="btn btn-info badge-pill px-5 float-right" 
											href="{{route('freelancerdetail',$freelancer->id)}}">Detail</a>
										</div>
									</div>
								</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>

		<div class="offset-11 mt-5">
			<nav>
			 		<ul class="pagination">            
              		<li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
        				<span class="page-link" aria-hidden="true">&lsaquo;</span>
        			</li>
            
 					<li class="page-item active" aria-current="page">
 						<span class="page-link">1</span>
 					</li>
       				<li class="page-item">
        				<a class="page-link" href="#" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
    				</li>
        		</ul>
			</nav>
		</div>
	</div>
</div>
			

			{{-- <div class="row">
				
			<div class="jobs">
				@foreach($freelancers as $freelancer)
				<a class="text-decoration-none text-dark" href="{{route('freelancerdetail',$freelancer->id)}}">
					<div class="col-sm-12 mb-5" >
						<div class="card shadow w-100 col-sm-12">
					  		<div class="card-body">
					  			<div class="row">
					  				<div class="col-4">
						  				<img src="{{asset($freelancer->photo)}}" width="60px" height="60px" class="rounded-circle">
						  			</div>
						  		
									<div class="col-8 mt-1">
										<h5 class="font-weight-bold">{{$freelancer->user->name}}</h5>
							  			<p>{{$freelancer->subcategory->name}}</p>
									</div>						  					    		
								</div>
					    		<p>{{$freelancer->description}}</p>   							
					    	</div>
						</div>
					</div>
				</a>
				@endforeach
				
				<div class="offset-10">
					<nav>
   				 		<ul class="pagination">            
                      		<li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                				<span class="page-link" aria-hidden="true">&lsaquo;</span>
                			</li>
                    
         					<li class="page-item active" aria-current="page">
         						<span class="page-link">1</span>
         					</li>
               				<li class="page-item">
                				<a class="page-link" href="#" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
            				</li>
                		</ul>
					</nav>
				</div>
			</div>
			</div>	
				
		</div>
	</div>
</div> --}}

@endsection

