<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>About | AfrikTV</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('template\bootstrap-4.4.1\dist\css\bootstrap.min.css') }}">

    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('template/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('template\css/owl.carousel.css') }}"/>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
</head>   
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn"><i class="fas fa-bars"></i></label>
        <label class="logo">AfrikTV</label>
        <ul>
            <li><a class="active" href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Sign Up</a></li>
            <li><a href="#"></a></li>
        </ul>
    </nav>
    <div class="jumbotron" style="height: 400px;">
        <br><br>
        <h1 align="center">About Us</h1>
    </div>
    <div class="container">
        <div class="row"></div>
        <h3>About Us</h3>
        <hr width="30%" style="background-color: maroon; height: 1px; border-radius: 20px;">
        <p>AfrikTV is the first movie subscription website in Africa. It was created by Africans for Africans and it is a company that was created in 2020 to improve the standard of the entertainment industry and also to improve the African culture. It was created by two people namely: Opemipo Disu (a 14-year-old developer, Developer Advocate and an IBM Champion from Nigeria) and @LordGhostX during the COVID-19 pandemic in 2020. 
        <br>
        AfrikTV is currently one of the best move subscription website that partners with lots of industries in different countries like Nigeria, Kenya, Uganda, Kenya, South Africa etc. It is a top African website with lots of features, you can simply check your account usage and different things on AfrikTV.</p>
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
                    <p class="text-center text-md-left">Copyright © AfrikTV 2020 | All rights reserved
                </div>
                <div class="col-md-5 col-lg-4 ml-lg-0">
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
            </div>
        </div>
    </footer>
    <script src="{{ asset('template/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('template/js/circle-progress.min.js') }}"></script>
    <script src="{{ asset('template/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="{{ asset('template\bootstrap-4.4.1\dist\js\bootstrap.bundle.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>