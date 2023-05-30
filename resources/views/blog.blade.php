@extends('layouts.app')

@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>
          <ol>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8">

            <div class="row gy-4 posts-list">
                @foreach($user as $users)
              <div class="col-lg-6">
                <article class="d-flex flex-column">
                  <div class="post-img">
                      <a href="{{ route('blogdetails', $users->id) }}"><img src="blogimage/{{$users->image}}" style="height: 350px" alt="" class="img-fluid"></a>
                  </div>
                    <div class="meta-top">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{ route('blogdetails', $users->id) }}">{{$users->created_at}}</a></li>
                        </ul>
                    </div>
                  <h2 class="title">
                    <a href="{{ route('blogdetails', $users->id) }}">{{$users->topic}}</a>
                  </h2>
                  <div class="content">
                    <p><a href="{{route('blogdetails', $users->id)}}">{{ Str::limit($users->body, 200) }}</a></p>
                  </div>
                  <div class="read-more mt-auto align-self-end">
                    <a href="{{route('blogdetails', $users->id)}}">Read More</a>
                  </div>
                </article>
              </div><!-- End post list item -->
                @endforeach

            </div><!-- End blog posts list -->
                        {{$user->links()}}

          </div>

          <div class="col-lg-4">

            <div class="sidebar">

              <div class="sidebar-item search-form">
                <h3 class="sidebar-title">Search</h3>
                <form action="" class="mt-3">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <div class="sidebar-item categories">
                <h3 class="sidebar-title">Categories</h3>
                <ul class="mt-3">
                  <li><a href="#">General <span>(25)</span></a></li>
                  <li><a href="#">Lifestyle <span>(12)</span></a></li>
                  <li><a href="#">Travel <span>(5)</span></a></li>
                  <li><a href="#">Design <span>(22)</span></a></li>
                  <li><a href="#">Creative <span>(8)</span></a></li>
                  <li><a href="#">Educaion <span>(14)</span></a></li>
                </ul>
              </div><!-- End sidebar categories-->

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Recent Posts</h3>
                    @foreach($blog as $blogs)
                <div class="mt-3">

                  <div class="post-item mt-3">
                    <img src="blogimage/{{$blogs->image}}" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-post.html">{{$blogs->title}}</a></h4>
                      <time>{{$blogs->created_at}}</time>
                    </div>
                  </div><!-- End recent post item-->

                </div>
                  @endforeach

              </div><!-- End sidebar recent posts-->

              <div class="sidebar-item tags">
                <h3 class="sidebar-title">Tags</h3>
                <ul class="mt-3">
                  <li><a href="#">App</a></li>
                  <li><a href="#">IT</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Mac</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Office</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Studio</a></li>
                  <li><a href="#">Smart</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End Blog Sidebar -->

          </div>

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  @endsection
