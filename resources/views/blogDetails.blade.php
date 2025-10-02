@extends('layouts.app')

@section('title', 'Blog Details')

@section('head')
  <meta property="og:title" content="{{ ucwords($Blog->title) }}" />
  <meta property="og:description" content="{!! Str::limit( strip_tags($Blog->content, 150) ) !!}" />
  <meta property="og:image" content="{{ asset('assets/img/blog/' . $Blog->image) }}" />
  <meta property="og:url" content="{{ url()->current() }}" />
  <meta property="og:type" content="article" />
@endsection

@section('css')
<style>
    .hover-shadow {
        transition: 0.3s ease;
    }
    .hover-shadow:hover {
        box-shadow: 0px 4px 25px 0px rgba(27, 39, 71, 0.15);
    }

    div#social-links {
            margin: 0 auto;
            max-width: 500px;
        }
        div#social-links ul li {
            display: inline-block;
        }          
        div#social-links ul li a {
            padding: 10px 20px;
            border: 1px solid #ccc;
            margin: 1px;
            font-size: 30px;
            background-color: white;
        }

    

</style>
@endsection

@section('content')

<!-- start #main -->
<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
        <h2>Our Blog</h2>
        <p>Details</p>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- blog details -->
    <section class="section-sm bg-light">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-4">
            <img src="{{ asset('assets/img/blog').'/'.$Blog->image }}" alt="blog-thumb" class="img-fluid w-100">
          </div>
          <div class="col-12">
            
              <div class="d-flex">
                <span><i class="bi bi-signpost-2 text-danger"> Post By : </i>{{  $Blog->user_name }}</span>
                <span class="ms-auto"><i class="bi bi-calendar2-week  text-danger"> Date : </i> {{ date('F j, Y', strtotime($Blog->created_at)) }}</span>
              </div>

            <!-- border -->
            <hr>
            
          </div>
          
          <!-- blog contect -->
          <div class="col-12 mb-5">
            <h2 style="color: #1e1e4b; font-family: futura-bold; font-weight: 700;">{{ ucwords($Blog->title) }}</h2>
            <p>{!! $Blog->content !!}</p>
          </div>

          <!-- Social Share -->
          <div id="social-links" class="text-center">
            {!! 
                  Share::page(url()->current(), $Blog->title)
                            ->facebook()
                            ->twitter()
                            ->linkedin('Extra linkedin summary can be passed here')
                            ->whatsapp(); 
              !!}
              <span >Share This On Social Media</span>
          </div>
          
          
          <!-- comment box -->
          <div class="col-12 bg-white p-3">
            <form action="#" class="row">
              <div class="col-sm-6">
                <input type="text" class="form-control mb-4" id="name" name="name" placeholder="Full Name" required>
              </div>
              <div class="col-sm-6">
                <input type="email" class="form-control mb-4" id="mail" name="mail" placeholder="Email Address" required>
              </div>
              <div class="col-12">
                <textarea name="comment" id="comment" class="form-control mb-4" placeholder="Comment Here..." required></textarea>
              </div>
              <div class="col-12">
                <button type="submit" value="send" class="btn btn-primary" disabled>post comment</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </section>
    <!-- /blog details -->

</main>
<!-- End #main -->

@endsection
