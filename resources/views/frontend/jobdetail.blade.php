@extends('frontendtemplate')
@section('content')

<div class="container my-5">
  <div class="row">
    <div class="col-sm-12">
      <h4>{{$job->name}}</h4>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-sm-4">
      <p>Project Duration</p>
      <p>{{$job->duration}}</p>
    </div>
    <div class="col-sm-4">
      <p>Close Date</p>
      <p>{{$job->closedate}}</p>
    </div>
    <div class="col-sm-4">
      <p>Budget</p>
      <p>{{$job->salary->amount}}MMK</p>
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
        <span class="badge-pill badge-dark p-2">{{$job->skill_one}}</span>
        <span class="badge-pill badge-dark p-2">{{$job->skill_two}}</span>
        <span class="badge-pill badge-dark p-2">{{$job->skill_three}}</span>
      </div>
    </div>
  </div>
</div>
@endsection

