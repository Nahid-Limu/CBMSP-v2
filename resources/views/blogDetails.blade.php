@extends('layouts.app')

@section('title', 'Blog Details')

@section('css')
<style>
    .hover-shadow {
        transition: 0.3s ease;
    }
    .hover-shadow:hover {
        box-shadow: 0px 4px 25px 0px rgba(27, 39, 71, 0.15);
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
        <p>Blog Details</p>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- blog details -->
    <section class="section-sm bg-light">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-4">
            <img src="assets/img/blog/blog-single.jpg" alt="blog-thumb" class="img-fluid w-100">
          </div>
          <div class="col-12">
            {{-- <ul class="list-inline">
              <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><span class="font-weight-bold mr-2">Post:</span>Somrat</li>
              <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light">August 28, 2017</li>
              <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><i class="ti-book mr-2"></i>Read 289</li>
              <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><i class="ti-share mr-2"></i>289</li>
              <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><a class="text-light" href="blog-single.html"><i class="ti-comments mr-2"></i>265</a></li>
            </ul>
            <span class="font-weight-bold mr-2">  <sppan class="text-end">right-aligned span</span> --}}
              <div class="d-flex">
                <span><i class="bi bi-signpost-2 text-danger"> Post By : </i>Somrat</span>
                <span class="ms-auto"><i class="bi bi-calendar2-week  text-danger"> Date : </i> August 28, 2017</span>
              </div>
            <hr>
          </div>
          <!-- border -->
          {{-- <div class="col-12 mt-4">
            <div class="border-bottom border-primary"></div>
            <hr>
          </div> --}}
          <!-- blog contect -->
          <div class="col-12 mb-5">
            <h2 style="color: #1e1e4b; font-family: futura-bold; font-weight: 700;">Lorem ipsum dolor amet, consectetur adipisicing eiusmod tempor </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
              commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
              nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
              anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
              laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
              dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
              consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
              ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
              labore et dolore magnam aliquam quaerat voluptatem.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
              commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
              nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
              anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
              laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
              dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
              consequuntur magni dolores eos qui ratione voluptatem s</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
              commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
              nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
              anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
              laudantium, totam rem aperiam, </p>
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
