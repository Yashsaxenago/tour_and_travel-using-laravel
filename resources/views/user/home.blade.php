<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Tour And Travel</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Tour &</span>-Travel</a>

        <!--<form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>
-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.html">Package</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="appointment.blade.php">Book</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            @if(Route::has('login'))
            @auth 
            <x-app-layout>
            </x-app-layout>
            @else

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login </a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>
            @endauth
            @endif

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  @if(session()->has('message'))
  <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">
          x
</button>
{{session()->get('message')}}
</div>
@endif

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/6.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Let's make your life happier</span>
        <h1 class="display-4">Explore The World</h1>
        <a href="#appo" class="btn btn-primary">Let's book</a>
      </div>
    </div>
  </div>


  


   <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Welcome to the Tour and  <br> Travel</h1>
            <p class="text-grey mb-4">We Are A Main Online Travel Organization In America Giving A ‘Best As Far As A Class Can Tell With The Objective To Be ‘ America ‘S Travel Planner’. Through Our Site, Www.’Company Name’.Com, Our Versatile Applications, And Our Other Related Stages, Recreation, And Business Voyagers Can Investigate, Explore, Analyze Costs And Book An Extensive Variety Of Administrations Taking Into Account Their Movement Needs.</p>
            <a href="about.html" class="btn btn-primary">Learn More</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/34.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  <h1 class="text-center wow fadeInUp mt-5">Our Packages</h1>


   <!--cards-->
   <div class="container mt-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="../assets/img/4.jpg" class="card-img-top" alt="...">

                        <div class="card-body">
                            <h5 class="card-title">Maldives</h5>
                            <p class="card-text">No Matter Where In The World You Want To Go, We Can Help Get You There . Book your tickets now.Happy journey.</p>
                            <a href="#appo" class="btn btn-primary">Book Now</a>
                            
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="../assets/img/5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">America</h5>
                            <p class="card-text">No Matter Where In The World You Want To Go, We Can Help Get You There . Book your tickets now.Happy journey.</p>
                            <a href="#appo" class="btn btn-primary">Book Now</a>
                            
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="../assets/img/6.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Norway</h5>
                            <p class="card-text">No Matter Where In The World You Want To Go, We Can Help Get You There . Book your tickets now.Happy journey.</p>
                            <a href="#appo" class="btn btn-primary">Book Now</a>
                            
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="../assets/img/7.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">America</h5>
                            <p class="card-text">No Matter Where In The World You Want To Go, We Can Help Get You There . Book your tickets now.Happy journey.</p>
                            <a href="#appo" class="btn btn-primary">Book Now</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--card 2-->
        <div class="container mt-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="../assets/img/as.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">India</h5>

                                <p class="card-text">No Matter Where In The World You Want To Go, We Can Help Get You There . Book your tickets now.Happy journey.</p>
                                <a href="#appo" class="btn btn-primary">Book Now</a>
                               

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="../assets/img/6.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">China</h5>
                                <p class="card-text">No Matter Where In The World You Want To Go, We Can Help Get You There . Book your tickets now.Happy journey.</p>
                                <a href="#appo" class="btn btn-primary">Book Now</a>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="../assets/img/5.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Italy</h5>
                                <p class="card-text">No Matter Where In The World You Want To Go, We Can Help Get You There . Book your tickets now.Happy journey.</p>
                                <a href="#appo" class="btn btn-primary">Book Now</a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="../assets/img/7.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Canda</h5>
                                <p class="card-text">No Matter Where In The World You Want To Go, We Can Help Get You There . Book your tickets now.Happy journey.</p>
                                <a href="#appo" class="btn btn-primary">Book Now</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
  

  <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Top Destinations</h1>
      

      
   


