@extends('layouts.app')

@section('title', 'Fertilizer')

@section('content')

<!-- start #main -->
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>সার ব্যবস্থাপনা</h2>
        <p>চা বাগানে সার ব্যবস্থাপনা ( অপরিণত ও পরিণত ) </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= সার ব্যবস্থাপনা অপরিণত Section ======= -->
    <section id="about" class="about bg-light">
      <div class="container" data-aos="fade-up">

        <div class="card">
            <div class="card-header bg-success text-white text-center">
                <h4 class="mb-0">অপরিণত চা আবাদি ( ১ম থেকে ৫ম বছর )</h4>
            </div>
            <div class="card-body">
                <h5 class="mb-3">সার প্রয়োগের সুপারিশমালা:</h5>

                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead class="table-secondary">
                            <tr>
                                <th rowspan="2">বছর</th>
                                <th colspan="3">মাত্রা (কেজি/হেক্টর)</th>
                                <th rowspan="2">মোট (কেজি)</th>
                                <th colspan="2">গ্রাম/গাছ</th>
                            </tr>
                            <tr>
                                <th>ইউরিয়া</th>
                                <th>টি এস পি</th>
                                <th>এম ও পি</th>
                                <th>সমতল ভূমি</th>
                                <th>টিলা ভূমি</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>১ম</td>
                                <td>১৭৬</td>
                                <td>৯০</td>
                                <td>১৬০</td>
                                <td>৪২৬</td>
                                <td>৩০</td>
                                <td>২৭</td>
                            </tr>
                            <tr>
                                <td>২য়</td>
                                <td>২০০</td>
                                <td>১০০</td>
                                <td>১৮০</td>
                                <td>৪৮০</td>
                                <td>৩৪</td>
                                <td>২৭</td>
                            </tr>
                            <tr>
                                <td>৩য়</td>
                                <td>২৬৫</td>
                                <td>৯০</td>
                                <td>২০০</td>
                                <td>৫৫৫</td>
                                <td>৩৭</td>
                                <td>২৮</td>
                            </tr>
                            <tr>
                                <td>৪র্থ</td>
                                <td>৩০০</td>
                                <td>১০০</td>
                                <td>১৮০</td>
                                <td>৫৮০</td>
                                <td>৪১</td>
                                <td>৩২</td>
                            </tr>
                            <tr>
                                <td>৫ম</td>
                                <td>৩৩০</td>
                                <td>১১০</td>
                                <td>২০০</td>
                                <td>৬৪০</td>
                                <td>৪৫</td>
                                <td>৩৬</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h5 class="mt-4">বিবেচ্য বিষয়সমূহ:</h5>
                <ul>
                    <li>চারা রোপণের ছয় মাস পর ১ম বার সার প্রয়োগ করতে হবে।</li>
                    <li>আগাছা দমনের পর মাটি ভেজা থাকা অবস্থায় সার প্রয়োগ করতে হবে।</li>
                    <li>পাঁচা গোবরসার ও জৈব পদার্থ প্রয়োগের উপর নির্ভরশীল হতে হবে।</li>
                    <li>
                        বছরে তিন কিস্তিতে সার প্রয়োগ করতে হবে:
                        <br>১ম মাত্রা: এপ্রিল-মে মাসে,
                        <br>২য় মাত্রা: আগস্ট মাসে,
                        <br>৩য় মাত্রা: অক্টোবর-নভেম্বর মাসে।
                    </li>
                </ul>
            </div>
        </div>

      </div>
    </section>
    <!-- End সার ব্যবস্থাপনা অপরিণত Section -->

    <hr class="container">
    <hr class="container">

    <!-- ======= সার ব্যবস্থাপনা পরিণত Section ======= -->
    <section id="about" class="about bg-light">
      <div class="container" data-aos="fade-up">

        <div class="card">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">পরিণত চা আবাদি ( ৬ষ্ঠ বছর থেকে..... )</h4>
            </div>
            <div class="card-body">
                <h5 class="mb-3">সার প্রয়োগের সুপারিশমালা:</h5>

                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead class="table-secondary">
                            <tr>
                                <th rowspan="2">উৎপাদন (কেজি/হেক্টর)</th>
                                <th colspan="3">১ম কিস্তি (কেজি/হেক্টর)</th>
                                <th rowspan="2">উৎপাদন (কেজি/হেক্টর)</th>
                                <th colspan="2">২য় কিস্তি (কেজি/হেক্টর)</th>
                            </tr>
                            <tr>
                                <th>ইউরিয়া</th>
                                <th>টি এস পি</th>
                                <th>এম ও পি</th>
                                <th>ইউরিয়া</th>
                                <th>এম ও পি</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>১,০০০ পর্যন্ত</td>
                                <td>১১০</td>
                                <td>৪৪</td>
                                <td>৬০</td>
                                <td>১,০০০-৩,০০০</td>
                                <td>৬০</td>
                                <td>৬০</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h5 class="mt-4">বিবেচ্য বিষয়সমূহ:</h5>
                <ul>
                    <li>প্রতি হেক্টরে ১,০০০ থেকে ২,০০০ কেজি উৎপাদন পর্যন্ত প্রতি ১০০ কেজি উৎপাদন বৃদ্ধির জন্য সুপারিশকৃত মাত্রা থেকে ১০ কেজি ইউরিয়া বেশি প্রয়োগ করতে হবে।</li>
                    <li>প্রতি হেক্টরে উৎপাদন ২,০০০ কেজির উপরে হলে ৩,০০০ কেজি পর্যন্ত প্রতি ১০০ কেজি উৎপাদন বৃদ্ধির জন্য সুপারিশকৃত মাত্রা থেকে ১৩ কেজি ইউরিয়া বেশি প্রয়োগ করতে হবে।</li>
                    <li>প্রতি হেক্টরে ১০০ কেজি উৎপাদন বৃদ্ধির জন্য সুপারিশকৃত মাত্রা থেকে ২ কেজি টি এস পি বেশি প্রয়োগ করতে হবে।</li>
                    <li>প্রতি হেক্টরে ২,৫০০ কেজি উৎপাদন পর্যন্ত সুপারিশকৃত মাত্রা থেকে ৬ কেজি এম ও পি বেশি প্রয়োগ করতে হবে।</li>
                </ul>

                <h5 class="mt-4">সার প্রয়োগের সময়:</h5>
                <ul>
                    <li>১ম কিস্তি এপ্রিল-মে মাসে এবং ২য় কিস্তি ২৫ জুলাই-১৫ আগস্ট।</li>
                    <li>আগাছা দমনের পর মাটি ভেজা থাকা অবস্থায় সার প্রয়োগ করতে হবে।</li>
                </ul>
            </div>
        </div>

      </div>
    </section>
    <!-- End সার ব্যবস্থাপনা পরিণত Section -->

  </main>
  <!-- End #main -->

@endsection
