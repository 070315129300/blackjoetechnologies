<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <base href="/public">
  <title>Blackjoe technologies</title>
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


  <!-- Template Main CSS File -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <link href="assets/css/main.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{asset('images/blackjoe_logo_cropped.png')}}" alt="">
      </a>

      <nav id="navbar" class="navbar">
        <ul>

          <li><a class="nav-link scrollto" href="{{ url('/') }}#hero-fullscreen">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/') }}#about">About</a></li>
          <li class="dropdown megamenu">
              <a class="nav-link scrollto" href="{{ url('/') }}#services"><span>Services</span>
{{--                  <i class="bi bi-chevron-down dropdown-indicator"></i>--}}
              </a>

{{--            <ul>--}}
{{--              <li>--}}
{{--                <a href="{{ url('/') }}" data-bs-toggle="tab" data-bs-target="#tab-4">Co Rent</a>--}}
{{--                <a href="{{ url('/') }}#houseflip">Houseflip</a>--}}
{{--                <a href="{{ url('/') }}#bedspace">BedSpace</a>--}}
{{--              </li>--}}
{{--              <li>--}}
{{--                <a href="{{ url('/') }}#shop4me">Shop4Me</a>--}}
{{--                <a href="{{ url('/') }}#carrier">Carrier</a>--}}
{{--                <a href="{{ url('/') }}#rentabus">RentABus</a>--}}
{{--              </li>--}}
{{--              <li>--}}
{{--                <a href="{{ url('/') }}#xpro">Xpro Marketplace</a>--}}
{{--                <a href="{{ url('/') }}#docsnurs">Docs&Nurs</a>--}}
{{--                <a href="{{ url('/') }}#myschoolpal">MySchoolPal</a>--}}
{{--                  <a href="#">SalezOnline</a>--}}
{{--              </li>--}}

{{--            </ul>--}}
          </li>
          <!-- <li><a class="nav-link scrollto" href="{{ url('/') }}#portfolio">Portfolio</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="{{ url('/') }}#team">Team</a></li> -->
          <li><a href="{{ url('blog') }}">Blog</a></li>
          <!-- <li class="dropdown megamenu"><a href="#"><span>Mega Menu</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>

          </li> -->
          <li><a class="nav-link scrollto" href="{{ url('/') }}#contact">Contact</a></li>


        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      <!-- <a class="btn-getstarted scrollto" href="{{ url('/') }}#about">Get Started</a> -->

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
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">

              <p>
                Lagos Nigeria
              </p>
              <p><a href="mailto:blackjoedev@gmail.com">
                <strong>Email:</strong> blackjoegroup@gmail.com<br>
              </a></p>
            </div>
          </div>

            <div class="col-lg-2 col-md-6 footer-links">
                <!-- <h4>Useful Links</h4> -->
                <ul>
                    <li>
                        <!-- <i class="bi bi-chevron-right"></i>  -->
                        <a href="{{ url('/') }}#hero-fullscreen">Home</a>
                    </li>
                    <li>
                        <!-- <i class="bi bi-chevron-right"></i> -->
                        <a href="{{ url('/') }}#about">About us</a>
                    </li>
                    <li>
                        <!-- <i class="bi bi-chevron-right"></i>  -->
                        <a href="{{ url('/') }}#services">Services</a>
                    </li>
                    <li>
                        <!-- <i class="bi bi-chevron-right"></i>  -->
                        <a href="{{ url('/') }}#contact">Support</a>
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
              <!-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> -->
              <!-- <a href="#" class="facebook"><i class="bi bi-facebook"></i></a> -->
              <a href="https://www.youtube.com/@blackjoetechnologies9457" class="youtube"><i class="bi bi-youtube"></i></a>
              <a href="https://instagram.com/blackjoetechnologies?igshid=NTc4MTIwNjQ2YQ==" class="instagram"><i class="bi bi-instagram"></i></a>
              <!-- <a href="#" class="google-plus"><i class="bi bi-skype"></i></a> -->
              <a href="https://www.linkedin.com/company/blackjoe-technologies/" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>

      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="{{ url('/') }}#hero-fullscreen" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
