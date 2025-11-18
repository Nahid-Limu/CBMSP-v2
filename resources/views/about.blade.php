@extends('layouts.app')

@section('title', 'About')

@section('content')

<!-- start #main -->
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>ABOUT US</h2>
        <p>Let's Know About Us. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About প্রতিষ্ঠান Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3> চা বাগান মালিক সমিতি, পঞ্চগড় </h3>
            <p class="fst-italic">
              প্রতিষ্ঠানের বৈশিষ্ঠ্যসমূহঃ-
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> পঞ্চগড় জেলার চা চাষী / বাগান মালিকদের যেকোনো সমস্যায় নিরলসভাবে সমাধানের চেষ্টা করা.</li>
              <li><i class="bi bi-check-circle"></i> ভালো মানের চা উৎপাদনের লক্ষ্যে চা চাষীদের প্রশিক্ষণসহ যাবতীয় পদক্ষেপ গ্রহণ করা.</li>
              <li><i class="bi bi-check-circle"></i> চা চাষী / বাগান মালিকদের যুক্তিযুক্ত দাবিদাওয়া গুলোর বাস্তবায়নের জন্য বাংলাদেশ চা বোর্ড, পঞ্চগড় জেলা প্রশাসন এবং চা কারখানার মালিকদের সাথে সমন্বয়ের মাধ্যমে সুষ্ঠু সমাধানের চেষ্টা করা.</li>
              <li><i class="bi bi-check-circle"></i> পঞ্চগড় জেলার তথা বাংলাদেশের উন্নয়নে চা চাষীদের একতাবদ্ধ কার্যক্রম পরিচালনা করা.</li>
              <li><i class="bi bi-check-circle"></i> চা চাষী / চা শ্রমিকদের স্বাস্থ্য সুরক্ষার জন্য যাবতীয় পদক্ষেপ গ্রহন করা.</li>
              <li><i class="bi bi-check-circle"></i> ভালো মানের চা উৎপাদনের লক্ষ্যে অঞ্চল ভিত্তিক সরকারী বিএস নিযুক্তের জন্য কাজ করা.</li>
              <li><i class="bi bi-check-circle"></i> আধুনিক প্রযুক্তি, সঠিক সার / কিটনাশক প্রয়োগের পরামর্শ ও ব্যবস্থার জন্য কাজ করা.</li>
              <li><i class="bi bi-check-circle"></i> সমিতির সেমিনার কক্ষে সদস্যদের বিভিন্ন মতামত, মরামর্শ ও যাবতীয় সমস্যা নিয়ে আলোচনার মাধ্যমে সঠিক সিদ্ধান্তে পৌছানো এবং ব্যবস্থা গ্রহন করা.</li>
              <li><i class="bi bi-check-circle"></i> চা চাষী / বাগান মালিকদের বিনোদন এবং একতা বাড়ানোর লক্ষ্যে প্রতি বছর পিকনিকের আয়োজন করা.</li>
            </ul>
            {{-- <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            </p> --}}

          </div>
        </div>

      </div>
    </section>
    <!-- End About প্রতিষ্ঠান Section -->

    <!-- ======= Founding Member Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Founding Members</h2>
          <p>What are they saying</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/FoundingMembers/Manik Khan.jpg" class="testimonial-img" alt="">
                  <h3>Manik Khan</h3>
                  <h4>General Secretary &amp; Founding Member</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/FoundingMembers/Muhammad Habibur Rahman.jpg" class="testimonial-img" alt="">
                  <h3>Muhammad Habibur Rahman</h3>
                  <h4>Treasurer & Founding Member</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/FoundingMembers/Md Siddiqur Rahman.jpg" class="testimonial-img" alt="">
                  <h3>Md Siddiqur Rahman</h3>
                  <h4>Office Secretary & Founding Member</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/FoundingMembers/Nahid Hasan Limu.jpg" class="testimonial-img" alt="">
                  <h3>Nahid Hasan Limu</h3>
                  <h4>Organizing Secretary & Founding Member</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/FoundingMembers/Nazmul Hasan Hridoy.jpg" class="testimonial-img" alt="">
                  <h3>Nazmul Hasan Hridoy</h3>
                  <h4>Founding Member & Group Admin</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    <!-- End Founding Member Section -->

  </main>
  <!-- End #main -->

@endsection
