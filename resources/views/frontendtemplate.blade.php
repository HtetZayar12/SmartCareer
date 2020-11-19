<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SmartCarrer</title>
{{--     <link rel="stylesheet" href="{{asset('frontend_asset/bootstrap/css/bootstrap.min.css')}}"> --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="{{asset('frontend_asset/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_asset/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_asset/css/best-carousel-slide.css')}}">
    {{-- <link rel="stylesheet" href={{asset('frontend_asset/css/gradient-navbar-1.css')}}""> --}}
    <link rel="stylesheet" href="{{asset('frontend_asset/css/gradient-navbar.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="{{asset('frontend_asset/css/Pretty-Footer.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_asset/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_asset/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend_asset/css/main.css')}}">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg text-center" id="app-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('mainpage')}}">
                <i class="icon ion-ios-infinite" id="brand-logo"></i>
            </a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div
                class="collapse navbar-collapse text-center" id="navcol-1" style="font-family: Montserrat, sans-serif;text-align: center;">
                <ul class="nav navbar-nav text-center mx-auto ml-auto">
                    <li class="nav-item" style="padding-right: 20px;"><a class="nav-link {{ Request::is('find*') ? 'active' : '' }}" 
                        href="{{route('freelancerpage')}}">Find Freelancers</a></li>
                    <li class="nav-item" style="padding-right: 20px;"><a class="nav-link {{ Request::is('about*') ? 'active' : '' }}" href="{{route('aboutpage')}}">How it works</a></li>
                    <li class="nav-item" style="padding-right: 20px;"><a class="nav-link
                        {{ Request::is('job*') ? 'active' : '' }}" 
                        href="{{route('job.index')}}">Projects</a></li>
                    <li class="nav-item"><a class="nav-link text-center
                        {{ Request::is('shop*') ? 'active' : '' }}" href="{{route('shoppage')}}">Shop</a></li>
                </ul>
                <ul class="nav navbar-nav ml-auto">
                    @auth
                    <li class="nav-item"><a class="btn btn-primary ml-auto" role="button" href="{{route('projectform')}}">Post a Project</a></li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            
                            <a class="dropdown-item" href="{{ route('profilepage') }}">
                              {{ __('Profile') }}
                            </a>
                            
                            <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>

                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('signinpage')}}">Signin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-3 px-3 btn badge-pill btn-light text-dark" href="{{route('signuppage')}}">Signup</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <footer style="font-family: Montserrat, sans-serif;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 footer-navigation">
                    <h3><a href="#">Smart<span>Career</span></a></h3>                
                    <p class="company-name">SmartCareer © 2020</p>
                </div>
                <div class="col-sm-6 col-md-4 footer-about"> 
                    <h4 class="text-uppercase">Browse</h4>
                    <p class="mb-3">
                        <a href="{{route('freelancerpage')}}" class="text-decoration-none">Find Freelancers</a>
                    </p>
                    <p class="mb-3">
                        <a href="{{route('aboutpage')}}" class="text-decoration-none">How it works</a>
                    <p class="mb-3">
                        <a href="{{route('job.index')}}" class="text-decoration-none">Projects</a>
                    </p>
                    <p class="mb-3">
                        <a href="{{route('signinpage')}}" class="text-decoration-none">Log in</a>
                    </p>
                    <p class="mb-3">
                        <a href="{{route('signuppage')}}" class="text-decoration-none">Create Account</a>
                    </p>
                </div>
                <div class="col-sm-6 col-md-4 footer-contacts">
                    <h4 class="text-uppercase">Support</h4>
                    <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                        <p><span class="new-line-span">21 Bayint Naung Street</span>Yangon, Myanmar</p>
                    </div>
                    <div><i class="fa fa-phone footer-contacts-icon"></i>
                        <p class="footer-center-info email text-left">09772320874</p>
                    </div>
                    <div><i class="fa fa-envelope footer-contacts-icon"></i>
                        <p> <a href="#" target="_blank">smartcareer@gmail.com</a></p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </footer>
    <script src="{{asset('frontend_asset/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend_asset/bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend_asset/js/custom.js')}}"></script>
     <script type="text/javascript" src="{{asset('frontend_asset/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend_asset/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('frontend_asset/bootstrap/css/bootstrap.min.css')}}">

    
    @yield('script')
</body>

</html>

