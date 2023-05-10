@extends('layouts.apps')

@section('content')
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css/style.css">
    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <h3>Login to <strong>Blackjoe Technologies</strong></h3>
                        <p class="mb-4"> Synergy in the world of technology</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group first">
                                <label for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="your-email@gmail.com" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group last mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Your Password" id="password" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="d-flex mb-5 align-items-center">
                                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                            </div>

                            <input type="submit" value="Log In" class="btn btn-block btn-primary">

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>



    <script src="js/js/jquery-3.3.1.min.js"></script>
    <script src="js/js/popper.min.js"></script>
    <script src="js/js/bootstrap.min.js"></script>
    <script src="js/js/main.js"></script>



