@extends('frontendtemplate')
@section('content')

<div class="container my-5">
  <div class="row">
    <div class="col-md-7">
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
    @role('freelancer')
    <div class="col-md-4 offset-1 bg-light rounded shadow">
     <form method="POST" action="{{route('applied_detail')}}">
        @csrf
        <input type="hidden" name="jobid" value="{{$job->id}}">
        <input type="hidden" name="userid" value="{{Auth::user()->id}}">
        <div class="form-group mt-3">
          <h5 class="form-control-label">Your Bid Amount</h5>
          <input type="number" name="bid" class="form-control my-3 @error('bid') is-invalid @enderror" placeholder="MMK">
          @error('bid')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group">
          <h6 class="form-control-label">Duration</h6>
          <input type="number" name="duration" class="form-control my-3  @error('duration') is-invalid @enderror" placeholder="hour">
          @error('duration')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group">
          <h6 class="form-control-label">Cover Letter <span class="text-danger">(cover letter must have more than 100 words.)*</span></h6>
          <textarea class="form-control @error('coverletter') is-invalid @enderror" rows="6" name="coverletter"></textarea>
          @error('coverletter')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <button class="btn btn-block badge-pill badge-info p-2 mb-3">
          Send Proposal
        </button>
      </form>
    </div>
    @else
    <div class="col-md-4 offset-1 rounded shadow" style="opacity:0.5">
      <form>
        <div class="form-group mt-3">
          <h5 class="form-control-label">Your Bid Amount</h5>
          <input type="text" name="mybid" class="form-control my-3" placeholder="MMK" disabled="disabled">
        </div>
        <div class="form-group">
          <h6 class="form-control-label">Duration</h6>
          <input type="number" name="mybid" class="form-control my-3" placeholder="hour" disabled="disabled">
        </div>
        <div class="form-group">
          <h6 class="form-control-label mt-3">Cover Letter <span class="text-danger">(cover letter must have more than 100 words.)*</span></h6>
          <textarea class="form-control" rows="6" disabled="disabled"></textarea>
        </div>
        <button href="" class="btn btn-block badge-pill badge-info p-2 mb-3" disabled="disabled" >Send Proposal</button>
      </form>
    </div>
    @endrole
  </div>
</div>
@endsection

