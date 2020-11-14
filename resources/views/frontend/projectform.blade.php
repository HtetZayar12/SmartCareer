<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('frontend_asset/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>

			<form method="post" action="#" class="col-lg-6 offset-lg-3">

				<div class="row my-2">
					<div class="col-md-12 col-lg-12 col-sm-12 my-2">

						<label class="font-weight-bold" for="inputlg">Write a title that covers your project scope<span class="text-warning"> *</span></label>
						<input type="text" name="name" data-autofocus="true" class="form-control h-75" placeholder ="project title" id="inputlg" value="">
					</div>
				</div>

				<div class="row my-2">
					<div class="col-md-12 col-lg-12 col-sm-12 mt-4">

						<label class="font-weight-bold">Choose the service that you want <span class="text-warning"> *</span></label>

						<select class="form-control select2 form-control-lg" name="" data-autofocus="true"  style="font-size: 16px;">
							<option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>    

					</div>
				</div>

				<div class="row my-2">
					<div class="col-md-6 col-lg-6 col-sm-12 my-2 ">
						
						<select class="form-control select2 form-control-lg" name="" data-autofocus="true"  style="font-size: 16px;">
							<option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>  
												
					</div>
					<div class="col-md-6 my-2">
						
						<select class="form-control select2 form-control-lg" name="" data-autofocus="true"  style="font-size: 16px;">
							<option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>  											
					</div>
				</div>

				<div class="row my-2">
					<div class="col-md-12 col-lg-12 col-sm-12 mt-4">

						<label class="font-weight-bold">What skills should that freelancer have? <span class="text-warning"> *</span></label>

						<select class="form-control select2 form-control-lg" name="" data-autofocus="true"  style="font-size: 16px;">
							<option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>    

					</div>
				</div>

					<label class="font-weight-bold mt-4">When do you want to finish your project? <span class="text-warning"> *</span></label>
				<div class="row my-2">
					<div class="col-md-6 col-lg-6 col-sm-12">
					
						<input type="number" data-autofocus="true" class="form-control w-100" placeholder ="Duration" style="height: 40px;" value="">												
					</div>
					<div class="col-md-6 ">
						
						<select class="form-control select2 form-control-lg" name="" data-autofocus="true"  style="font-size: 16px;">
							<option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>  											
					</div>
				</div>


				<label class="font-weight-bold mt-4">What is your estimated budget? <span class="text-warning"> *</span></label>
				<div class="row my-2">
					<div class="col-md-6 ">
						
						<select class="form-control select2 form-control-lg" name="" data-autofocus="true"  style="font-size: 16px;">
							<option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select> 

					</div>
					<div class="col-md-6 ">
						
						<select class="form-control select2 form-control-lg" name="" data-autofocus="true"  style="font-size: 16px;">
							<option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>  											
					</div>
				</div>

				<div class="row mt-4">

					<div class="col-md-6 col-lg-6 col-sm-12">
						<input type="number" data-autofocus="true" class="form-control w-100" placeholder ="Min amount(MMK)" style="height: 40px;" value="">											
					</div>
				</div>

				<div class="row">

					<div class="col-md-6 col-lg-6 col-sm-12 my-2">
					<input type="number" data-autofocus="true" class="form-control w-100 " placeholder ="Max amount(MMK)" style="height: 40px;" value="">											
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


				<input type="submit" name="" value="Yes, Post My Project" class="btn btn-info my-4">
	</form>
<script type="text/javascript" src="{{asset('frontend_asset/bootstrap/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend_asset/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html> 
