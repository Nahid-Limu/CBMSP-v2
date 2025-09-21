@extends('layouts.app')

@section('title', 'Blog')

@section('css')
<style>
    .hover-shadow {
        transition: 0.3s ease;
    }
    .hover-shadow:hover {
        box-shadow: 0px 4px 25px 0px rgba(27, 39, 71, 0.15);
    }
    
    a h4:hover {
      color: #ffbc3b;
    }
</style>
@endsection

@section('content')

<!-- start #main -->
<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
        <h2>BLOG</h2>
        <p>Welcome to Our Blog</p>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Blog -->
    <section class="section">
      <div class="container">
        <div class="row">
          @foreach ($blogs as $blog)
              <!-- blog post -->
              <article class="col-lg-4 col-sm-6 mb-5">
                <div class="card  rounded-0 border-bottom border border-top-0 border-left-0 border-right-0 hover-shadow">
                  <img class="card-img-top rounded-0" src="{{ asset('assets/img/blog').'/'.$blog->image }}" alt="Post thumb">
                  <div class="card-body">
                    <!-- post meta -->
                    <ul class="list-inline mb-3">
                      {{-- <!-- post date -->
                      <li class="list-inline-item mr-3 ml-0">August 28, 2018</li>
                      <!-- author -->

                      <li class="list-inline-item mr-3 ml-0">By Somrat Sorkar</li> --}}
                      <div class="d-flex">
                        <!-- post date -->
                      <span><i class="bi bi-calendar2-week"></i> {{ date('F j, Y', strtotime($blog->created_at)) }}</span>
                      <!-- author -->
                      <span class="ms-auto"><i class="bi bi-signpost-2"> By </i>{{  $blog->user_name }}</span>
                    </div>

                    </ul>
                    
                    <a href="{{ route('blogDetails', [base64_encode($blog->id)] ) }}">
                      <h4 class="card-title" style="font-family: futura-bold;">{{ ucwords($blog->title) }}</h4>
                    </a>
                    <p class="card-text">{!! Str::limit( strip_tags($blog->content, 50) ) !!}</p>
                    <a href="{{ route('blogDetails', [base64_encode($blog->id)] ) }}" class="btn btn-outline-warning btn-sm"><i class="bi bi-book"></i> read more</a>
                  </div>
                </div>
              </article>
              <!-- blog post -->
          @endforeach
          
        </div>
      </div>
    </section>
    <!-- /Blog -->

</main>
<!-- End #main -->

@endsection
