<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Blackjoe technologies</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>
<body>
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">
      <a href="{{ url('/') }}" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <img src="{{asset('images/blackjoe_logo_cropped.png')}}" alt="">
      </a>
    </div>
  </header>
  <!-- End Header -->
  <main id="main">
<!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-header">
          <h2>Admin Login</h2>
        </div>
      </div>
      <div class="container">
        <div class="row gy-5 gx-lg-5">
          <div class="col-lg-4">
          </div>
          <div class="col-lg-4">
            <form action="{{ route('login') }}" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                @csrf
              <div class="row">
                <div class="row col-md-12 form-group" style="margin-bottom: 20px";>
                  <p class="col-md-6">Email: </p>
                  <input type="text" name="name" class="form-control col-md-6 @error('email') is-invalid @enderror" id="name" placeholder="Your Email"  required autocomplete="email" autofocus required>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class=" row col-md-12 form-group mt-3 mt-md-0">
                  <p class="col-md-6">Password: </p>
                  <input type="password" class=" col-md-6 form-control " name="email" id="email" placeholder="Your Password" required>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
              </div>
              <div class="text-center"><button type="submit">Sign In</button></div>
            </form>
          </div>
          <!-- End Contact Form -->
          <div class="col-lg-4">
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->

  <footer id="footer" class="footer" style="margin-top: 170px">
    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">
        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            &copy; Copyright <strong><span>BlackJoe Technologies</span></strong>. All Rights Reserved
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


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

