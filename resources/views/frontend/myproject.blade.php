@extends('frontendtemplate')
@section('content')
@foreach($jobs as $job)
<div class="container my-5">
	<h3 class="text-info mb-5">My Project(s)</h3>
	<div class="row">
		<div class="col-sm-12">
			<div class="jobs">
				@foreach($jobs as $job)
					<div class="card mb-5 shadow">
						<div class="card-body px-5">
							<div class="row">
								<div class="col-sm-9">
									<h5 class="font-weight-bold">{{$job->name}}</h5>
								</div>
								<div class="col-sm-3">
									<h5 class="font-weight-bold float-right">{{$job->salary->amount}}MMK</h5>
								</div>
								<div class="col-sm-12">
									<label>Close Date : </label>
									<span>{{$job->closedate}}</span>
								</div>
							</div>
							<hr>
							<p>{{$job->description}}</p>
							<div class="row">
								<div class="col-sm-9 my-3">
									<span class="badge-pill py-2 px-3 mr-3" style="background-color: #d3d6d8">
						              {{$job->skill_one}}
						            </span>
						            <span class="badge-pill py-2 px-3 mr-3" style="background-color: #d3d6d8">
						              {{$job->skill_two}}
						            </span>
						            <span class="badge-pill py-2 px-3 mr-3" style="background-color: #d3d6d8">
						              {{$job->skill_three}}
						            </span>
								</div>

								<div class="col-sm-3 my-3">
									<a class="btn btn-info badge-pill px-5 float-right" href="{{route('jobdetail',$job->id)}}">Detail</a>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endforeach

@endsection

