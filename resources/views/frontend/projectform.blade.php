@extends('frontendtemplate')
@section('content')

<form method="post" action="{{route('job.store')}}" class="col-lg-6 offset-lg-3">
	@csrf 
	@foreach($employers as $employer)
    <input type="hidden" name="user" value="{{$user}}">
    <input type="hidden" name="employer" value="{{$employer->id}}">
    
    
    @if($employer->coin != 0)
	<div class="row my-2">
		<div class="col-md-12 col-lg-12 col-sm-12 my-2">

			<label class="font-weight-bold" for="inputlg">Write a title that covers your project scope<span class="text-warning"> *</span></label>
			<input type="text" name="name" data-autofocus="true" class="form-control h-75" placeholder ="project title" id="inputlg" value="">
		</div>
	</div>

	<div class="row my-2">
		<div class="col-md-12 col-lg-12 col-sm-12 mt-4">

			<label class="font-weight-bold">Choose Category <span class="text-warning"> *</span></label>

			<select class="form-control select2 form-control-lg" name="category" data-autofocus="true"  style="font-size: 16px;">
              @foreach($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
	        </select>    

		</div>
	</div>

	<div class="row my-2">
		<div class="col-sm-12 my-2 ">
			
			<label class="font-weight-bold">Choose Subcategory <span class="text-warning"> *</span></label>

			<select class="form-control select2 form-control-lg" name="subcategory" data-autofocus="true"  style="font-size: 16px;">
				@foreach($subcategories as $subcategory)
					<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
				@endforeach
	        </select>  
									
		</div>
	</div>

	<div class="row my-2">
		<div class="col-sm-12 my-2 ">
			
			<label class="font-weight-bold">Choose Location <span class="text-warning"> *</span></label>

			<select class="form-control select2 form-control-lg" name="location" data-autofocus="true"  style="font-size: 16px;">
				@foreach($locations as $location)
					<option value="{{$location->id}}">{{$location->name}}</option>
				@endforeach
	        </select>  
									
		</div>
	</div>

	<div class="row my-2">
		<div class="col-sm-12 mt-4">

			<label class="font-weight-bold">What skills should that freelancer have? <span class="text-warning"> *</span></label>
			<div class="form-group">
				<input type="text" name="skill_one" placeholder="skill one" class="form-control my-3">
				<input type="text" name="skill_two" placeholder="skill two" class="form-control my-3">
				<input type="text" name="skill_three" placeholder="skill three" class="form-control my-3">
			</div>

		</div>
	</div>

	<div class="row">
		<div class="col-sm-12 mt-4">
			<label class="font-weight-bold">Close Date<span class="text-warning">*</span></label>

			<input type="Date" name="closedate" class="form-control">
		</div>
	</div>

	<label class="font-weight-bold mt-4">When do you want to finish your project? <span class="text-warning"> *</span></label>
	<div class="row my-2">
		<div class="col-md-6 col-lg-6 col-sm-12">
		
			<input type="number" name="duration" data-autofocus="true" class="form-control w-100" placeholder ="Duration" style="height: 40px;" value="">												
		</div>
		<div class="col-md-6 ">
			
			<select class="form-control select2 form-control-lg" name="dur_type" data-autofocus="true"  style="font-size: 16px;">
				<option>Hour</option>
	        </select>  											
		</div>
	</div>


	<div class="row mt-4 form-group">
		<div class="col-sm-12 my-2 ">
			
			<label class="font-weight-bold">Choose Budget <span class="text-warning"> *</span></label>

			<select class="form-control select2 form-control-lg" name="salary" data-autofocus="true"  style="font-size: 16px;">
				@foreach($salaries as $salary)
					<option value="{{$salary->id}}">{{$salary->amount}}</option>
				@endforeach
	        </select>  
									
		</div>
	</div>

	<div class="row mt-4">

		<div class="col-md-12 col-lg-12 col-sm-12">
		
			<label class="font-weight-bold">Tell us more about your project <span class="text-warning"> *</span></label>
			<p>Start with a bit about yourself or your business, and include an overview of what you need done.</p>
		</div>
	</div>

	<i class="inline-block align-baseline text-xs text-warning mt-4"> The project description must have more than 100 words. </i>

	<div class="row">

		<div class="col-lg-12 col-md-12 col-sm-12 ">
			<textarea class="form-control " style="height: 200px;" name="message" placeholder="Message ***"></textarea>
		</div>
	</div>


	<input type="submit" value="Yes,Post My Project" class="btn btn-info my-4">
	@else
	<div class="card my-5 shadow border-danger">
		<div class="card-body">
			<h5 class="text-center text-danger mt-5">You have to buy coin first from our shop.</h5>
			<a href="{{route('shoppage')}}" class="btn badge-pill badge-info mt-5 float-right">Go to Shop</a>
		</div>
	</div>
	@endif
	@endforeach
</form>



@endsection