<div class="container mt-5">
  <div class="card">
  <ul class="list-unstyled">
  <li class="media">
    <img src="../assets/img/xc2.jpg" class="mr-3" alt="...">
    <div class="media-body mt-5">
      <h5 class="">Norway</h5>
      <p>France (French: [fʁɑ̃s] Listen), officially the French Republic (French: République française[12]), is a transcontinental country spanning Western Europe and overseas regions and territories in the Americas and the Atlantic, Pacific and Indian Oceans.[XII] Its metropolitan area extends from the Rhine to the Atlantic Ocean and from the Mediterranean Sea to the English Channel and the North Sea; overseas territories include French Guiana in South America, Saint Pierre and Miquelon in the North Atlantic, the French West Indies, and many islands in Oceania and the Indian Ocean. Due to its several coastal territories, France has the largest exclusive economic zone in the world. France borders Belgium, Luxembourg, Germany, Switzerland, Monaco, Italy, Andorra and Spain in Europe, as well as the Netherlands, Suriname and Brazil in the Americas. Its eighteen integral regions (five of which are overseas) span a combined area of 643,801 km2 (248,573 sq mi) and over 67 million people (as of May 2021).[3] France is a unitary semi-presidential republic with its capital in Paris, the country's largest city and main cultural and commercial centre; other major urban areas include Marseille, Lyon, Toulouse, Lille, Bordeaux, and Nice.</p>
    </div>
    
  </li>
</div>
<div class="card">
  <li class="media">
    <img src="../assets/img/zx1.jpg" class="mr-3" alt="...">
    <div class="media-body mt-5">
      <h4 class="mt-0 mb-1">France</h4>
      <p>France (French: [fʁɑ̃s] Listen), officially the French Republic (French: République française[12]), is a transcontinental country spanning Western Europe and overseas regions and territories in the Americas and the Atlantic, Pacific and Indian Oceans.[XII] Its metropolitan area extends from the Rhine to the Atlantic Ocean and from the Mediterranean Sea to the English Channel and the North Sea; overseas territories include French Guiana in South America, Saint Pierre and Miquelon in the North Atlantic, the French West Indies, and many islands in Oceania and the Indian Ocean. Due to its several coastal territories, France has the largest exclusive economic zone in the world. France borders Belgium, Luxembourg, Germany, Switzerland, Monaco, Italy, Andorra and Spain in Europe, as well as the Netherlands, Suriname and Brazil in the Americas. Its eighteen integral regions (five of which are overseas) span a combined area of 643,801 km2 (248,573 sq mi) and over 67 million people (as of May 2021).[3] France is a unitary semi-presidential republic with its capital in Paris, the country's largest city and main cultural and commercial centre; other major urban areas include Marseille, Lyon, Toulouse, Lille, Bordeaux, and Nice.</p>
    </div>
  </li>
</div>
<div class="card">
  <li class="media">
    <img src="../assets/img/cv2.jpg" class="mr-3" alt="...">
    <div class="media-body mt-5">
      <h5 class="mt-0 mb-1">Japan</h5>
      <p>France (French: [fʁɑ̃s] Listen), officially the French Republic (French: République française[12]), is a transcontinental country spanning Western Europe and overseas regions and territories in the Americas and the Atlantic, Pacific and Indian Oceans.[XII] Its metropolitan area extends from the Rhine to the Atlantic Ocean and from the Mediterranean Sea to the English Channel and the North Sea; overseas territories include French Guiana in South America, Saint Pierre and Miquelon in the North Atlantic, the French West Indies, and many islands in Oceania and the Indian Ocean. Due to its several coastal territories, France has the largest exclusive economic zone in the world. France borders Belgium, Luxembourg, Germany, Switzerland, Monaco, Italy, Andorra and Spain in Europe, as well as the Netherlands, Suriname and Brazil in the Americas. Its eighteen integral regions (five of which are overseas) span a combined area of 643,801 km2 (248,573 sq mi) and over 67 million people (as of May 2021).[3] France is a unitary semi-presidential republic with its capital in Paris, the country's largest city and main cultural and commercial centre; other major urban areas include Marseille, Lyon, Toulouse, Lille, Bordeaux, and Nice.</p>
    </div>
  </li>
</div>
</ul>
</div>
</div>

</div>
  </div> <!-- .page-section -->


@include('user.appointment')


 <!-- .page-section -->

   <!-- .banner-home -->

  <footer class="page-footer">
    <div class="container-fluid">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Package</a></li>
            <li><a href="#">Book</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Join Us</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Our partner</h5>
          <ul class="footer-menu">
            <li><a href="#">Tata</a></li>
            <li><a href="#">Reliance</a></li>
            <li><a href="#">Adani</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">351 Astro Road, Mumbai ,112233</p>
          <a href="#" class="footer-link">701-573-7582</a>
          <a href="#" class="footer-link">tourandtrvael@temp.net</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2020 <a href="https://macodeid.com/" target="_blank">Tour and Travel</a>. All right reserved</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  
</body>
</html>