    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Login - Brand</title>
        <link rel="stylesheet" href="{{asset('frontend_asset/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
        <link rel="stylesheet" href="{{asset('frontend_asset/fonts/fontawesome-all.min.css')}}">
    </head>
    <body class="bg-gradient-primary">
        <div class="container">
            <div class="card shadow-lg o-hidden border-0 my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-flex">
                            <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;{{asset('frontend_asset/img/dogs/image2.jpeg')}}&quot;);">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h4 class="text-dark mb-4">Create an Account!</h4>
                                </div>
                                <form class="user" method="POST" action="{{route('user.store')}}">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-12 mb-3 mb-sm-0">
                                            <input class="form-control form-control-user  @error('name') is-invalid @enderror" type="text" id="exampleFirstName" placeholder="Name" name="name" value="{{ old('name') }}">

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12 mb-3 mb-sm-0">
                                            <input class="form-control form-control-user @error('email') is-invalid @enderror" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address" name="email" value="{{ old('email') }}">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input class="form-control form-control-user @error('password') is-invalid @enderror" type="password" id="examplePasswordInput" placeholder="Password" name="password">
                                        </div>

                                         @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <div class="col-sm-6">
                                            <input class="form-control form-control-user @error('confirm_password') is-invalid @enderror" type="password" id="exampleRepeatPasswordInput" placeholder="Confirm Password" name="confirm_password">
                                        </div>
                                                                               
                                        @error('confirm_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-check-inline mb-2 col-6">
                                        <input type="radio" name="radio" value="employer" class="form-check-input">
                                        <label class="form-check-label ml-2">{{ __('Employer') }}</label>
                                    </div>
                                    <div class="form-check-inline mb-2 col-5">
                                        <input type="radio" name="radio" value="freelancer" class="form-check-input">
                                        <label class="form-check-label ml-2">{{ __('Freelancer') }}</label>
                                    </div>
                                    <button class="btn btn-primary btn-block text-white btn-user" type="submit">Register Account</button>
                                    <hr>
                                </form>
                                <div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center"><a class="small" href="login.html">Already have an account? Login!</a>
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