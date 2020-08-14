{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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
    <title>Sign In | AfrikTV</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
      
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('template\bootstrap-4.4.1\dist\css\bootstrap.min.css') }}">
      
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('template/register.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body style="font-family: Poppins;">
    <script>
        function myFunction() {
            var element = document.body;
            element.classList.toggle("dark-mode");
        }
    </script>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <center>
                    <img src="{{ asset('template/img/Bulk-SMS-Signup.png') }}" width="100%" style="margin-top: 10%">
                </center>
            </div>
            <br><br><br><br>
            <div class="col-sm-6" style="margin-top: 10%;">
                <h1>Login - AfrikTV</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" style="border-radius: 30px;" placeholder="{{ __('E-Mail Address') }}">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="border-radius: 30px; width: 100%;" placeholder="{{ __('Password') }}">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    @if (Route::has('password.request'))
                        <div class="form-group">
                            <p>Have you <a class="btn btn-link" href="{{ route('password.request') }}">forgotten your password</a>?</p>
                        </div>
                    @endif
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary pull-right" style="border-radius: 20px; background-color: maroon; width: 82%; border-color:maroon;">{{ __('Sign In') }}</button>
                    </div>
                </form>
            </div>
        </div></div>
    <footer class="page-footer font-small mdb-color pt-4" style="background-color:#272D44; color:#fff">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left mt-3 pb-3">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold"><img src="{{ asset('template/img/logo.png') }}" width="45%"></h6>
                    <p>Africa's first movie subscription website and a place where you can watch all african blockbuster movies.</p>
                </div>
                <hr class="w-100 clearfix d-md-none">
                <hr class="w-100 clearfix d-md-none">
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">About Us</h6>
                    <p><a href="#!" style="color: #fff;">Our Blog</a></p>
                    <p><a href="#!" style="color: #fff;">Our Team</a></p>
                    <p><a href="#!" style="color: #fff;">Developers</a></p>
                    <p><a href="/explore" style="color: #fff;">Movies</a></p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Contact Us</h6>
                    <p><a href="" style="color: #fff;">Report a Bug</a></p>
                    <p><a href="#!" style="color: #fff;">FAQs</a></p>
                    <p><a href="#!" style="color: #fff;">Send a request</a></p>
                    <p><a href="#!" style="color: #fff;">Support Center</a></p>
                </div>
                <hr class="w-100 clearfix d-md-none">
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                    <p><i class="fas fa-home mr-3" style="color: #fff;"></i>London, UK.</p>
                    <p><i class="fas fa-envelope mr-3" style="color: #fff;"></i> info@afriktv.com</p>
                    <p><i class="fas fa-phone mr-3" style="color: #fff;"></i> + 234 811 111 7300</p>
                    <p><i class="fas fa-print mr-3" style="color: #fff;"></i> + 234 802 375 2028</p>
                </div>
            </div>
            <hr>
            <div class="row d-flex align-items-center">
                <div class="col-md-7 col-lg-8">
                    <p class="text-center text-md-left">Copyright © AfrikTV 2020 | All rights reserved</p>
                </div>
                <div class="col-md-5 col-lg-4 ml-lg-0">
                    <div class="text-center text-md-right">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1"><i class="fab fa-google-plus-g"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1"><i class="fab fa-linkedin-in"></i></a>
                                <label class="switch">
                                    <input type="checkbox"><span class="slider round" onclick="myFunction()"></span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript files-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="{{ asset('template\bootstrap-4.4.1\dist\js\bootstrap.bundle.min.js') }}"></script>
</body>
</html>