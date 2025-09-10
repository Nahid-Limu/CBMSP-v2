@extends('layouts.app')

@section('title', 'Blog')

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

    <!-- notice -->
    <section class="section">
        <!-- Blog Posts -->
        <div class="container my-5">
            <div class="row g-4">
                <!-- Blog Post 1 -->
                <div class="col-md-4">
                    <div class="card h-100">
                    <img src="assets/img/imagePlaceholder.jpg" class="card-img-top" alt="Post Image">
                    <div class="card-body">
                        <h5 class="card-title">Post Title One</h5>
                        <p class="card-text">This is a brief excerpt from the blog post. Click to read more...</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                    </div>
                </div>
                <!-- Blog Post 2 -->
                <div class="col-md-4">
                    <div class="card h-100">
                    <img src="assets/img/imagePlaceholder.jpg" class="card-img-top" alt="Post Image">
                    <div class="card-body">
                        <h5 class="card-title">Post Title Two</h5>
                        <p class="card-text">Another snippet from a different post. Continue reading...</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                    </div>
                </div>
                <!-- Blog Post 3 -->
                <div class="col-md-4">
                    <div class="card h-100">
                    <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Post Image">
                    <div class="card-body">
                        <h5 class="card-title">Post Title Three</h5>
                        <p class="card-text">Learn something new in this featured article.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                    </div>
                </div>
            </div>

            <!-- Blog details Section -->
            <div class="row">
                <!-- Blog Post Section -->
                <article class="col-lg-8 mb-5">
                    <h2 class="mb-3">Understanding Bootstrap 5 Grid System</h2>
                    <p class="text-muted">Published on August 28, 2025 by <strong>Jane Doe</strong></p>
                    <img src="https://via.placeholder.com/800x400" alt="Bootstrap Grid" class="img-fluid mb-4 rounded" />
                    <p>
                    Bootstrap 5 introduces a powerful and flexible grid system that makes designing responsive layouts easy. In this post, we'll explore how to effectively use rows and columns, breakpoints, and alignment utilities...
                    </p>
                    <p>
                    The grid system in Bootstrap 5 is based on flexbox, which offers greater control over alignment, order, and distribution of elements...
                    </p>
                    <p>
                    By mastering the grid system, you can create designs that look great on any device, from mobile phones to large desktop monitors.
                    </p>
                </article>

                <!-- Author Section -->
                <aside class="col-lg-4">
                    <div class="card">
                    <div class="card-body text-center">
                        {{-- <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Author Jane Doe" class="rounded-circle mb-3" width="120" height="120" /> --}}
                        <h5 class="card-title">Jane Doe</h5>
                        <p class="text-muted mb-2">Web Developer & Blogger</p>
                        <p class="card-text">
                        Jane is a passionate web developer with over 8 years of experience in front-end development. She enjoys writing about modern web technologies and sharing tutorials.
                        </p>
                        <div>
                        <a href="#" class="btn btn-primary btn-sm me-2" aria-label="Twitter"><i class="bi bi-twitter"></i> Twitter</a>
                        <a href="#" class="btn btn-primary btn-sm" aria-label="LinkedIn"><i class="bi bi-linkedin"></i> LinkedIn</a>
                        </div>
                    </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!-- /notice -->

</main>
<!-- End #main -->

@endsection
