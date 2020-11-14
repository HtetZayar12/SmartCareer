@extends('frontendtemplate')
@section('content')
	<div class="container-fluid my-5">
		<div class="row">
			<div class="col-8">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-3">
								<img src="{{asset('frontend_asset/img/klee.jpg')}}" class="card-img rounded-circle">
							</div>
							<div class="col-9 mt-2">
								<p>Htet Zayar</p>
								<p>htetzayar&#64;gmail.com</p>
								<p>0932421231</p>
								<button class="btn btn-info">Edit Profile</button>
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
			<div class="col-md-12 my-5">
		        <div class="card p-3">
		            <h2 class="d-inline-block">Active Project</h2>	
		            <table class="table mt-3 table-bordered dataTable">
			            <thead>
			              <tr>
			                <th>Project Name</th>
			                <th>AVG BID</th>
			                <th>My BID</th>
			                <th>Close Date</th>
			                <th>Status</th>
			              </tr>
			            </thead>
			            <tbody>
			            </tbody>
		          </table>
		        </div>
      		</div>
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