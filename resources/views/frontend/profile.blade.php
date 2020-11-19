@extends('frontendtemplate')
@section('content')
	<div class="container-fluid my-5">
		<div class="row">
			<div class="col-8">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-3">
								@role('freelancer')
								@foreach($freelancers as $freelancer)
								<img src="{{$freelancer->photo}}" class="card-img rounded-circle">
								@endforeach


								@else
								@foreach($employers as $employer)
								<img src="{{$employer->photo}}" class="card-img rounded-circle">
								@endforeach
								@endrole

							</div>
							<div class="col-9 mt-2">
								@role('freelancer')
								@foreach($freelancers as $freelancer)
								<p>{{ $freelancer->user->name}}</p>
								<p>{{ $freelancer->user->email}}</p>
								<p>{{$freelancer->address}}</p>
								@endforeach


								@else
								@foreach($employers as $employer)
								<p>{{ $employer->user->name }}</p>
								<p>{{ $employer->user->email }}</p>
								<p>{{$employer->address}}</p>
								@endforeach
        						@endrole


								
								<a href="{{ route('editprofilepage') }}" class="btn btn-info">Edit Profile</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div class="px-4 py-5" style="background-color: #00d1c9">
					<h4 class="text-light">0 points</h4>
					<p class="text-light">credit</p>
					<button class="btn btn-outline-light float-right mb-3 ">View Detail</button>
				</div>
			</div>
			@role('freelancer')
			
			<div class="col-md-12 my-5">
				<div class="card p-3">
		    		<h2 class="d-inline-block">Active Project</h2>	
				        <table class="table mt-3 table-bordered dataTable">
				            <thead>
				              <tr>
				                <th>Project Name</th>
				                <th>Employee Name</th>
				                <th>Budget</th>
				                <th>Employee Bid</th>
				                <th>Close Date</th>
				                <th>Location</th>
				                <th>Status</th>
				              </tr>
				            </thead>
				            <tbody>
				            </tbody>
				      </table>
				</div>
			</div>
			
			@endrole
			@role('employer')
			
			<div class="col-md-12 my-5">
				<div class="card p-3">
		    		<h2 class="d-inline-block">Active Project</h2>	
				        <table class="table mt-3 table-bordered dataTable">
				            <thead>
				              <tr>
				                <th>Project Name</th>
				                <th>Employee Name</th>
				                <th>Budget</th>
				                <th>Employee Bid</th>
				                <th>Close Date</th>
				                <th>Location</th>
				                <th>Action</th>
				              </tr>
				            </thead>
				            <tbody>
				            </tbody>
				      </table>
				</div>
			</div>
			
			@endrole
		</div>
	</div>
@endsection

@section('script')
  <script type="text/javascript" src="{{asset('frontend_asset/js/plugins/jquery.dataTables.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend_asset/js/plugins/dataTables.bootstrap.min.js')}}"></script>
  <script type="text/javascript">
    $('.dataTable').DataTable();
  </script>
@endsection

