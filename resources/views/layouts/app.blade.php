<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BLACKJOE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">





</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="{{ route('index') }}" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{asset('images/blackjoe_logo_cropped.png')}}" alt="">
        <!-- <h1>BLACKJOE<span>.</span></h1> -->
      </a>

      <nav id="navbar" class="navbar">
        <ul>

          <li><a class="nav-link scrollto" href="{{ route('index') }}#hero-fullscreen">Home</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Home</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a> -->
            <!-- <ul>
              <li><a href="{{ route('index') }}">Home 1 - index.html</a></li>
              <li><a href="index-2.html">Home 2 - index-2.html</a></li>
              <li><a href="index-3.html" class="active">Home 3 - index-3.html</a></li>
              <li><a href="index-4.html">Home 4 - index-4.html</a></li>
            </ul> -->
          </li>

          <li><a class="nav-link scrollto" href="{{ route('index') }}#about">About</a></li>
          <li class="dropdown megamenu"><a class="nav-link scrollto" href="{{ route('index') }}#services"><span>Services</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li>
                <a href="#">Co Rent</a>
                <a href="#">Houseflip</a>
                <a href="#">BedSpace</a>
              </li>
              <li>
                <a href="#">Shop4Me</a>
                <a href="#">Carrier</a>
                <a href="#">RentABus</a>
              </li>
              <li>
                <a href="#">Xpro Marketplace</a>
                <a href="#">Docs&Nurs</a>
                <a href="#">MySchoolPal</a>
              </li>
              <li>
                <a href="#">SalezOnline</a>
                <a href="#">Column 4 link 2</a>
                <a href="#">Column 4 link 3</a>
              </li>
            </ul>
          </li>
          <!-- <li><a class="nav-link scrollto" href="{{ route('index') }}#portfolio">Portfolio</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="{{ route('index') }}#team">Team</a></li> -->
          <li><a href="{{ route('blog') }}">Blog</a></li>
          <!-- <li class="dropdown megamenu"><a href="#"><span>Mega Menu</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li>
                <a href="#">Column 1 link 1</a>
                <a href="#">Column 1 link 2</a>
                <a href="#">Column 1 link 3</a>
              </li>
              <li>
                <a href="#">Column 2 link 1</a>
                <a href="#">Column 2 link 2</a>
                <a href="#">Column 3 link 3</a>
              </li>
              <li>
                <a href="#">Column 3 link 1</a>
                <a href="#">Column 3 link 2</a>
                <a href="#">Column 3 link 3</a>
              </li>
              <li>
                <a href="#">Column 4 link 1</a>
                <a href="#">Column 4 link 2</a>
                <a href="#">Column 4 link 3</a>
              </li>
            </ul>
          </li> -->
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="nav-link scrollto" href="{{ route('index') }}#contact">Contact</a></li>
          <!-- <li><a href="{{ route('index') }}">Others</a></li> -->
          <!-- <li><a href="{{ route('index') }}">Testimonials</a></li> -->

        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      <!-- <a class="btn-getstarted scrollto" href="{{ route('index') }}#about">Get Started</a> -->

    </div>
  </header>
  <!-- End Header -->

    @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container" >
        <div class="row" >

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>BlackJoe Technologies</h3>
              <!-- <p>
                Lagos Nigeria
              </p>
              <p> -->
                <!-- <strong>Phone:</strong> +1 5589 55488 55<br> -->
                <!-- <strong>Email:</strong> blackjoegroup@gmail.com<br>
              </p> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <!-- <h3>BlackJoe Technologies</h3> -->
              <p>
                Lagos Nigeria
              </p>
              <p><a href="mailto:blackjoedev@gmail.com">
                <!-- <strong>Phone:</strong> +1 5589 55488 55<br> -->
                <strong>Email:</strong> blackjoegroup@gmail.com<br>
              </a></p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <!-- <h4>Useful Links</h4> -->
            <ul>
              <li>
                <!-- <i class="bi bi-chevron-right"></i>  -->
                <a href="#">Home</a>
              </li>
              <li>
                <!-- <i class="bi bi-chevron-right"></i> -->
                 <a href="#">About us</a>
              </li>
              <li>
                <!-- <i class="bi bi-chevron-right"></i>  -->
                <a href="#">Services</a>
            </li>
              <li>
                <!-- <i class="bi bi-chevron-right"></i>  -->
                <a href="#">Support</a>
              </li>
              <li>
                <!-- <i class="bi bi-chevron-right"></i>  -->
                <a href="#">Privacy policy</a>
              </li>
            </ul>
          </div>

          <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div> -->

        </div>
      </div>
    </div>

    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            &copy; Copyright <strong><span>BlackJoe Technologies</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
          </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <!-- <a href="#" class="google-plus"><i class="bi bi-skype"></i></a> -->
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
