@extends('layouts.app')

@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog Details</h2>
          <ol>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ route('blog') }}">Blog</a></li>
            <li>Blog Details</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8">

            <article class="blog-details">

              <div class="post-img">
                  <img src="blogimage/{{$user->image}}" style="height: 350px" alt="" class="img-fluid">
              </div>
                <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> {{$user->created_at}}</li>
                </ul>
              </div><!-- End meta top -->

              <div class="content">

                <h3>{{$user->topic}}</h3>
                <p>{{$user->body}}
                </p>
              </div><!-- End post content -->

            </article><!-- End blog post -->

          </div>


          </div>
        </div>


    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->

@endsection
