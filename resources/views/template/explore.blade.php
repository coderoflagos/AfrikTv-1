<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Dashboard | AfrikTV</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('template\bootstrap-4.4.1\dist\css\bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('template/main.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('template/css/owl.carousel.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/explore.css') }}">
</head>

    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">AfrikTV</label>
      <ul>
<li><a class="active" href="/explore">Explore</a></li>
<li><a href="#">Trending</a></li>
<li><a href="#">Series</a></li>
<li><a href="/explore">Movies</a></li>
<li><a href="#">Recently Added</a></li>
<li><a href="#">My Movies</a></li>
<li><a href="#"><img src="{{ asset('template/go.jpg') }}" class="rounded-circle"></a></li>
</ul>

</nav>


</div>
</body>
</html>


<div class="main">
 <div class="container">
  <div class="row"></div>
 
<h2>Explore Movies</h2>

<hr style="background-color: maroon; height:2px;" width="5%">
</div>
</div>
<div class="container">
  <div class="row">
            <div class="col-xl-3 col-md-4 mb-4">
              <div class="card offer-card shadow border-0">
                  <div class="m-card-cover">
                    <img src="{{ asset('template/img/bg.jpg') }}" class="card-img-top" alt="First Movie image">
                  </div>
                  <div class="card-body p-3">
                    <p class="card-text text-gray-900 mt-3 mb-3">Movie 1</p>
                

                     <button type="button" class="btn btn-outline-secondary" style="border-radius: 0px;" data-toggle="modal" data-target="#myModal1">
    Open modal
  </button>
  <!-- The Modal -->
  <div class="modal fade" id="myModal1">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Movie Information</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <h3>Smooth scrolling</h3>
      
    </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> 
  
                  </div>
            
 
              </div>
            </div>
            <div class="col-xl-3 col-md-4 mb-4">
              <div class="card offer-card shadow border-0">
               
                  <div class="m-card-cover">
                    <img src="{{ asset('template/img/bg.jpg') }}" class="card-img-top" alt="Movie 2">
                  </div>
                  <div class="card-body p-3">
                    <p class="card-text text-gray-900 mt-3 mb-3">Movie 2</p>
                   

                     <button type="button" class="btn btn-outline-secondary" style="border-radius: 0px;" data-toggle="modal" data-target="#myModal2">
    Open modal
  </button>
  <!-- The Modal -->
  <div class="modal fade" id="myModal2">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Movie Information</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <h3>Smooth scrolling</h3>
      
    </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> 
  

       </div>

              </div>
            </div>
            <div class="col-xl-3 col-md-4 mb-4">
              <div class="card offer-card shadow border-0">
                
                  <div class="m-card-cover">
                    <img src="{{ asset('template/img/bg.jpg') }}" class="card-img-top" alt="...">
                  </div>
                  <div class="card-body p-3">
                    <p class="card-text text-gray-900 mt-3 mb-3">Movie 3</p>
                  


                                      <button type="button" class="btn btn-outline-secondary" style="border-radius: 0px;" data-toggle="modal" data-target="#myModal3">
    Open modal
  </button>
  <!-- The Modal -->
  <div class="modal fade" id="myModal3">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Movie Information</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <h3>Smooth scrolling1</h3>
      
    </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
                  </div>
                
              </div>
            </div>
            <div class="col-xl-3 col-md-4 mb-4">
              <div class="card offer-card shadow border-0">
        
                  <div class="m-card-cover">
                    <img src="{{ asset('template/img/bg.jpg') }}" class="card-img-top" alt="...">
                  </div>
                  <div class="card-body p-3">
                    <p class="card-text text-gray-900 mt-3 mb-3">Movie 4</p>
                                       <button type="button" class="btn btn-outline-secondary" style="border-radius: 0px;" data-toggle="modal" data-target="#myModal4">
    Open modal
  </button>
  <!-- The Modal -->
  <div class="modal fade" id="myModal4">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Movie Information</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <h3>Smooth scrolling</h3>
      
    </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> 
  
                  </div>


              
              </div>
            </div>
</div>
</div>

