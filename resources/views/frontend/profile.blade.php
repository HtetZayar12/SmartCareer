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
								<img src="{{Auth::user()->freelancer->photo}}" class="card-img rounded-circle">
								@endrole

								@role('employer')
								<img src="{{Auth::user()->employer->photo}}" class="card-img rounded-circle">
								@endrole
							</div>
							<div class="col-9 mt-2">
								@role('freelancer')
								<p>{{Auth::user()->name}}</p>
								<p>{{Auth::user()->email}}</p>
								<p>{{Auth::user()->freelancer->address}}</p>
								@endrole
								

        						@role('employer')
            					<p>{{Auth::user()->name}}</p>
								<p>{{Auth::user()->email}}</p>
								<p>{{Auth::user()->employer->address}}</p>
								@endrole						
								<a href="{{ route('editprofilepage') }}" class="btn btn-info">Edit Profile</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div class="px-4 py-5" style="background-color: #00d1c9">
					@role('freelancer')
					<h4 class="text-light">0 coin(s)</h4>
					@endrole
					@role('employer')
					<h4 class="text-light">{{Auth::user()->employer->coin}} coin(s)</h4>
					@endrole
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
				                <th>Employer Name</th>
				                <th>Budget</th>
				                <th>Employee Bid</th>
				                <th>Close Date</th>
				                <th>Location</th>
				                <th>Status</th>
				              </tr>
				            </thead>
				            <tbody>
				            	@foreach(Auth::user()->jobs as $job)
				            	<tr>
				            		<td>{{$job->name}}</td>
				            		<td>{{$job->employer->name}}</td>
				            		<td class="text-info">{{$job->salary->amount}} MMK</td>
				            		<td class="text-info">{{number_format($job->pivot->bid)}} MMK</td>
				            		<td>{{$job->closedate}}</td>
				            		<td>{{$job->location->name}}</td>
				            		@if($job->pivot->confirm_status == 0)
				            		<td class="text-info">Pending</td>
				            		@elseif($job->pivot->confirm_status == 1)
				            		<td class="text-success">Accepted</td>
				            		@else
				            		<td class="text-danger">Rejected</td>
				            		@endif
				            	</tr>
				            	@endforeach
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
				            	
				            	@foreach($jobss as $job)				            	
				            		@if($job->isEmpty())
				            		@else
				            		@foreach($job as $jobss)
				            		<tr>
				            		<td>{{$jobss->name}}</td>
				            		<td>@foreach($jobss->users as $user){{$loop->first ? '':','}}{{$user->name}}@endforeach</td>
				            		<td>@foreach($jobss->users as $user){{$loop->first ? '':','}}{{$user->pivot->bid}}@endforeach</td>
				            		<td>{{$jobss->salary->amount}}</td>
				            		<td>{{$jobss->closedate}}</td>
				            		<td>{{$jobss->location->name}}</td>
				            		<td>
				            			<a href="{{route('job.detail',$jobss->id)}}" class="btn btn-info">
										  Detail
										</a>
									</td>
									</tr>
				            		@endforeach
				            		@endif	
				            	@endforeach

				            	{{-- <td>{{$jobs->user_id}}</td> --}}
				            	
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

