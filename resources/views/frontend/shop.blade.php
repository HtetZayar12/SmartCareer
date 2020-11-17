@extends('frontendtemplate')
@section('content')
@foreach($employers as $employer)
 <div class="banner">
     <img src="assets/img/E-Books Etsy Banner (1).png" alt="" class="img-fluid w-100 mb-5">
 </div>
 <div class="container" style="font-family: Montserrat, sans-serif;">
      <div class="row">
          <div class="col-lg-4 col-sm-12">
            <form method="post" action="{{route('employer.update',$employer->id)}}" onsubmit="return confirm('Are you Sure to Buy 100 coins?')">
              @csrf
              @method('PUT')
                 <div class="card text-center">
                     <div class="card-header">
                       <div class="font-weight-bold"><input type="hidden" name="coin" readonly="readonly" value="100">100 Coins</div>
                     </div>
                     <div class="card-body">
                       <h5 class="card-title">10000MMK</h5>
                       <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                     </div>
                     <div class="card-footer text-muted">
                         <button type="submit" class="btn badge-pill btn-info px-4">Buy</button>
                     </div>
                   </div>
            </form>
          </div>
          <div class="col-lg-4 col-sm-12">
            <form method="post" action="{{route('employer.update',$employer->id)}}" onsubmit="return confirm('Are you Sure to Buy 250 coins?')">
              @csrf
              @method('PUT')          
                 <div class="card text-center">
                     <div class="card-header">
                       <div class="font-weight-bold"><input type="hidden" name="coin" readonly="readonly" value="250">250 Coins</div>
                     </div>
                     <div class="card-body">
                       <h5 class="card-title">22500MMK</h5>
                       <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                     </div>
                     <div class="card-footer text-muted">
                         <button type="submit" class="btn badge-pill btn-info px-4">Buy</button>
                     </div>
                   </div>
            </form>
          </div>
          <div class="col-lg-4 col-sm-12">
            <form method="post" action="{{route('employer.update',$employer->id)}}" onsubmit="return confirm('Are you Sure to Buy 500 coins?')">
              @csrf
              @method('PUT')
              
                 <div class="card text-center">
                     <div class="card-header">
                       <div class="font-weight-bold"><input type="hidden" name="coin" readonly="readonly" value="500">500 Coins</div>
                     </div>
                     <div class="card-body">
                       <h5 class="card-title">45000MMK</h5>
                       <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                     </div>
                     <div class="card-footer text-muted">
                         <button type="submit" class="btn badge-pill btn-info px-4">Buy</button>
                     </div>
                   </div>
            </form>
          </div>
      </div>
 </div>
 @endforeach
@endsection
