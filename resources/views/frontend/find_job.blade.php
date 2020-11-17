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
	        				<button class="btn btn-link btn-block text-left text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseOne{{$i}}" aria-expanded="true" aria-controls="collapseOne{{$i}}">
	          				{{$category->name}}
	        				</button>
	      					</h2>
	    				</div>
						<div id="collapseOne{{$i}}" class="collapse @if($loop->first) {{'show'}} @endif" aria-labelledby="headingOne" data-parent="#accordionExample">
	      					<div class="card-body">
			        			@foreach($category->subcategories as $subcategory)
			        				<a class="btn btn-link text-decoration-none">{{$subcategory->name}}</a>
			        			
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
			<h6 class="text-info mb-3">Jobs founded for you</h6>
			<div class="row">
				<div class="col-sm-12">
					<div class="jobs">
						@foreach($jobs as $job)
							<div class="card mb-5 shadow">
								<div class="card-body px-5">
									<div class="row">
										<div class="col-sm-10">
											<h5 class="font-weight-bold">{{$job->name}}</h5>
										</div>
										<div class="col-sm-2">
											<h5 class="font-weight-bold">{{$job->salary->amount}}MMK</h5>
										</div>
										<div class="col-sm-12">
											<label>Close Date : </label>
											<span>{{$job->closedate}}</span>
										</div>
									</div>
									<hr>
									<p>{{$job->description}}</p>
									<div class="row">
										<div class="col-sm-9">
											<p class="badge badge-pill badge-dark p-2">{{$job->skill_one}}</p>
											<p class="badge badge-pill badge-dark p-2">{{$job->skill_two}}</p>
											<p class="badge badge-pill badge-dark p-2">{{$job->skill_three}}</p>
										</div>

										<div class="col-sm-3 float">
											<a class="btn btn-info badge-pill px-3 float-right" href="{{route('job.show',$job->id)}}">Detail</a>
										</div>
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



<script type="text/javascript" src="{{asset('frontend_asset/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend_asset/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


</body>
</html> 
@endsection

