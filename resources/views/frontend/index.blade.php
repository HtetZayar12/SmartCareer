@extends('frontendtemplate')
@section('content')
  <div>
      <section id="carousel" style="font-family: Montserrat, sans-serif;">
          <div class="carousel slide" data-ride="carousel" id="carousel-1">
              <div class="carousel-inner">
                 <div class="carousel-item" style="height: 564px;">
                      {{-- <img src="{{asset('frontend_asset/img/young-college-students.jpg')}}"" alt="" class="d-block w-100"> --}}
                     <div class="jumbotron pulse animated hero-nature carousel-hero" style="background-image: url({{asset('frontend_asset/img/young-college-students.jpg')}});height: 564px;">
                         <h1 class="hero-title">Save your valueable time</h1>
                         <p class="hero-subtitle">You can save time for you and your company.You can find a lot of freelancers according to your project and hire now.</p>
                         <p><a class="btn btn-primary hero-button plat" role="button" href="#">Learn more</a></p>
                     </div>
                 </div>
                 <div class="carousel-item" style="height: 564px;">
                     <div class="jumbotron pulse animated hero-photography carousel-hero" style="height: 564px;background-image: url({{asset('frontend_asset/img/architects-and-worker.jpg')}})">
                         <h1 class="hero-title">Hero Photography</h1>
                         <p class="hero-subtitle">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                         <p><a class="btn btn-primary hero-button plat" role="button" href="#">Learn more</a></p>
                     </div>
                 </div>
                 <div class="carousel-item active">
                     <div class="jumbotron pulse animated hero-technology carousel-hero" style="height: 564px;background-image: url({{asset('frontend_asset/img/architect-at-the-construction.jpg')}})">
                         <h1 class="hero-title"><br><strong>Reliable professionals for your business</strong><br><br></h1>
                         <p class="hero-subtitle" style="color: rgb(8,8,8);">SmartCareer connects business with freelancers to accomplish quality works on time.</p>
                         <p><a class="btn btn-primary hero-button plat" role="button" href="{{route('job.create')}}">Post a Project</a></p>
                     </div>
                 </div>
              </div>
              <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><i class="fa fa-chevron-left"></i><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><i class="fa fa-chevron-right"></i><span class="sr-only">Next</span></a></div>
              <ol class="carousel-indicators" style="background: rgba(119,105,105,0.29);">
                <li data-target="#carousel-1" data-slide-to="0"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2" class="active"></li>
              </ol>
          </div>
     </section>
  </div>


 <!-- search subcategory with form -->
 <!-- search button is not working -->
  @foreach($subcategories as $subcategory)
     <form method="get" action="{{route('itembysubcategory',$subcategory->id)}}"> 
   @endforeach
           <div class="col-sm-10">
              <select name="subcategory" class="form-control" id="addr" rows="4">
                <optgroup label="Choose Name">
                 @foreach($subcategories as $subcategory)
                  <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                    @endforeach
                  </optgroup>
                </select>
            </div>

          <div class=" col col-lg-2 col-md-4 col-sm-8  col-8 my-2">
            <input type="submit" class="btn btn-info d-block w-100 text-center" name="" value="Search">
          </div>
    </form>


<!-- search subcategory with dropdown -->
<!-- this code is working -->
<div class="dropdown">
      <button class="btn btn-info dropdown-toggle ml-3 mx-5" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Choose Category
      </button>
  <div class="dropdown-menu w-25" aria-labelledby="dropdownMenuButton">
      @foreach($subcategories as $subcategory)
      <a class="dropdown-item" href="{{route('itembysubcategory',$subcategory->id)}}" value="{{$subcategory->id}}">{{$subcategory->name}}</option>
      @endforeach
  </div>
</div>

    
     <h1 class="text-center" style="font-family: Montserrat, sans-serif;font-size: 30px;margin: 35px;margin-bottom: 10px;"><strong>Get work done in different categories</strong></h1>
     <p class="text-center" style="font-family: Montserrat, sans-serif;font-size: 20px">Freelancers available by category</p>

<!-- search subcategory by name -->
<!-- this codee is working -->
  <div class="card-body mt-2 ml-5">
      @foreach($subcategories as $subcategory)
      <a class="btn btn-link text-dark" href="{{route('itembysubcategory',$subcategory->id)}}">{{$subcategory->name}}</a>
              
      @endforeach
  </div>



  <div class="container">
      <div class="row" style="font-family: Montserrat, sans-serif;">
        
         @foreach($categories as $category)
          <div class="col-lg-4 col-md-6 my-3 " style="width: 20px;">
             <div class="card bg-white text-dark">
                 <img class="card-img" height="300px" src="{{asset($category->photo)}}" alt="Card image" >
                 <div class="card-body text-center">
                   <h4>{{$category->name}}</h4>
                 </div>
               </div>
          </div>
          @endforeach
     </div>
 </div>




 @endsection
 


