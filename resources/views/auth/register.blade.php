{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}

 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Register | AfrikTV</title>

      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="robots" content="all,follow">
      <!-- Bootstrap CSS-->
      <link rel="stylesheet" href="{{ asset('template\bootstrap-4.4.1\dist\css\bootstrap.min.css') }}">
      <!-- Custom stylesheet - for your changes-->
      <link rel="stylesheet" href="{{ asset('template/register.css') }}">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  
  <body style="font-family: Poppins;">


<div class="container">
<div class="row">
<div class="col-sm-6">
  <img src="{{ asset('template/img/Bulk-SMS-Signup.png') }}" width="100%" style="margin-top: 10%">
</div>

<div class="col-sm-6" style="margin-top: 10%;">
    <h1>Create an Account</h1>    

      <form>
    <div class="form-group row">
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" placeholder="Username" style="border-radius: 30px;">
        </div>
    </div>
 <div class="form-group row">
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" placeholder="Email Address" style="border-radius: 30px;">
        </div>
    </div>

 {{-- <div class="form-group row">
        <div class="col-sm-10">
            <input type="date" class="form-control" id="date" placeholder="Date of Birth" style="border-radius: 30px; width: 100%;">
        </div>
    </div> --}}


    <div class="form-group row">
        <div class="col-sm-10"> 
            <input type="password" class="form-control" id="inputPassword" placeholder="Password" style="border-radius: 30px; width: 100%;">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword" placeholder="Confirm Password" style="border-radius: 30px; width: 100%;">
        </div>
    </div>
<br>
    <div class="form-check">
    <input type="checkbox" class="form-check-input" id="materialUnchecked">    <label class="form-check-label" for="materialUnchecked">I agree to the <a href="JavaScript:void(0)">Terms and Conditions</a></label>
</div>


    <div class="form-group">
   <br>
            <button type="submit" class="btn btn-primary pull-right" style="border-radius: 20px; background-color: maroon; width: 82%; border-color: maroon;">Sign Up</button>
        </div>
    </div>
</form>
</div>
</div>
<footer class="page-footer font-small mdb-color pt-4" style="background-color:#272D44; color:#fff">
  <div class="container text-center text-md-left">
    <div class="row text-center text-md-left mt-3 pb-3">
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold"><img src="{{ asset('template/img/output-onlinepngtools (2).png') }}" width="45%"></h6>
        <p>Africa's first movie subscription website and a place where you can watch all african blockbuster movies.</p>
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
          <a href="#!" style="color: #fff;">Movies</a>
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
          <i class="fas fa-home mr-3" style="color: #fff;"></i>London, UK.</p>
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
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
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
  </div>

<style type="text/css">
  .dark-mode {
  background-color: black;
  color: white;
}

.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

</style>

  <script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>


  </div>
      <!-- JavaScript files-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
      <script src="{{ asset('template\bootstrap-4.4.1\dist\js\bootstrap.bundle.min.js') }}"></script>
  </body>
  
  </html>