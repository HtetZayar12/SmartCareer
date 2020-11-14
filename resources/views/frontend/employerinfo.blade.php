<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Employerinfo</title>
    <link rel="stylesheet" href="{{asset('frontend_asset/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="{{asset('frontend_asset/fonts/fontawesome-all.min.css')}}">
</head>
<body class="bg-gradient-primary">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-md-9 col-lg-12 col-xl-10">
                 <div class="card shadow-lg o-hidden border-0 my-5">
                     <div class="card-body p-0">
                         <div class="row">
                             <div class="col-lg-3 d-none d-lg-flex">
                                 <div class="flex-grow-1 bg-login-image" style="background-image: url(&quot;{{asset('frontend_asset/img/dogs/image3.jpeg')}}&quot;);"></div>
                             </div>
                             <div class="col-lg-12">
                                 <div class="container">
                                     <div class="text-center">
                                         <h4 class="text-dark my-4">Employer Info!</h4>
                                     </div>
                                     <form class="user" method="POST" action="{{ route('employer.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        @foreach($users as $row)
                                        <input type="hidden" name="userid" value="{{$row->id}}">
                                        @endforeach
                                        <div class="form-group row">
                                            <label for="photo_id" class="col-sm-2 col-form-label"> Photo (<small class="text-danger">* jpeg|png</small>) </label>
                                            <div class="col-sm-10">
                                                <input type="file" id="photo_id" name="photo" class="form-control-file @error('photo') is-invalid @enderror">
                                                @error('photo')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="des_id" class="col-sm-2 col-form-label"> Description </label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control @error('description') is-invalid @enderror" id="des_id" rows="4" name="description"></textarea>
                                                @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="addr" class="col-sm-2 col-form-label"> Address </label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control @error('address') is-invalid @enderror" id="addr" rows="4" name="address"></textarea>
                                                @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <button class="btn btn-primary px-5 float-right my-4 text-white btn-user" type="submit">Save</button>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>


     <script src="{{asset('frontend_asset/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend_asset/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="{{asset('frontend_asset/js/theme.js')}}"></script>
</body>

</html>