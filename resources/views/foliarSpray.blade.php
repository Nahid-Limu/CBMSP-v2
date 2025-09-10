@extends('layouts.app')

@section('title', 'Foliar spray')

@section('content')

<!-- start #main -->
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>ফলিয়ার স্প্রে</h2>
        <p>চা বাগানে ফলিয়ার স্প্রে </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= ফলিয়ার Section ======= -->
    <section id="about" class="about bg-light">
      <div class="container" data-aos="fade-up">

        <div class="card">
            <div class="card-header bg-success text-white text-center">
                <h4 class="mb-0">ফলিয়ার স্প্রে:</h4>
            </div>
            
            <div class="card-body">
              {{-- <h5 class="mb-3"> ফলিয়ার স্প্রে:</h5> --}}

              <!-- Description -->
              <div class="mt-3">
                  <p>
                      ফলিয়ার স্প্রে/পাতায় সার প্রয়োগ সাধারণত মাইক্রোনিউট্রিয়েন্টস বা গৌণ পুষ্টি উপাদান যেমন
                      জিংক, বোরন, কপার, ম্যাংগানিজ, মলিবডেনাম, ইত্যাদি ক্ষেত্রে সুপারিশ করা হয়। তবে গাছ থেকে
                      বাড়তি ফলল পাওয়ার জন্য কিছু ম্যাক্রোনিউট্রিয়েন্টস বা মুখ্য পুষ্টি উপাদান যেমন নাইট্রোজেন,
                      পটাশিয়াম, ম্যাগনেশিয়াম, ইত্যাদিও ফলিয়ার স্প্রে করা হয়।
                  </p>
              </div>

              <!-- Table -->
              <h5 class="mt-4 fw-bold">সুপারিশনামা:</h5>
              <div class="table-responsive">
                  <table class="table table-bordered text-center">
                      <thead class="table-dark">
                          <tr>
                              <th>সারের নাম</th>
                              <th>কেজি/২০০ লি. পানি/হেক্টর</th>
                              <th>পুষ্টি উপাদান</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr><td>ইউরিয়া</td><td>৪</td><td>N</td></tr>
                          <tr><td>ইউরিয়া+এমওপি</td><td>২+২=৪</td><td>N, K</td></tr>
                          <tr><td>জিংক সালফেট</td><td>২</td><td>Zn, S</td></tr>
                          <tr><td>জিংক সালফেট+এমওপি</td><td>১+১=২</td><td>Zn, S, K</td></tr>
                          <tr><td>ডিএপি</td><td>৪</td><td>N, P</td></tr>
                          <tr><td>ম্যাগনেশিয়াম সালফেট</td><td>২</td><td>Mg, S</td></tr>
                          <tr><td>ম্যাংগানিজ</td><td>২</td><td>Mn</td></tr>
                          <tr><td>বোরাক্স</td><td>২</td><td>B</td></tr>
                      </tbody>
                  </table>
              </div>

              <!-- Timing -->
              <div class="mt-4">
                  <h6 class="fw-bold">সময়:</h6>
                  <p>
                      ১ম কিস্তি সেপ্টেম্বর-অক্টোবর মাসে এবং ২য় কিস্তি অক্টোবর-নভেম্বর মাসে। অর্থাৎ ১ম কিস্তি ১ম কিস্তির ৩০ দিন পর প্রয়োগ করতে হবে।
                      খুব সকালে অথবা পড়ন্ত বিকেলে ফলিয়ার স্প্রে করা উত্তম।
                  </p>
              </div>

              <!-- Important Notes -->
              <div class="mt-4">
                  <h6 class="fw-bold">বিবেচ্য বিষয়সমূহ:</h6>
                  <ul>
                      <li>পাতার নিম্নপৃষ্ঠে ফলিয়ার স্প্রে করতে হবে, কারণ নিম্নপৃষ্ঠে পত্ররন্ধ্র বিদ্যমান।</li>
                      <li>প্রখর রৌদ্রউজ্জ্বল দিনে ফলিয়ার স্প্রে করা উচিত নয়।</li>
                      <li>ফলিয়ার স্প্রে অবশ্যই পাতা চয়নের পর করতে হবে।</li>
                  </ul>
              </div>
                
            </div>
        </div>

      </div>
    </section>
    <!-- End ফলিয়ার Section -->

    <hr class="container">
    <hr class="container">
    
  </main>
  <!-- End #main -->

@endsection
