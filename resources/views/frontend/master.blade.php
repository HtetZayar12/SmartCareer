<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SmartCarrer</title>
    <link rel="stylesheet" href="{{asset('frontend_asset/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="{{asset('frontend_asset/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_asset/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_asset/css/best-carousel-slide.css')}}">
    <link rel="stylesheet" href={{asset('frontend_asset/css/gradient-navbar-1.css')}}"">
    <link rel="stylesheet" href="{{asset('frontend_asset/css/gradient-navbar.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="{{asset('frontend_asset/css/Pretty-Footer.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_asset/css/styles.css')}}">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg text-center" id="app-navbar">
        <div class="container-fluid"><a class="navbar-brand" href="#"><i class="icon ion-ios-infinite" id="brand-logo"></i></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse text-center" id="navcol-1" style="font-family: Montserrat, sans-serif;text-align: center;">
                <ul class="nav navbar-nav text-center mx-auto ml-auto">
                    <li class="nav-item" style="padding-right: 20px;"><a class="nav-link active" href="#">Find Freelancers</a></li>
                    <li class="nav-item" style="padding-right: 20px;"><a class="nav-link" href="#">How it works</a></li>
                    <li class="nav-item" style="padding-right: 20px;"><a class="nav-link" href="#">Projects</a></li>
                    <li class="nav-item"><a class="nav-link text-center" href="#">Shop</a></li>
                </ul>
                <ul class="nav navbar-nav text-center ml-auto ml-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Log in</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="border-radius: 20px;background: #048f83;color: rgb(249,248,247);">Create Account</a></li>
                </ul>
        </div>
        </div>
    </nav>
    @yield('content')
    <footer style="font-family: Montserrat, sans-serif;">
        <div class="row">
            <div class="col-sm-6 col-md-4 footer-navigation">
                <h3><a href="#">Smart<span>Career</span></a></h3>
                <h3><a href="#"></a></h3>
                <h3></h3>
                <p class="links"><a href="#">Find Freelancers</a><strong>&nbsp;-&nbsp;</strong><a href="#">How it works</a><strong> · </strong><a href="#">Projects</a><strong> · </strong><a href="#">Log in</a><strong> · </strong><a href="#">Create Account</a><strong> · </strong></p>
                <p
                    class="company-name">SmartCareer © 2020</p>
            </div>
            <div class="col-sm-6 col-md-4 footer-contacts">
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
            <div class="col-md-4 footer-about">
                <h4>About the SmartCarreer</h4>
                <p> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet. </p>
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
            </div>
        </div>
    </footer>
    <script src="{{asset('frontend_asset/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend_asset/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>