<div class="container">
  <div class="row">
            <div class="col-xl-3 col-md-4 mb-4">
              <div class="card offer-card shadow border-0">
              
                  <div class="m-card-cover">
                    <img src="{{ asset('template/img/bg.jpg') }}" class="card-img-top" alt="First Movie image">
                  </div>
                  <div class="card-body p-3">
                    <p class="card-text text-gray-900 mt-3 mb-3">Movie 5</p>

                                         <button type="button" class="btn btn-outline-secondary" style="border-radius: 0px;" data-toggle="modal" data-target="#myModal5">
    Open modal
  </button>
  <!-- The Modal -->
  <div class="modal fade" id="myModal5">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Movie Information</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <h3>Smooth scrolling</h3>
      
    </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> 
  

                  </div>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-md-4 mb-4">
              <div class="card offer-card shadow border-0">
                  <div class="m-card-cover">
                    <img src="{{ asset('template/img/bg.jpg') }}" class="card-img-top" alt="Movie 2">
                  </div>
                  <div class="card-body p-3">
                    <p class="card-text text-gray-900 mt-3 mb-3">Movie 6</p>
                  
                                         <button type="button" class="btn btn-outline-secondary" style="border-radius: 0px;" data-toggle="modal" data-target="#myModal6">
    Open modal
  </button>
  <!-- The Modal -->
  <div class="modal fade" id="myModal6">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Movie Information</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <h3>Smooth scrolling</h3>
      
    </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> 
  
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-md-4 mb-4">
              <div class="card offer-card shadow border-0">
                  <div class="m-card-cover">
                    <img src="{{ asset('template/img/bg.jpg') }}" class="card-img-top" alt="...">
                  </div>
                  <div class="card-body p-3">
                    <p class="card-text text-gray-900 mt-3 mb-3">Movie 7</p>
                
                                         <button type="button" class="btn btn-outline-secondary" style="border-radius: 0px;" data-toggle="modal" data-target="#myModal7">
    Movie Information
  </button>
  <!-- The Modal -->
  <div class="modal fade" id="myModal7">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Movie Information</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <h3>Smooth scrolling</h3>
      
    </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> 
  
                  </div>
            
              </div>
            </div>
            <div class="col-xl-3 col-md-4 mb-4">
              <div class="card offer-card shadow border-0">
                  <div class="m-card-cover">
                    <img src="{{ asset('template/img/bg.jpg') }}" class="card-img-top" alt="...">
                  </div>
                  <div class="card-body p-3">
                    <p class="card-text text-gray-900 mt-3 mb-3">Movie 8</p>
                  
                                         <button type="button" class="btn btn-outline-secondary" style="border-radius: 0px;" data-toggle="modal" data-target="#myModal5">
 Movie Information
  </button>
  <!-- The Modal -->
  <div class="modal fade" id="myModal5">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Movie Information</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <h3>Smooth scrolling</h3>
      
    </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> 
  
                  </div>
                </a>
              </div>
            </div>
</div>
</div>

