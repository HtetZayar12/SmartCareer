<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Freelanceinfo</title>
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
                                 <div class="flex-grow-1 bg-login-image" style="background-image: url(&quot;assets/img/dogs/image3.jpeg&quot;);"></div>
                             </div>
                             <div class="col-lg-9">
                                 <div class="p-5">
                                     <div class="text-center">
                                         <h4 class="text-dark mb-4">Freelancer Info!</h4>
                                     </div>
                                     <form class="user">
                                         <div class="form-group"><label>Choose Photo</label><br><input type="file"></div><label>Description</label>
                                         <div class="form-group"><textarea class="form-control" placeholder="Describe yourself...." style="height: 120px;"></textarea></div><label>Location</label>
                                         <div class="form-group"><input class="form-control" type="text" placeholder="Yangon"></div>
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