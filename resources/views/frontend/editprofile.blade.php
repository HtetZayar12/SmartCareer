@extends('frontendtemplate')
@section('content')
<div class="container" style="font-family: Montserrat, sans-serif;">
     <h5 class="text-center my-5">Edit Profile</h5>
      <form>
           <div class="form-group">
           <label for="examplePhoto">Photo</label>
           <input type="file" class="form-control" id="examplePhoto">
           </div>
           <div class="form-group">
           <label for="exampleName">Name</label>
           <input type="text" class="form-control" id="exampleName">
           </div>
           <div class="form-group">
                <label for="examplePhone">Phone</label>
                <input type="number" class="form-control" id="examplePhone">
           </div>
           <button type="submit" class="btn btn-primary">Save</button>
      </form>
</div>
@endsection