<div class="container">
  <div class="row">
            <div class="col-xl-3 col-md-4 mb-4">
              <div class="card offer-card shadow border-0">
             
                  <div class="m-card-cover">
                    <img src="{{ asset('template/img/bg.jpg') }}" class="card-img-top" alt="First Movie image">
                  </div>
                  <div class="card-body p-3">
                    <p class="card-text text-gray-900 mt-3 mb-3">Movie 9</p>
                       <button type="button" class="btn btn-outline-secondary" style="border-radius: 0px;" data-toggle="modal" data-target="#myModal9">
    Movie Information
  </button>
  <!-- The Modal -->
  <div class="modal fade" id="myModal9">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Movie Information</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <h3>Smooth scrolling</h3>
      
    </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> 
  
                  </div>
               
              </div>
            </div>
            <div class="col-xl-3 col-md-4 mb-4">
              <div class="card offer-card shadow border-0">
            
                  <div class="m-card-cover">
                    <img src="{{ asset('template/img/bg.jpg') }}" class="card-img-top" alt="Movie 2">
                  </div>
                  <div class="card-body p-3">
                    <p class="card-text text-gray-900 mt-3 mb-3">Movie 10</p>
   <button type="button" class="btn btn-outline-secondary" style="border-radius: 0px;" data-toggle="modal" data-target="#myModal10">
    Movie Information
  </button>
  <!-- The Modal -->
  <div class="modal fade" id="myModal10">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Movie Information</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <h3>Smooth scrolling</h3>
      
    </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> 
  
                  </div>
                            </div>
            </div>
            <div class="col-xl-3 col-md-4 mb-4">
              <div class="card offer-card shadow border-0">
                
                  <div class="m-card-cover">
                    <img src="{{ asset('template/img/bg.jpg') }}" class="card-img-top" alt="...">
                  </div>
                  <div class="card-body p-3">
                    <p class="card-text text-gray-900 mt-3 mb-3">Movie 11</p>
               <button type="button" class="btn btn-outline-secondary" style="border-radius: 0px;" data-toggle="modal" data-target="#myModal11">
    Movie Information
  </button>
  <!-- The Modal -->
  <div class="modal fade" id="myModal11">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Movie Information</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <h3>Smooth scrolling</h3>
      
    </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> 
                  </div>
              
  
              </div>
            </div>
            <div class="col-xl-3 col-md-4 mb-4">
              <div class="card offer-card shadow border-0">
                <a href="#">
                  <div class="m-card-cover">
                    <img src="{{ asset('template/img/bg.jpg') }}" class="card-img-top" alt="...">
                  </div>
                  <div class="card-body p-3">
                    <p class="card-text text-gray-900 mt-3 mb-3">Sample Song 1</p>
                    <p class="card-text"><small class="text-muted"><span class="text-gray-700">13 July 2020 23:59</span></small></p>
                  </div>
                </a>
              </div>
            </div>
</div>
</div>

<div class="container">
  <div class="row">
            <div class="col-xl-3 col-md-4 mb-4">
              <div class="card offer-card shadow border-0">
                <a href="#">
                  <div class="m-card-cover">
                    <img src="{{ asset('template/img/bg.jpg') }}" class="card-img-top" alt="First Movie image">
                  </div>
                  <div class="card-body p-3">
                    <p class="card-text text-gray-900 mt-3 mb-3">Movie 1</p>
                    <p class="card-text"><small class="text-muted"><span class="text-gray-700">13 July 2020 23:59</span></small></p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-md-4 mb-4">
              <div class="card offer-card shadow border-0">
                <a href="#">
                  <div class="m-card-cover">
                    <img src="{{ asset('template/img/bg.jpg') }}" class="card-img-top" alt="Movie 2">
                  </div>
                  <div class="card-body p-3">
                    <p class="card-text text-gray-900 mt-3 mb-3">Sample Song 1</p>
                    <p class="card-text"><small class="text-muted"><span class="text-gray-700">13 July 2020 23:59</span></small></p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-md-4 mb-4">
              <div class="card offer-card shadow border-0">
                <a href="#">
                  <div class="m-card-cover">
                    <img src="{{ asset('template/img/bg.jpg') }}" class="card-img-top" alt="...">
                  </div>
                  <div class="card-body p-3">
                    <p class="card-text text-gray-900 mt-3 mb-3">Sample Song 1</p>
                    <p class="card-text"><small class="text-muted"><span class="text-gray-700">13 July 2020 23:59</span></small></p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-md-4 mb-4">
              <div class="card offer-card shadow border-0">
                <a href="#">
                  <div class="m-card-cover">
                    <img src="{{ asset('template/img/bg.jpg') }}" class="card-img-top" alt="...">
                  </div>
                  <div class="card-body p-3">
                    <p class="card-text text-gray-900 mt-3 mb-3">Sample Song 1</p>
                    <p class="card-text"><small class="text-muted"><span class="text-gray-700">13 July 2020 23:59</span></small></p>
                  </div>
                </a>
              </div>
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

      <!-- JavaScript files-->


<script type="text/javascript">
    $('button[data-toggle=modal]').click(function(){      
      $(".modal").modal();
    });
</script>


  <script src="{{ asset('template/js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('template/js/mixitup.min.js') }}"></script>
  <script src="{{ asset('template/js/circle-progress.min.js') }}"></script>
  <script src="{{ asset('template/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('template/js/main.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
       <script src="{{ asset('template\bootstrap-4.4.1\dist\js\bootstrap.min.js') }}"></script>
      <script src="{{ asset('template\bootstrap-4.4.1\dist\js\bootstrap.bundle.min.js') }}"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>