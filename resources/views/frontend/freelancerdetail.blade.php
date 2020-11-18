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
                <button data-id="{{$jobs->user->id}}"class="btn btn-info my-3 w-25" data-target="#MODEL" data-toggle="modal">Hire</button>
      </div>

      </div>
    </div>

    <div class="modal fade" id="MODEL">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3>{{$jobs->user->name}}</h3>
        <button class="close" data-dismiss="modal">

        </button>
      </div>
      <div class="modal-body">
        <p>{{$jobs->description}}</p>
        <hr>
        <p><b>Skill_one:</b>{{$jobs->skill_one}}</p>
        <hr>
        <p><b>Skill_two:</b>{{$jobs->skill_two}}</p>
        <hr>
        <p><b>Skill_three:</b>{{$jobs->skill_three}}</p>
        <hr>
        <p><b>Duration:</b>{{$jobs->duration}}</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-success">Save</button>
      </div>

    </div>

  </div>

</div> 


<script type="text/javascript" src="{{asset('frontend_asset/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend_asset/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


</body>
</html> 
@endsection



