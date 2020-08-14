<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AfrikTV - Africa's first movie subscription website.</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('template/bootstrap-4.4.1\dist\css\bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('template/main.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('template/css/owl.carousel.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
    <nav class=""> 
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn"><i class="fas fa-bars"></i></label>
        <label class="logo">AfrikTV</label>
        <ul>
            <li><a class="active" href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="javascript:void(0)">Services</a></li>
            <li><a href="javascript:void(0)">Contact</a></li>
            <li><a href="javascript:void(0)"></a></li>
        </ul>
    </nav>


 <!--AfrikTV's Hero Section should be here...-->
  <section class="bg-light" style="background-image: url({{ asset('template/img/bg.jpg') }}); background-size: cover; background-attachment: fixed; color:#fff;">
    <div class="container">
      <div class="row">
        <div class="hero_section">
          <h1 style="padding-top: 200px;">Welcome to AfrikTV</h1>
          <p class="lead">Africa's first movie subscription website, AfrikTV where <br>you can get all the excusives of African movies. </p>
          <p><a href="/explore" class="btn btn-primary shadow mr-2 outline-light" style="border-radius:0px; background: maroon; border-color: maroon;">Explore</a><a href="#" class="btn btn-outline-primary" style="border-radius: 0px; background: maroon; border-color: maroon; color: #fff;">Some another action</a></p>
        </div>
  </div>
    </div>
  </section>
<div class="container">
  <div class="row">
    <div class="col-lg-6">
<br> <br><h3>Get movies on demand</h3>
<p>You can get all the exlusives of African movies from here in AfrikTV, including action movies, comedy, tragedy etc. AfrikTV covers all the movies in all African countries, you can also get all the blockbuster movies that you want. You can subscribe to our newsletter in order to get every movie you want. Our offices are in Nigeria, Egypt, South Africa and all African countries.</p>
</div>


<div class="col-lg-6">
 <p align="right"> <img src="{{ asset('template/img/banner-services-11.png') }}" width="100%"></p>
</div>


</div>
</div>

<br><br>

<div class="jumbotron" style="background-attachment: fixed; border-radius: 0px; background-image: url({{ asset('template/img/d5822c2d056352aeb60b1e4839aaa384.jpg') }}); background-size: cover; height: 268px;">

<div class="container">

<div class="row">

  <div class="col-lg-6">

<h3 style="color: #fff;"> Explore our blockbuster movies</h3>

<p style="color: #fff;">Explore and enjoy your movies with us! Afrik<sup>TV</sup>. Afrik<sup>TV </sup> is the best platform where you can watch african movies.</p>
 <p><a href="/explore" class="btn btn-primary shadow mr-2 outline-light" style="border-radius:0px; background: maroon; border-color: maroon;">Start Watching</a></p>
 <div class="col-lg-6"></div>


</div>
</div>
</div>
</div>



</div>
<br><br>


<div class="container">
  <div class="row">
  <div class="col-lg-6">
    <img src="{{ asset('template/img/Bulk-SMS-Signup.png') }}">
  </div>
<div class="col-lg-6"><br><br><br>
  <h2 style="text-align: center;">Create an account</h2>
  <p>You have few steps away from using our service. You can just get started with using our service by signing up. When you are done with signing up, you can get the exclusives of AfrikTV and you can watch all the blockbutster movies here. To get started and proceed to the sign up page click on the button below</p>

  <a class="btn btn-primary" style="border-radius: 20px;" href="/register">Get Started</a>
  <br>  <br>  <br>  <br>
</div>
</div>
</div>

  <script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>

<footer class="page-footer font-small mdb-color pt-4" style="background-color:#272D44; color:#fff">
  <div class="container text-center text-md-left">
    <div class="row text-center text-md-left mt-3 pb-3">
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold"><img src="{{ asset('template/img/output-onlinepngtools (2).png') }}" width="45%"></h6>
        <p>Africa's first movie subscription website and a place where you can watch all africa blockbuster movies.</p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">About Us</h6>
        <p>
          <a href="#!" style="color: #fff;">Our Blog</a>
        </p>
        <p>
          <a href="#!" style="color: #fff;">Our Team</a>
        </p>
        <p>
          <a href="#!" style="color: #fff;">Developers</a>
        </p>
        <p>
          <a href="/explore" style="color: #fff;">Movies</a>
        </p>
      </div>

  
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Contact Us</h6>
        <p>
          <a href="" style="color: #fff;">Report a Bug</a>
        </p>
        <p>
          <a href="#!" style="color: #fff;">FAQs</a>
        </p>
        <p>
          <a href="#!" style="color: #fff;">Send a request</a>
        </p>
        <p>
          <a href="#!" style="color: #fff;">Support Center</a>
        </p>
      </div>
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
        <p>
          <i class="fas fa-home mr-3" style="color: #fff;"></i>Lagos, Nigeria</p>
        <p>
          <i class="fas fa-envelope mr-3" style="color: #fff;"></i> info@afriktv.com</p>
        <p>
          <i class="fas fa-phone mr-3" style="color: #fff;"></i> + 234 811 111 7300</p>
        <p>
          <i class="fas fa-print mr-3" style="color: #fff;"></i> + 234 802 375 2028</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!--Copyright-->
        <p class="text-center text-md-left">Copyright © AfrikTV 2020 | All rights reserved
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="javascript:void(0)" class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-linkedin-in"></i>
              </a>
<label class="switch">
  <input type="checkbox">
  <span class="slider round" onclick="myFunction()"></span>
</label>
            </li>
            
          </ul>

        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>
<!-- Footer -->

      <!-- JavaScript files-->

  <script src="{{ asset('template/js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('template/js/mixitup.min.js') }}"></script>
  <script src="{{ asset('template/js/circle-progress.min.js') }}"></script>
  <script src="{{ asset('template/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('template/js/main.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
      <script src="{{ asset('template/bootstrap-4.4.1\dist\js\bootstrap.bundle.min.js') }}"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </body>
  
  </html>