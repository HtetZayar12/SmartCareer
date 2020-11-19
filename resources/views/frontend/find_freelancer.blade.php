@extends('frontendtemplate')
@section('content')
<div class="container-fluid mb-5" >

		<div class="row">
			<div class="col-md-3 mt-5 d-none d-sm-block">
				<div class="container-fluid">
				    <x-sidebar-component></x-sidebar-component>
			</div>

			</div>
		
		
		<div class="col-md-9" >
			<h5 class="text-info my-4">freelancers founded for you</h5>
			<div class="row">
				<div class="col-sm-12">
					<div class="jobs">
						@foreach($freelancers as $freelancer)
						<div class="card mb-5 shadow">          
				          <div class="card-body">
				            <div class="container">
				              <div class="row">
				                <div class="col-sm-3">
				                  <img src="{{$freelancer->photo}}" class=" rounded-circle align-self-center card-img">  
				                </div>
				                <div class="col-sm-9 mt-3">
				                  <h3>{{$freelancer->user->name}}</h3>
				                  <p class="text-info font-weight-bold">{{$freelancer->subcategory->name}}</p>
				                  <hr>
				                  <p style="font-size: 18px;">{{$freelancer->description}}</p>
				                  <div class="my-4 float-right">
				                    <a class="btn btn-info badge-pill px-5 float-right" 
									href="{{route('freelancerdetail',$freelancer->id)}}">Detail
									</a>
				                  </div>
				                </div>
				              </div>
				            </div>             
				          </div>          
				        </div>
						@endforeach
					</div>
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
			
@endsection
