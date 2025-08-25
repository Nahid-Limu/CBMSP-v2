@extends('layouts.app')

@section('title', 'About')

@section('content')

<!-- start #main -->
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>About Us</h2>
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

    <!-- ======= start সময় সূচি Section ======= -->
    {{-- <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>প্রতিষ্ঠানের পাঠ দানের সময় সূচি:</h3>
            <p class="fst-italic">
              আবাসিক /অনাবাসিক:-
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> ছাত্র-ছাত্রীদের জন্য সকাল ৮.৩০ মিনিট হতে দুপুর ২.৩০ মিনিট পর্যন্ত.</li>
            </ul>

          </div>

          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>পাঠ দানের সময় সূচি:</h3>
            <p class="fst-italic">
              ডে কেয়ার:-
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> ছাত্র-ছাত্রীদের জন্য সকাল ৮.৩০ মিনিট হতে দুপুর ২.৩০ মিনিট পর্যন্ত.</li>
              <li><i class="bi bi-check-circle"></i>  ছাত্র-ছাত্রীদের জন্য বিকাল ৩.০০ মিনিট হতে বিকাল ৫.০০ মিনিট পর্যন্ত.</li>
              <li><i class="bi bi-check-circle"></i> আসর থেকে মাগরীব পর্যন্ত-খেলাধূলা.</li>
              <li><i class="bi bi-check-circle"></i> এছাড়া আবাসিক ও ডে-কেয়ারের ছাত্র-ছাত্রীরা সন্ধ্যা হতে রাত ৯.০০ মিনিট পর্যন্ত স্টাডি সেন্টারে প্রতিষ্ঠানের শিক্ষকদের তত্ত্বাবধানে অধ্যায়নরত থাকবে.</li>
            </ul>

          </div>
        </div>

      </div>
    </section> --}}
    <!-- End সময় সূচি Section -->

    <!-- ======= start পোশাক Section ======= -->
    {{-- <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>পোশাক:</h3>
            <p class="fst-italic">
              আবাসিক /অনাবাসিক:-
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <kbd class="bg-info">ছাত্র:</kbd> সাদা শার্ট, অ্যাস কালার টাই, অ্যাস কালার প্যান্ট সাদা জুতা, সাদা মোজা.</li>
              <li><i class="bi bi-check-circle"></i> <kbd class="bg-info">ছাত্রী:</kbd> অ্যাস কালার জামা, সাদা ওরনা ও স্কার্ফ, সাদা পায়জামা অ্যাস কালার বোরখা, সাদা জুতা, সাদা মোজা.</li>
              
            </ul>

          </div>

          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>পোশাক:</h3>
            <p class="fst-italic">
              আবাসিক:-
            </p>

            <p>
              আবাসিক ছাত্র/ছাত্রীগণ দুটি বেডসিট, দুটি বালিশের কাভার, একটি কাঁথা/কম্বল ২২*১২ মাপের বক্স/ট্রাংক, স্টাডি সেন্টারে অধ্যয়নের জন্য প্রয়োজনীয় কাপড় চোপড় সঙ্গে আনতে হবে .
            </p>

          </div>
        </div>

      </div>
    </section> --}}
    <!-- End পোশাক Section -->

    <!-- ======= start ছাত্রদের প্রাত্যহিক রুটিন Section ======= -->
    {{-- <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>ছাত্রদের প্রাত্যহিক রুটিন:</h3>
            <p class="fst-italic">
              আবাসিক:-
            </p>
            <table class="table table-hover table-bordered ">
              <thead class="table-primary">
                <tr>
                  <th>নং</th>
                  <th>সময়</th>
                  <th>প্রাত্যহিক কাজ</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="table-info">০১</td>
                  <td>ভোর ৪.৫০ - ৫.১৫</td>
                  <td>ফজরের নামজ</td>
                </tr>
                <tr>
                  <td class="table-info">০২</td>
                  <td>সকাল ৫.১৬ - ৭.৩০</td>
                  <td>ব্যক্তিগত পড়াশোনা</td>
                </tr>
                <tr>
                  <td class="table-info">০৩</td>
                  <td>সকাল ৭.৩১ - ৮.২০</td>
                  <td>গোসল ও প্রয়োজনীয় কাপড় ধোয়া</td>
                </tr>
                <tr>
                  <td class="table-info">০৪</td>
                  <td>সকাল ৮.২১ - ৯.০০</td>
                  <td>স্কুলের প্রস্তুতি</td>
                </tr>
                <tr>
                  <td class="table-info">০৫</td>
                  <td>সকাল ৯.০১ - ২.১০</td>
                  <td>স্কুল</td>
                </tr>
                <tr>
                  <td class="table-info">০৬</td>
                  <td>দুপুর ২.১১ - ২.৩০</td>
                  <td>দুপুরের খাওয়া</td>
                </tr>
                <tr>
                  <td class="table-info">০৭</td>
                  <td>দুপুর ২.৩১ - ৩.১০</td>
                  <td>বিশ্রাম</td>
                </tr>
                <tr>
                  <td class="table-info">০৮</td>
                  <td>বিকাল ৩.১১ - ৫.০০</td>
                  <td>আবাসিক ও ডে- কেয়ার ক্লাস</td>
                </tr>
                <tr>
                  <td class="table-info">০৯</td>
                  <td>বিকাল ৫.০১ - ৫.১৫</td>
                  <td>আসরের নামাজ</td>
                </tr>
                <tr>
                  <td class="table-info">১০</td>
                  <td>বিকাল ৫.১৬ - ৬.২০</td>
                  <td>খেলাধূলা</td>
                </tr>
                <tr>
                  <td class="table-info">১১</td>
                  <td>সন্ধ্যা ৬.২১ - ৭.০০</td>
                  <td>মাগরিবের নামাজ ও নাস্তা</td>
                </tr>
                <tr>
                  <td class="table-info">১২</td>
                  <td>রাত ৭.০১ - ৯.৩০</td>
                  <td>ব্যক্তিগত পড়াশোনা</td>
                </tr>
                <tr>
                  <td class="table-info">১৩</td>
                  <td>রাত ৯.৩১ - ১০.০০</td>
                  <td>এশার নামাজ ও রাতের খাওয়া</td>
                </tr>
                <tr>
                  <td class="table-info">১৪</td>
                  <td>রাত ১০.০১ - ৪.৪৯</td>
                  <td>ঘুম</td>
                </tr>
              </tbody>
            </table>
            <p>
              বিদ্র:- উপরোক্ত সময় সূচি কর্তৃপক্ষের অনুমোদনক্রমে পরিবর্তনযোগ্য
            </p>

          </div>

          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>ছাত্র-ছাত্রীরা পালনীয় নিয়মাবলী:</h3>
            <p class="fst-italic">
              আবাসিক:-
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> ছাত্র-ছাত্রীরা নিজ নিজ বিছানাপত্র ঘুম থেকে উঠার পরেই গুছিয়ে রাখবে.</li>
              <li><i class="bi bi-check-circle"></i> প্রয়োজনীয় কাপড়-মশারী সহ বই-খাতা গুছিয়ে রাখবে.</li>
              <li><i class="bi bi-check-circle"></i> ময়লা কাপড় যথাসময়ে পরিস্কার করে লকার/ট্রাংকে ভালো করে রাখবে.</li>
              <li><i class="bi bi-check-circle"></i> কোন প্রকার খেলনা/দামী জিনিসপত্র /ডিভাইস রাখা যাবে না.</li>
              <li><i class="bi bi-check-circle"></i> কোনো প্রকার নগদ টাকা রাখা যাবে না.</li>
              <li><i class="bi bi-check-circle"></i> আবাসিকের যাবতীয় শৃঙ্খলা মেনে চলবে.</li>
            </ul>

          </div>
        </div>

      </div>
    </section> --}}
    <!-- End  ছাত্রদের প্রাত্যহিক রুটিন Section -->

    <!-- ======= start খাবারের তালিকা Section ======= -->
    {{-- <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>খাবারের তালিকা:</h3>
            <p class="fst-italic">
              আবাসিক:-
            </p>
            <table class="table table-hover table-bordered ">
              <thead class="table-primary">
                <tr>
                  <th>বার</th>
                  <th>সকাল</th>
                  <th>দুপুর</th>
                  <th>বিকাল</th>
                  <th>রাত</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="table-info">শনিবার</td>
                  <td>সাদা ভাত, ভর্তা, ডাল</td>
                  <td>সাদা ভাত, সবজি, মাংস</td>
                  <td>ড্রাইকেক কলা/ ছোলা ও মুড়ি</td>
                  <td>সাদা ভাত, সবজি, ডাল ও মাছ</td>
                </tr>
                <tr>
                  <td class="table-info">রবিবার</td>
                  <td>খিচুরী</td>
                  <td>সাদা ভাত, সবজি, মাছ</td>
                  <td>পাউরুটি কলা</td>
                  <td>সাদা ভাত, সবজি, ডাল + ডিম (দুধ+হরলিক্স)</td>
                </tr>
                <tr>
                  <td class="table-info">সোমবার</td>
                  <td>সাদা ভাত, ভর্তা, সবজি</td>
                  <td>সাদা ভাত, ডাল, মাংস</td>
                  <td>ডালপুরি</td>
                  <td>সাদা ভাত, সবজি, ভর্তা ও মাছ</td>
                </tr>
                <tr>
                  <td class="table-info">মঙ্গলবার</td>
                  <td>খিচুরী</td>
                  <td>সাদা ভাত, সবজি, মাছ</td>
                  <td>ড্রাইকেক কলা/ ছোলা ও মুড়ি</td>
                  <td>সাদা ভাত, ভর্তা, শাক / ডিম (দুধ+হরলিক্স)</td>
                </tr>
                <tr>
                  <td class="table-info">বুধবার</td>
                  <td>সাদা ভাত, শাক, ভর্তা</td>
                  <td>সাদা ভাত, ডাল, সবজি, মাংস</td>
                  <td>ডালপুরি</td>
                  <td>সাদা ভাত, সবজি, ভর্তা ও শাক</td>
                </tr>
                <tr>
                  <td class="table-info">বৃহস্পতিবার</td>
                  <td>খিচুরী</td>
                  <td>সাদা ভাত, শাক, মাছ</td>
                  <td>পাউরুটি কলা</td>
                  <td>সাদা ভাত, ডাল, ভর্তা, ডিম / মাংস (দুধ+হরলিক্স)</td>
                </tr>
                <tr>
                  <td class="table-info">শুক্রবার</td>
                  <td>সাদা ভাত, ভর্তা, ডাল</td>
                  <td>পোলাও, মাংস  ডাল</td>
                  <td>ড্রাইকেক কলা/ ছোলা ও মুড়ি</td>
                  <td>সাদা ভাত, সবজি, ভর্তা</td>
                </tr>
              </tbody>
            </table>

          </div>
          
        </div>

      </div>
    </section> --}}
    <!-- End খাবারের তালিকা Section -->
    
    <!-- ======= start আবাসিক ছাত্র-ছাত্রীরা প্রতিদিন Section ======= -->
    {{-- <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>আবাসিক ছাত্র-ছাত্রীরা প্রতিদিন:</h3>
            <p class="fst-italic">
              আবাসিক:-
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> খাবার শেষে নিজ নিজ প্লেট যথাসময়ে ভালোভাবে পরিষ্কার করে নির্ধারিত স্থানে রাখবে ও নির্দিষ্ট স্থানে ময়লা ফেলবে.</li>
              <li><i class="bi bi-check-circle"></i> টিফিন শেষে নির্দিষ্ট স্থানে ময়লা ফেলবে.</li>
              <li><i class="bi bi-check-circle"></i> খাবার অপচয় করবে না এবং ডাইনিংসহ আবাসিক পরিচ্ছন্ন রাখবে.</li>
              <li><i class="bi bi-check-circle"></i> প্রতিষ্ঠানের নির্ধারিত সময়ে খাবার খাবে.</li>
              <li><i class="bi bi-check-circle"></i> আবাসিকের যাবতীয় শৃঙ্খলা মেনে চলবে.</li>
            </ul>
           

          </div>
          
        </div>

      </div>
    </section> --}}
    <!-- End আবাসিক ছাত্র-ছাত্রীরা প্রতিদিন Section -->

    <!-- ======= Counts Section ======= -->
    {{-- <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1" class="purecounter"></span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="{{ $ToatalTeacher }}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Teachers</p>
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
    </section> --}}
    <!-- End Counts Section -->

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
                  <h4>General Secretary &amp; Founder</h4>
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
                  <h4>Founding Member</h4>
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
                  <h4>Founding Member</h4>
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
                  <h4>IT Support &amp; Founding Member</h4>
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
                  <h4>Group Admin &amp; Founding Member</h4>
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
