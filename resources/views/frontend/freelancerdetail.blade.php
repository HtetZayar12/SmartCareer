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
             <a href="" class="btn btn-info my-3 w-25">Hire</a>
      </div>

      </div>
    </div>


<script type="text/javascript" src="{{asset('frontend_asset/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend_asset/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


</body>
</html> 
@endsection

