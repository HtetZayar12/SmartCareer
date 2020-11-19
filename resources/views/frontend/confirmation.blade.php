@extends('frontendtemplate')
@section('content')

<div class="container my-5">
  {{-- @foreach($jobs as $job) --}}
  <div class="row">
    <div class="col-sm-12">
      <div class="row">
        <div class="col-sm-12">
          <h4>{{$job->name}}</h4>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-4">
          <p>Project Duration</p>
          <p class="font-weight-bold">{{$job->duration}}</p>
        </div>
        <div class="col-sm-4">
          <p>Close Date</p>
          <p class="font-weight-bold">{{$job->closedate}}</p>
        </div>
        <div class="col-sm-4">
          <p>Budget</p>
          <p class="font-weight-bold">{{$job->salary->amount}}MMK</p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-12">
          <h4>Job Description</h4>
          <p>{{$job->description}}</p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-12">
          <h4>Required Skill(s)</h4>
          <div class="my-5">
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
        </div>
      </div>
    </div>
    @foreach($job->users as $user)
    <input type="hidden" name="userid" value="{{$user->id}}">
    <div class="col-sm-12">
        <div class="card my-5 shadow">          
          <div class="card-body">
            <div class="container">
              <div class="row">
                <div class="col-sm-3">
                  <img src="{{$user->freelancer->photo}}" class=" rounded-circle align-self-center card-img">  
                </div>
                <div class="col-sm-8 mt-3">
                  <h3>{{$user->name}}</h3>
                  <p class="text-info font-weight-bold">{{$user->freelancer->subcategory->name}}</p>
                  <hr>
                  <p style="font-size: 20px;">{{$user->freelancer->description}}</p>
                  <div class="my-4 float-right">
                    {{-- <a href="{{route('job.confirm',$job->id)}}" class="btn badge-pill badge-info mr-4 py-3 px-5">Hire</a>
                    <a href="{{route('job.delete',$job->id)}}" class="btn badge-pill badge-danger py-3 px-5">Reject</a> --}}
                    @if($user->pivot->confirm_status == 0)
                    
                    <form method="post" action="{{route('job.confirm',$job->id)}}" class="d-inline-block">
                      @csrf
                      <input type="hidden" name="userid" value="{{$user->id}}">
                      <input type="submit" name="btnsubmit" value="Hire" class="btn badge-pill badge-info py-3 px-5 mr-4">
                    </form>
                    {{-- <form method="post" action="{{route('job.destroy',$job->id)}}" class="d-inline-block" onsubmit="return confirm('Are you Sure to Delete?')">
                      @csrf
                      @method('DELETE')
                      <input type="hidden" name="userid" value="{{$user->id}}">
                      <input type="submit" name="btnsubmit" value="Reject" class="btn badge-pill badge-danger py-3 px-5">
                    </form> --}}
                    @endif
                  </div>
                </div>
              </div>
            </div>             
          </div>          
        </div>
    </div>
    @endforeach
  {{-- @endforeach --}}
  </div>
</div>
@endsection