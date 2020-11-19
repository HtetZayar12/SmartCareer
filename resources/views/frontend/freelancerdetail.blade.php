@extends('frontendtemplate')
@section('content')

  <div class="container">

    <div class="row my-5">

      <div class="col-md-3">

       <img src="{{asset($freelancers->photo)}}" width="150px" height="150px" class="rounded-circle">
       <div class="profile-ratings mt-3 mx-3">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
        </div>
        <div><i class="fa fa-home mx-3 mt-3"></i>
            <span>{{$freelancers->address}}</ </span>

        </div>

         <div><i class="fa fa-user-circle mx-3 mt-3"></i>
            <span>{{$freelancers->address}}</ </span>

        </div>
    
      </div>

      <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>{{$freelancers->user->name}}</h4>
            </div>
            <div class="card-body">
                <p>{{$freelancers->description}}</p> 
            </div>

            <div class="card-footer">
                <p>{{$freelancers->subcategory->name}}</p> 
            </div>

        </div>
        {{-- <button class="btn btn-info my-3 w-25" data-target="#MODEL" data-toggle="modal">Hire</button> --}}
      </div>

      </div>
    </div>

    {{-- <div class="modal fade" id="MODEL">
      <div class="col-md-9 mt-5 offset-2" >
        <div class="row">
          <div class="col-sm-12">
            <div class="jobs card">
              @foreach($jobs as $job)
                <div class="card m-3 shadow">
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
    </div> --}}

</div> 


<script type="text/javascript" src="{{asset('frontend_asset/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend_asset/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


</body>
</html> 
@endsection



