@extends('layouts.app')

@section('title', 'Mature Garden Pruning')

@section('content')

<!-- start #main -->
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>কর্তন/ছাঁটাই</h2>
        <p>চা গাছ কর্তন/ছাঁটাই</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= অপরিপত চা গাছ কর্তন Section ======= -->
    <section id="about" class="about bg-light">
      <div class="container" data-aos="fade-up">

        <div class="card">
            <div class="card-header bg-success text-white text-center">
                <h4 class="mb-0">পরিণত চা গাছ কর্তন/ছাঁটাই ( ৬ষ্ঠ বছর থেকে..... )</h4>
            </div>
            
            <div class="card-body">
              <!-- Images -->
              <div class="row">
                <p class="text-center" data-aos="fade-up" data-aos-delay="100"><strong>কর্তন পদ্ধতি</strong></p>
                <p class="text-center" data-aos="fade-up" data-aos-delay="100"><strong><i class="bi bi-arrow-down"></i></strong></p>
                <div class="col-md-6">
                  <img src="assets/img/ChaSaba/pruning3.jpg" class="img-fluid" alt="Image 1" data-aos="fade-right" data-aos-delay="100">
                </div>
                <div class="col-md-6">
                  <img src="assets/img/ChaSaba/pruning4.jpg" class="img-fluid" alt="Image 2" data-aos="fade-left" data-aos-delay="100">
                </div>
              </div>

              <!-- Description -->
              <div class="mt-3">

                <p>
                  ৬ষ্ঠ বছর থেকে চা গাছকে পরিণত গাছ হিসেবে বিবেচনা করা হয়। চা গাছ ছাঁটাইয়ের প্রধান দুটি উদ্দেশ্য হলো- উপরের দিকে ডালপালার বৃদ্ধি নিয়ন্ত্রণ করা এবং পাশ্ব-উন্নতি করে গাছকে ঝোপাকৃতি করা।
                </p>
                
                <h5>বিটিআরআই এর পরামর্শ:</h5>
                <p> 
                  ৬ষ্ঠ বছরে গাছকে ২২ ইঞ্চি বা ৫৫ সেমি এ কেটে দেয়া। এরপর এলপি, ডিপিএস, এমএসপি, এলএসপি, এলপি পর্যায়ক্রমে ছাঁটাই করতে হবে।
                </p>

              </div>

              <!-- Table -->
              <h6 class="mt-4 fw-bold">পরিণত চা গাছ কর্তন/ছাঁটাই উচ্চতা (ভূমি থেকে)</h6>
              <div class="table-responsive">
                  <table class="table table-bordered text-center">
                    <thead class="table-secondary">
                      <tr>
                        <th>বছর</th>
                        <th>ধরণ</th>
                        <th>উচ্চতা</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr><td>৬ষ্ঠ</td><td>এলপি (১ম চক)</td><td>২২ ইঞ্চি/৫৫ সেমি</td></tr>
                      <tr><td>৭ম</td><td>ডিপিএস</td><td>২৬ ইঞ্চি/৬৫ সেমি</td></tr>
                      <tr><td>৮ম</td><td>এমএসপি</td><td>২৮ ইঞ্চি/৭০ সেমি</td></tr>
                      <tr><td>৯ম</td><td>এলএসপি</td><td>৩০ ইঞ্চি/৭৫ সেমি</td></tr>
                      <tr><td>১০ম</td><td>এলপি (২য় চক)</td><td>২৩ ইঞ্চি/৫৮ সেমি</td></tr>
                    </tbody>
                  </table>
              </div>

              <!-- Important Notes -->
              <div class="mt-4">
                  <h6 class="fw-bold">বিবেচ্য বিষয়সমূহ:</h6>
                  <ul>
                    <li>এলপি অবশ্যই ডিসেম্বরে মধ্যে, ডিপিএস ১৫ জানুয়ারির মধ্যে, এমএসপি ৩১ জানুয়ারির মধ্যে, এলএসপি ২০ জানুয়ারি-১৫ ফেব্রুয়ারির মধ্যে শেষ করতে হবে।</li>
                    <li>লাইট স্কিফ বা হালকা ছাঁটাই ৩৬ ইঞ্চি বা ৯১ সেমি এর উপরে হবে না। বেশি হলে পাতি উৎপাদন কমে যাবে।</li>
                    <li>যেকোনো কারণে ছাঁটাই বিলম্বিত হলে ছাঁটাই এবং প্রাকৃতিক বিলম্ব একসাথে হবে।</li>
                    <li>খরা মোকাবেলায় ডিপিএস+এমএসপি=৬০% এবং এলএসপি+এলপি=৪০%</li>
                    <li>খরায় বেশি ক্ষতিগ্রস্ত এলাকায় ছাঁটাই এর সময় ও ধরণ বদলানো যেতে পারে।</li>
                  </ul>
              </div>

            </div>
        </div>

      </div>
    </section>
    <!-- End অপরিপত চা গাছ কর্তন Section -->

    <hr class="container">
    <hr class="container">

  </main>
  <!-- End #main -->

@endsection
