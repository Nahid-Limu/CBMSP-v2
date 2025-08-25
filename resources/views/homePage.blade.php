@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="assets/img/about.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h3> চা বাগান মালিক সমিতি, পঞ্চগড় </h3>
                    <p class="fst-italic">
                        বৈশিষ্ঠ্যসমূহঃ-
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> পঞ্চগড় জেলার চা চাষী / বাগান মালিকদের যেকোনো সমস্যায় নিরলসভাবে সমাধানের চেষ্টা করা.</li>
                        <li><i class="bi bi-check-circle"></i> ভালো মানের চা উৎপাদনের লক্ষ্যে চা চাষীদের প্রশিক্ষণসহ যাবতীয় পদক্ষেপ গ্রহণ করা.</li>
                        <li><i class="bi bi-check-circle"></i> পঞ্চগড় জেলার তথা বাংলাদেশের উন্নয়নে চা চাষীদের একতাবদ্ধ কার্যক্রম পরিচালনা করা............</li>
                        {{-- <li><i class="bi bi-check-circle"></i> চা চাষী / চা শ্রমিকদের স্বাস্থ্য সুরক্ষার জন্য যাবতীয় পদক্ষেপ গ্রহন করা...........</li> --}}
                        {{-- <li><i class="bi bi-check-circle"></i> আবাসিক, অনাবাসিক, ডে-কেয়ার সুবিধা..........</li>   --}}
                    </ul>
                    <a class="btn btn-sm btn-outline-primary" href="{{ route('about') }}">View Details</a>
        
                </div>
            </div>

        </div>
    </section>
    <!-- End About Section -->
  
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
        <div class="container">

            <div class="row counters">

            <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="{{ $ToatalMember }}" data-purecounter-duration="1" class="purecounter"></span>
                <p>Member</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="{{ $ToatalTeacher }}" data-purecounter-duration="1" class="purecounter"></span>
                <p>Post</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="{{ $ToatalEvent }}" data-purecounter-duration="1" class="purecounter"></span>
                <p>Events</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="{{ $ToatalNotice }}" data-purecounter-duration="1" class="purecounter"></span>
                <p>Notices</p>
            </div>

            </div>

        </div>
    </section>
    <!-- End Counts Section -->
  
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">

            <div class="row">
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="content">
                {{-- <h3>Why Choose Us?</h3> --}}
                {{-- <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                    Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
                </p> --}}
                <img src="assets/img/whyChoseUs.jpeg" class="img-fluid" alt="">
                
                <div class="text-center">
                    <br>
                    <a href="{{ route('about') }}" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
                </div>
            </div>
            <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-boxes d-flex flex-column justify-content-center">
                <div class="row">
                    <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0">
                        <i class='bx bxs-castle bx-flip-horizontal bx-tada' undefined >
                            <img src="assets/img/We Unity.jpg" class="img-fluid" alt="">
                        </i>
                        
                        <h4>Unity</h4>
                        <p>Working together to resolve any problems of tea farmers in Panchagarh district and implement their reasonable demands</p>
                    </div>
                    </div>
                    <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0">
                        {{-- <i class="bx bx-cube-alt"></i> --}}
                        <i class='bx bxs-castle bx-flip-horizontal bx-tada' undefined >
                            <img src="assets/img/We Care.jpg" class="img-fluid" alt="">
                        </i>
                        <h4>Care</h4>
                        <p>Take all steps to protect the health of tea farmers/tea workers.</p>
                    </div>
                    </div>
                    <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0">
                        {{-- <i class="bx bx-images"></i> --}}
                        <i class='bx bxs-castle bx-flip-horizontal bx-tada' undefined >
                            <img src="assets/img/We Learn.jpg" class="img-fluid" alt="">
                        </i>
                        <h4>Learn </h4>
                        <p>Taking all steps, including training, for tea farmers to produce good quality tea</p>
                    </div>
                    </div>
                </div>
                </div><!-- End .content-->
            </div>
            </div>

        </div>
    </section>
    <!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    {{-- <section id="features" class="features">
        <div class="container" data-aos="fade-up">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-lg-3 col-md-4">
                <div class="icon-box">
                <i class="ri-store-line" style="color: #ffbb2c;"></i>
                <h3><a href="">Lorem Ipsum</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="icon-box">
                <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                <h3><a href="">Dolor Sitema</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="icon-box">
                <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                <h3><a href="">Sed perspiciatis</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                <div class="icon-box">
                <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                <h3><a href="">Magni Dolores</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                <i class="ri-database-2-line" style="color: #47aeff;"></i>
                <h3><a href="">Nemo Enim</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
                <h3><a href="">Eiusmod Tempor</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                <h3><a href="">Midela Teren</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
                <h3><a href="">Pira Neve</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                <i class="ri-anchor-line" style="color: #b2904f;"></i>
                <h3><a href="">Dirada Pack</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                <i class="ri-disc-line" style="color: #b20969;"></i>
                <h3><a href="">Moton Ideal</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                <i class="ri-base-station-line" style="color: #ff5828;"></i>
                <h3><a href="">Verdo Park</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
                <h3><a href="">Flavor Nivelanda</a></h3>
                </div>
            </div>
            </div>

        </div>
    </section> --}}
    <!-- End Features Section -->

    <!-- ======= Popular Courses Section ======= -->
    {{-- <section id="popular-courses" class="courses">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
            <h2>Courses</h2>
            <p>Popular Courses</p>
            </div>

            <div class="row" data-aos="zoom-in" data-aos-delay="100">

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="course-item">
                <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
                <div class="course-content">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>Web Development</h4>
                    <p class="price">$169</p>
                    </div>

                    <h3><a href="course-details.html">Website Design</a></h3>
                    <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                    <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                        <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                        <span>Antonio</span>
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                        <i class="bx bx-user"></i>&nbsp;50
                        &nbsp;&nbsp;
                        <i class="bx bx-heart"></i>&nbsp;65
                    </div>
                    </div>
                </div>
                </div>
            </div> <!-- End Course Item-->

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                <div class="course-item">
                <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
                <div class="course-content">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>Marketing</h4>
                    <p class="price">$250</p>
                    </div>

                    <h3><a href="course-details.html">Search Engine Optimization</a></h3>
                    <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                    <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                        <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
                        <span>Lana</span>
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                        <i class="bx bx-user"></i>&nbsp;35
                        &nbsp;&nbsp;
                        <i class="bx bx-heart"></i>&nbsp;42
                    </div>
                    </div>
                </div>
                </div>
            </div> <!-- End Course Item-->

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                <div class="course-item">
                <img src="assets/img/course-3.jpg" class="img-fluid" alt="...">
                <div class="course-content">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>Content</h4>
                    <p class="price">$180</p>
                    </div>

                    <h3><a href="course-details.html">Copywriting</a></h3>
                    <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                    <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                        <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                        <span>Brandon</span>
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                        <i class="bx bx-user"></i>&nbsp;20
                        &nbsp;&nbsp;
                        <i class="bx bx-heart"></i>&nbsp;85
                    </div>
                    </div>
                </div>
                </div>
            </div> <!-- End Course Item-->

            </div>

        </div>
    </section> --}}
    <!-- End Popular Courses Section -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
        <div class="container" data-aos="fade-up">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                    <img src="assets/img/instituteAdmin/General Secretary.jpg" class="img-fluid" alt="">
                    <div class="member-content">
                        <h4> Manik Khan </h4>
                        <span>General Secretary</span>
                        {{-- <p>
                        Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                        </p> --}}
                        <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                    <img src="assets/img/instituteAdmin/President.jpg" class="img-fluid" alt="">
                    <div class="member-content">
                        <h4>MD Didarul Alam</h4>
                        <span>President</span>
                        {{-- <p>
                        Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                        </p> --}}
                        <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                    <img src="assets/img/instituteAdmin/Official And IT Support.jpg" class="img-fluid" alt="">
                    <div class="member-content">
                        <h4>Nahid Hasan Limu </h4>
                        <span>Official And IT Support</span>
                        {{-- <p>
                        Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                        </p> --}}
                        <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                    <img src="assets/img/instituteAdmin/Group Admin.jpg" class="img-fluid" alt="">
                    <div class="member-content">
                        <h4>Nazmul Hasan Hridoy </h4>
                        <span>Group Admin</span>
                        {{-- <p>
                        Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                        </p> --}}
                        <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Trainers Section -->
</main>
@endsection
