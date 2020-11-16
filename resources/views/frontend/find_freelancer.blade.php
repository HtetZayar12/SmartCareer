@extends('frontendtemplate')
@section('content')
<div class="container-fluid mb-5" >

		<div class="row">
			<div class="col-md-3 mt-5 d-none d-sm-block">
				<div class="container-fluid">
				    <div class="accordion mt-4" id="accordionExample">
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
			


		<div class="col-md-9" >
			<h4 class="mb-5 text-info"> 1000 / 34223 freelancers founded for you</h4>			

			<div class="row">
				
				<div class="jobs">
						<div class="col-md-12 col-lg-12 col-sm-12 mb-5 w-100" >
						<div class="shadow bg-white rounded">
							
					  		<div class="card-body">
						  		<img src="#" class="w-10 rounded-circle">
						  		<span><a href="#" class="text-decoration-none ">name</a></span>
						  		<hr class="bg-faded">
						  		<h5><a href="#" class="text-decoration-none py-5">iOS Developer </a></h5>
					    		

					    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					    		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					    		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				                </p>

				                <hr class="bg-faded">

					    			<span class="badge badge-pill badge-primary">&nbsp;Swift&nbsp;</span>

					    			<span class="badge badge-pill badge-primary">&nbsp;Angular JS&nbsp;</span>							    			
					  		</div>
						</div>
					</div>
					



					

					<div class="col-md-12 col-lg-12 col-sm-12 mb-5 w-100" >
						<div class="shadow bg-white rounded">
					  		<div class="card-body">
						  		<img src="#" class="w-10 rounded-circle">
						  		<span><a href="#" class="text-decoration-none ">Name</a></span>
						  		<hr class="bg-faded">
					    		<h5><a href="#" class="text-decoration-none">Fullstack Developer </a></h5>
					    		
					    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					    		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					    		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				                </p>

				                <hr class="bg-faded">

					    				<span class="badge badge-pill badge-primary">&nbsp;Java&nbsp;</span>
					    			
					    								    			
					    				
					    				<span class="badge badge-pill badge-primary">&nbsp;PHP&nbsp;</span>
					    			
					    								    			
					    				
					    				<span class="badge badge-pill badge-primary">&nbsp;Python&nbsp;</span>
					    			
					    								    			
					    				
					    				<span class="badge badge-pill badge-primary">&nbsp;Ruby on Rail&nbsp;</span>
					    			
					    								    			
					    				
					    				<span class="badge badge-pill badge-primary">&nbsp;.Net&nbsp;</span>
					    			
					    								    			
					    				
					    				<span class="badge badge-pill badge-primary">&nbsp;HTML&nbsp;</span>
					    			
					    								    			
					    				
					    				<span class="badge badge-pill badge-primary">&nbsp;CSS&nbsp;</span>
					    			
					    								    			
					    				
					    				<span class="badge badge-pill badge-primary">&nbsp;JavaScript&nbsp;</span>
					    			
					    								    			
					    				
					    				<span class="badge badge-pill badge-primary">&nbsp;Angular JS&nbsp;</span>
					    			
					    								    			
					    				
					    				<span class="badge badge-pill badge-primary">&nbsp;React&nbsp;</span>
				    			
					  		</div>
						</div>
					</div>

					<div class="offset-md-9 offset-7">
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
</div>



<script type="text/javascript" src="{{asset('frontend_asset/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend_asset/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


</body>
</html> 
@endsection

