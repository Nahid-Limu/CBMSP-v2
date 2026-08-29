@extends('layouts.app')

@section('title', 'Factory List')

@section('head')
  <meta property="og:title" content="{{ ucwords("Factory List") }}" />
  <meta property="og:description" content="{!! Str::limit( strip_tags("Factory List, phone number, tea factory, panchagarh, bangladesh", 150) ) !!}" />
  <meta property="og:image" content="{{ asset('assets/img/factoryThumbnail.png') }}" />
  <meta property="og:url" content="{{ url()->current() }}" />
  <meta property="og:type" content="article" />
@endsection

@section('css')

    <style>
        body {
            background: #f5f7fa;
            font-family: "Noto Sans Bengali", "SolaimanLipi", sans-serif;
        }

        .page-title {
            font-weight: 700;
            color: #146c43;
        }

        .factory-card {
            height: 100%;
            border: 0;
            border-radius: 14px;
            transition: all .2s ease;
            box-shadow: 0 3px 15px rgba(0,0,0,.08);
        }

        .factory-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 25px rgba(0,0,0,.12);
        }

        .factory-number {
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #198754;
            color: #fff;
            border-radius: 50%;
            font-weight: 700;
            flex-shrink: 0;
        }

        .factory-name {
            color: #146c43;
            font-weight: 600;
            font-size: 16px;
        }

        .info-label {
            font-size: 14px;
            font-weight: 600;
            color: cadetblue;
        }

        .address {
            font-size: 13px;
            /* font-weight: 600; */
            /* color: cadetblue; */
        }

        .email {
            word-break: break-word;
        }

        .status-badge {
            font-size: .8rem;
        }
    </style>

@endsection

@section('content')

<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Factory List</h2>
        <p>All Factory Details In Panchagarh. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">

            <div class="row g-4">

              <!-- 01 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">১</div>
                          <div>
                              <h5 class="factory-name">তেঁতুলিয়া টি কোম্পানী লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    মৌজা-কাঠপাড়া, পোঃ বুড়াবুড়ি,<br>
                                  উপজেলা-তেঁতুলিয়া, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭১৩০০০৭৪২"> ০১৭১৩০০০৭৪২  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  tetuliatea@gmail.com
                              </p>

                              <span class="badge bg-danger status-badge">
                                  প্রতিষ্ঠাকাল: ২০০৩ (বর্তমানে বন্ধ)
                              </span>
                          </div>
                      </div>
                  </div>
              </div>


              <!-- 02 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">২</div>
                          <div>
                              <h5 class="factory-name">কাজী এন্ড কাজী টি এস্টেট লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    পোঃ বুড়াবুড়ি,<br>
                                    উপজেলা-তেঁতুলিয়া, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭৩০৩৫১৪৯৭"> ০১৭৩০৩৫১৪৯৭  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  shoaib.ahmed@gemcongroup.com
                              </p>

                              <span class="badge bg-success status-badge">
                                  প্রতিষ্ঠাকাল: ২০০৩
                              </span>
                          </div>
                      </div>
                  </div>
              </div>


              <!-- 03 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">৩</div>
                          <div>
                              <h5 class="factory-name">করতোয়া টি এসোসিয়েট</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    গ্রাম-বানিয়াপাড়া, পোঃ-জগদল বাজার,<br>
                                    উপজেলা-পঞ্চগড় সদর, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭১১৩৯২০৪৬"> ০১৭১১৩৯২০৪৬  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  karotoa.tea.associates@gmail.com
                              </p>

                              <span class="badge bg-success status-badge">
                                  প্রতিষ্ঠাকাল: ২০০৮
                              </span>
                          </div>
                      </div>
                  </div>
              </div>


              <!-- 04 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">৪</div>
                          <div>
                              <h5 class="factory-name">গ্রিন কেয়ার এগ্রো লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    গ্রামঃ শালবাহান, পোঃ মাঝিপাড়া,<br>
                                    উপজেলা-তেঁতুলিয়া, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭১৩০০০৭৪২"> ০১৭১৩০০০৭৪২  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  gcaltetulia@gmail.com
                              </p>

                              <span class="badge bg-success status-badge">
                                  প্রতিষ্ঠাকাল: ২০১১
                              </span>
                          </div>
                      </div>
                  </div>
              </div>


              <!-- 05 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">৫</div>
                          <div>
                              <h5 class="factory-name">সুপ্রিম টি লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    চকড়াভিটা, জগদল,<br>
                                    উপজেলা-পঞ্চগড় সদর, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:01322846553"> 01322846553  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  mintuanwar1086@gmail.com
                              </p>

                              <span class="badge bg-success status-badge">
                                  প্রতিষ্ঠাকাল: ২০২৩
                              </span>
                          </div>
                      </div>
                  </div>
              </div>


              <!-- 06 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">৬</div>
                          <div>
                              <h5 class="factory-name">নর্থবেঙ্গল সেন্ট্রাল টি ইন্ডাস্ট্রিজ লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    গ্রাম-ঝাকুয়াখালী, পোঃ-পঞ্চগড়,<br>
                                    উপজেলা-পঞ্চগড় সদর, জেলা-পঞ্চগড়।
                                  </p>
                                  
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭১১৯২১০৮৬"> ০১৭১১৯২১০৮৬  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  nbcti2013@gmail.com
                              </p>

                              <span class="badge bg-success status-badge">
                                  প্রতিষ্ঠাকাল: ২০১৩
                              </span>
                          </div>
                      </div>
                  </div>
              </div>


              <!-- 07 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">৭</div>
                          <div>
                              <h5 class="factory-name">সোমা এন্ড সোমা টি প্রসেসিং লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    পূর্ব বিছনদই, দক্ষিণ পারুলিয়া,<br>
                                    উপজেলা-হাতীবান্ধা, জেলা-লালমনিরহাট।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭১৯২৪৯৯২০"> ০১৭১৯২৪৯৯২০  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  somatea007@gmail.com
                              </p>

                              <span class="badge bg-success status-badge">
                                  প্রতিষ্ঠাকাল: ২০১৩
                              </span>
                          </div>
                      </div>
                  </div>
              </div>


              <!-- 08 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">৮</div>
                          <div>
                              <h5 class="factory-name">সালিয়ান চা ফ্যাক্টরী</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    বোর্ড বাজার, জগদল,<br>
                                    উপজেলা-পঞ্চগড় সদর, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭১৫০০২০৮৮"> ০১৭১৫০০২০৮৮  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  abdussalam01713@gmail.com
                              </p>

                              <span class="badge bg-success status-badge">
                                  প্রতিষ্ঠাকাল: ২০১৬
                              </span>
                          </div>
                      </div>
                  </div>
              </div>


              <!-- 09 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">৯</div>
                          <div>
                              <h5 class="factory-name">ফাবিহা টি কোম্পানী লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    গ্রাম-কালান্দিগজ, পোঃ মাঝিপাড়া,<br>
                                    উপজেলা-তেঁতুলিয়া, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭১১৯৬৭৯৮০"> ০১৭১১৯৬৭৯৮০  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  nazmulislamfabihatea@gmail.com
                              </p>

                              <span class="badge bg-success status-badge">
                                  প্রতিষ্ঠাকাল: ২০১৭
                              </span>
                          </div>
                      </div>
                  </div>
              </div>


              <!-- 10 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">১০</div>
                          <div>
                              <h5 class="factory-name">মৈত্রী টি ইন্ডাস্ট্রিজ লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    পোঃ-পঞ্চগড়,<br>
                                    উপজেলা-পঞ্চগড় সদর, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭১১৫২৯৭৯৮"> ০১৭১১৫২৯৭৯৮  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  maitritea@gmail.com
                              </p>

                              <span class="badge bg-success status-badge">
                                  প্রতিষ্ঠাকাল: ২০১৭
                              </span>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- 11 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">১১</div>
                          <div>
                              <h5 class="factory-name">গ্রীন ফিল্ড টি ইন্ডাস্ট্রিজ লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    গ্রাম-শাহবাজপুর, ইউনিয়ন-চাড়োল,<br>
                                    উপজেলা-বালিয়াডাঙ্গী, জেলা-ঠাকুরগাঁও।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭১১৫২৯২৫১"> ০১৭১১৫২৯২৫১  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  hiru@heritagebd.com
                              </p>

                              <span class="badge bg-success status-badge">
                                  প্রতিষ্ঠাকাল: ২০১৭
                              </span>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- 12 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">১২</div>
                          <div>
                              <h5 class="factory-name">বাংলা টি ম্যানুফেকচারিং ইন্ডাস্ট্রিজ লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    মাতাফাটা, সরদারপাড়া,<br>
                                    উপজেলা-তেঁতুলিয়া, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭১৬২৮০৮৭৩"> ০১৭১৬২৮০৮৭৩  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  banglateabd2017@gmail.com
                              </p>

                              <span class="badge bg-success status-badge">
                                  প্রতিষ্ঠাকাল: ২০১৭
                              </span>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- 13 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">১৩</div>
                          <div>
                              <h5 class="factory-name">সবুজ এগ্রো ইন্ডাস্ট্রিজ লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    যুগিকাটা,<br>
                                    উপজেলা-আটোয়ারী, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭১১৯২১০৮৬"> ০১৭১১৯২১০৮৬  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  sabujagropanchagarh@gmail.com
                              </p>

                              <span class="badge bg-success status-badge">
                                  প্রতিষ্ঠাকাল: ২০১৭
                              </span>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- 14 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">১২</div>
                          <div>
                              <h5 class="factory-name">মলি টি গার্ডেন</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    গ্রাম-জগদল, ইউনিয়ন-পঞ্চগড় সদর,<br>
                                    উপজেলা-পঞ্চগড় সদর, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭১২৭৮৯৪৩৬"> ০১৭১২৭৮৯৪৩৬  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  molyteafactory@gmail.com
                              </p>

                              <span class="badge bg-success status-badge">
                                  প্রতিষ্ঠাকাল: ২০১৭
                              </span>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- 15 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">১৫</div>
                          <div>
                              <h5 class="factory-name">ইম্পেরিয়াল টি এস্টেট লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    পোঃ-বুড়াবুড়ি,<br>
                                    উপজেলা-তেঁতুলিয়া, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭১১৫৪২৯৭৬"> ০১৭১১৫৪২৯৭৬  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  imperialteafactory@gmail.com
                              </p>

                              <span class="badge bg-success status-badge">
                                  প্রতিষ্ঠাকাল: ২০১৮
                              </span>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- 16 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">১৬</div>
                          <div>
                              <h5 class="factory-name">মরগেন টি ইন্ডাস্ট্রিজ লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    ডাকঘর-জগদল, বোয়ালমারী,<br>
                                    উপজেলা-পঞ্চগড় সদর, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭১১৫৩১৪৮৬"> ০১৭১১৫৩১৪৮৬  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  morgenbd@gmail.com
                              </p>

                              <span class="badge bg-success status-badge">
                                  প্রতিষ্ঠাকাল: ২০১৯
                              </span>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- 17 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">১৭</div>
                          <div>
                              <h5 class="factory-name">সাজেদা রফিক টি ফ্যাক্টরী লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    গ্রাম-মৌলভীপাড়া, ডাকঘর-জগদল,<br>
                                    উপজেলা-পঞ্চগড় সদর, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭১৯৩৪৭৪০০"> ০১৭১৯৩৪৭৪০০  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  ashaduzzaman866@gmail.com
                              </p>

                              <span class="badge bg-success status-badge">
                                  প্রতিষ্ঠাকাল: ২০১৯
                              </span>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- 18 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">১৮</div>
                          <div>
                              <h5 class="factory-name">নাহিদ টি এস্টেট লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    দশ মাইল, জগদল,<br>
                                    উপজেলা-পঞ্চগড় সদর, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭১১৩৭৩৬২৩"> ০১৭১১৩৭৩৬২৩  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  naheedteaestateltd@yahoo.com
                              </p>

                              <span class="badge bg-success status-badge">
                                  প্রতিষ্ঠাকাল: ২০১৯
                              </span>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- 19 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">১৯</div>
                          <div>
                              <h5 class="factory-name">পপুলার টি ফ্যাক্টরী</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    সরকার পাড়া,<br>
                                    উপজেলা-দেবীগঞ্জ, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭১৩৭৪৭৬০৩"> ০১৭১৩৭৪৭৬০৩  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  skalamgir.1970@gmail.com
                              </p>

                              <span class="badge bg-success status-badge">
                                  প্রতিষ্ঠাকাল: ২০১৯
                              </span>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- 20 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">২০</div>
                          <div>
                              <h5 class="factory-name">এমএম টি এস্টেটস লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    পাহাড়বাড়ী, হাড়িভাসা,<br>
                                    উপজেলা-পঞ্চগড় সদর, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭৫৩২১৪৫৪৫"> ০১৭৫৩২১৪৫৪৫  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  mmmshohel@gmail.com
                              </p>

                              <span class="badge bg-success status-badge">
                                  প্রতিষ্ঠাকাল: ২০১৯
                              </span>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- 21 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">২১</div>
                          <div>
                              <h5 class="factory-name">উত্তরা গ্রীন টি ইন্ডাস্ট্রিজ লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    গ্রাম-কেচরা পাড়া, ইউনিয়ন-সদর,<br>
                                    উপজেলা-পঞ্চগড় সদর, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৯৩৪০৪৩০১৭"> ০১৯৩৪০৪৩০১৭  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  kazihaque2004@gmail.com
                              </p>

                              <span class="badge bg-danger status-badge">
                                  প্রতিষ্ঠাকাল: ২০২০ — বর্তমানে বন্ধ
                              </span>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- 22 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">২২</div>
                          <div>
                              <h5 class="factory-name">সুরমা এন্ড পূর্ণিমা টি কোম্পানী লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    ৪নং শালবাহান, মাঝিপাড়া,<br>
                                    উপজেলা-তেঁতুলিয়া, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭৩৮১৭২৬৩০"> ০১৭৩৮১৭২৬৩০  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  mdshahjalalantor314@gmail.com
                              </p>

                              <span class="badge bg-success status-badge">
                                  প্রতিষ্ঠাকাল: ২০২১
                              </span>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- 23 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">২৩</div>
                          <div>
                              <h5 class="factory-name">বিসমিল্লাহ টি ফ্যাক্টরী লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    পোঃ-আজিজ নগর, সরদার পাড়া,<br>
                                    উপজেলা-তেঁতুলিয়া, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭১৭৫৫৮৬৭৩"> ০১৭১৭৫৫৮৬৭৩  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  bismillahteafactoryltd@gmail.com
                              </p>

                              <span class="badge bg-success status-badge">
                                  প্রতিষ্ঠাকাল: ২০২১
                              </span>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- 24 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">২৪</div>
                          <div>
                              <h5 class="factory-name">রয়্যাল টি ফ্যাক্টরী লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    পোঃ-বুড়াবুড়ি,<br>
                                    উপজেলা-তেঁতুলিয়া, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭৩২০৪৯৩০৬"> ০১৭৩২০৪৯৩০৬  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  royalteafactory@gmail.com
                              </p>

                              <span class="badge bg-success status-badge">
                                  প্রতিষ্ঠাকাল: ২০২১
                              </span>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- 25 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">২৫</div>
                          <div>
                              <h5 class="factory-name">কণঝড়া এগ্রো লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    গ্রাম-কাগজিয়াপাড়া, বিসিক শিল্পনগরী,<br>
                                    উপজেলা-পঞ্চগড় সদর, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৯১১৪৭০৫৩৮"> ০১৯১১৪৭০৫৩৮  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  karnojhara@gmail.com
                              </p>

                              <span class="badge bg-success status-badge">
                                  প্রতিষ্ঠাকাল: ২০২১
                              </span>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- 26 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">২৬</div>
                          <div>
                              <h5 class="factory-name">পূর্বাচল গ্রীন টি ইন্ডাস্ট্রিজ লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    ২ নং হাফিজাবাদ, বামনপাড়া,<br>
                                    উপজেলা-পঞ্চগড় সদর, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭১৫৬১৪৬৮৪"> ০১৭১৫৬১৪৬৮৪  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  --------
                              </p>

                              <span class="badge bg-success status-badge">
                                  প্রতিষ্ঠাকাল: নির্মাণাধীন
                              </span>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- 27 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">২৭</div>
                          <div>
                              <h5 class="factory-name">দেবীগঞ্জ টি ফ্যাক্টরী লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    গ্রাম-সোনাপাতা, পোঃ-দেবীগঞ্জ,<br>
                                    উপজেলা-দেবীগঞ্জ, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৯৯৯৬৬৪১২২"> ০১৯৯৯৬৬৪১২২  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  alokdin@gmail.com
                              </p>

                              <span class="badge bg-success status-badge">
                                  প্রতিষ্ঠাকাল: নির্মাণাধীন
                              </span>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- 28 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">২৮</div>
                          <div>
                              <h5 class="factory-name">ময়নাগুড়ি এগ্রো টি ফ্যাক্টরী লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    গ্রাম+ইউনিয়ন-শালবাহান,<br>
                                    উপজেলা-তেঁতুলিয়া, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭১২২৯২৯৫৭"> ০১৭১২২৯২৯৫৭  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  ataursavar@yahoo.com
                              </p>

                              <span class="badge bg-success status-badge">
                                  প্রতিষ্ঠাকাল: নির্মাণাধীন
                              </span>
                          </div>
                      </div>
                  </div>
              </div>


              <!-- 29 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">২৯</div>
                          <div>
                              <h5 class="factory-name">এলিট গ্লোবাল টি লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    গ্রাম-ঠলামনি, ডাকঘর-ময়দানদিঘী,<br>
                                    উপজেলা-বোদা, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭২২৭০৯০১৯"> ০১৭২২৭০৯০১৯  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  elitetea21@gmail.com
                              </p>

                              <span class="badge bg-success status-badge">
                                  প্রতিষ্ঠাকাল: ২০২৬
                              </span>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- 30 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">৩০</div>
                          <div>
                              <h5 class="factory-name">ফার-ইস্ট টি ইন্ডাস্ট্রি লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    গ্রাম-ডুডুমারী, ডাকঘর-পঞ্চগড়,<br>
                                    উপজেলা-পঞ্চগড় সদর, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৮৪১১০৩৩৭৯"> ০১৮৪১১০৩৩৭৯  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  rshealthcare2015@gmail.com
                              </p>

                              <span class="badge bg-success status-badge">
                                  প্রতিষ্ঠাকাল: ২০২৩
                              </span>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- 31 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">৩১</div>
                          <div>
                              <h5 class="factory-name">তালমা টি ইন্ডাস্ট্রি লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    খাল পাড়া, ভিতরগড়, হাফিজাবাদ,<br>
                                    উপজেলা-পঞ্চগড় সদর, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৮৪১১০৩৩৭৯"> ০১৮৪১১০৩৩৭৯  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  rafiqulislam03379@gmail.com
                              </p>

                              <span class="badge bg-success status-badge">
                                  প্রতিষ্ঠাকাল: ২০২৩
                              </span>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- 32 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">৩২</div>
                          <div>
                              <h5 class="factory-name">কাজীরহাট হামদান টি ইন্ডাস্ট্রিজ লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    তালমা, কাজীরহাট, ভিতরগড়,<br>
                                    উপজেলা-পঞ্চগড় সদর, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭১৩৭০৫৬১৪"> ০১৭১৩৭০৫৬১৪  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  khtilpng@gmail.com
                              </p>

                              <span class="badge bg-warning status-badge">
                                  প্রতিষ্ঠাকাল: নির্মাণাধীন
                              </span>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- 33 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">৩৩</div>
                          <div>
                              <h5 class="factory-name">করতোয়া বহুমুখী সমবায় সমিতি লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    মহলদার পাড়া, পামুলী,<br>
                                    উপজেলা-দেবীগঞ্জ, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭১৬১৬৫৬২৫"> ০১৭১৬১৬৫৬২৫  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  karatoabss.ltd@gmail.com
                              </p>

                              <span class="badge bg-warning status-badge">
                                  প্রতিষ্ঠাকাল: নির্মাণাধীন
                              </span>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- 34 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">৩৪</div>
                          <div>
                              <h5 class="factory-name">নন্দা ভ্যালী টি এস্টেট লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    মৌলভীপাড়া, জগদল,<br>
                                    উপজেলা-পঞ্চগড় সদর, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৮১৯৪৩৬০৪৩"> ০১৮১৯৪৩৬০৪৩  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  info@resgroupbd.com
                              </p>

                              <span class="badge bg-warning status-badge">
                                  প্রতিষ্ঠাকাল: নির্মাণাধীন
                              </span>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- 35 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">৩৫</div>
                          <div>
                              <h5 class="factory-name">কৃষাণ টি ইন্ডাস্ট্রিজ লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    লোহাকাচি, মাঝিপাড়া, শালবাহান,<br>
                                    উপজেলা-তেঁতুলিয়া, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭১৯৭৬২৯৭৭"> ০১৭১৯৭৬২৯৭৭  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  azizmmdc@gmail.com
                              </p>

                              <span class="badge bg-warning status-badge">
                                  প্রতিষ্ঠাকাল: নির্মাণাধীন
                              </span>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- 36 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">৩৬</div>
                          <div>
                              <h5 class="factory-name">হিমালয় টি ফ্যাক্টরী লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    গ্রাম-নুনিয়াপাড়া, ডাকঘর-সাতমেরা,<br>
                                    উপজেলা-পঞ্চগড় সদর, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭০১৫১০৩৫৩"> ০১৭০১৫১০৩৫৩  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  himalayasotejtea@gmail.com
                              </p>

                              <span class="badge bg-warning status-badge">
                                  প্রতিষ্ঠাকাল: নির্মাণাধীন
                              </span>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- 37 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">৩৭</div>
                          <div>
                              <h5 class="factory-name">জামান টি এগ্রো ফ্যাক্টরী</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    কৃষ্ণনগর, মির্জাপুর,<br>
                                    উপজেলা-আটোয়ারী, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৮২০৯৫৬৫৬০"> ০১৮২০৯৫৬৫৬০  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  -----------
                              </p>

                              <span class="badge bg-success status-badge">
                                  প্রতিষ্ঠাকাল: ২০২৩
                              </span>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- 38 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">৩৮</div>
                          <div>
                              <h5 class="factory-name">সেবা টি ইন্ডাস্ট্রিজ লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    গ্রাম-সরদার পাড়া, ডাকঘর-চাকলাহাট,<br>
                                    উপজেলা-পঞ্চগড় সদর, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭৩৩১৭২০৬১"> ০১৭৩৩১৭২০৬১  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  sebatea2021@gmail.com
                              </p>

                              <span class="badge bg-warning status-badge">
                                  প্রতিষ্ঠাকাল: নির্মাণাধীন
                              </span>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- 39 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">৩৯</div>
                          <div>
                              <h5 class="factory-name">পিজিটি কোং লিঃ</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    গ্রাম-নতুনবস্তি, পোঃ-যুগিকাটা,<br>
                                    উপজেলা-আটোয়ারী, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭১২২০৯০২৭"> ০১৭১২২০৯০২৭  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  iqbalkaisarmintoo@gmail.com
                              </p>

                              <span class="badge bg-dark status-badge">
                                  প্রতিষ্ঠাকাল: কোনো স্থাপনা নেই
                              </span>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- 40 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">৪০</div>
                          <div>
                              <h5 class="factory-name">দরজিপাড়া টি কোম্পানী লিমিটেড</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    গ্রাম-দরজিপাড়া, পোঃ-তেঁতুলিয়া,<br>
                                    উপজেলা-তেঁতুলিয়া, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭৮৯৫৯৫৮৬৬"> ০১৭৮৯৫৯৫৮৬৬  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  amh.masud@gmail.com
                              </p>

                              <span class="badge bg-dark status-badge">
                                  প্রতিষ্ঠাকাল: কোনো স্থাপনা নেই
                              </span>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- 41 -->
              <div class="col-12 col-md-6 col-xl-4">
                  <div class="card factory-card p-3">
                      <div class="d-flex gap-3">
                          <div class="factory-number">৪১</div>
                          <div>
                              <h5 class="factory-name">গ্রিন এনার্জি টি ফ্যাক্টরী</h5>

                              <p class="mb-2">
                                  <span class="info-label">ঠিকানা:</span><br>
                                  <p class="address">
                                    গ্রাম-বামনপাড়া, পোঃ ভজনপুর,<br>
                                    উপজেলা-তেঁতুলিয়া, জেলা-পঞ্চগড়।
                                  </p>
                              </p>

                              <p class="mb-1">
                                  <span class="info-label">মোবাইল:</span>
                                  <a href="tel:০১৭১২৬০৩০৮৪"> ০১৭১২৬০৩০৮৪  <i class="bi bi-telephone-fill"></i> </a>
                              </p>

                              <p class="mb-1 email">
                                  <span class="info-label">ই-মেইল:</span>
                                  s126169@gmail.com
                              </p>

                              <span class="badge bg-danger status-badge">
                                  প্রতিষ্ঠাকাল: ২০১২ (বর্তমানে বন্ধ)
                              </span>
                          </div>
                      </div>
                  </div>
              </div>


            </div>

            
            <!-- Social Share -->
            <div id="social-links" class="text-center">
                {!! 
                    Share::page(url()->current(), "Factory List")
                        ->facebook()
                        ->twitter()
                        ->linkedin('Extra linkedin summary can be passed here')
                        ->whatsapp(); 
                !!}
                <span >Share This On Social Media</span>
            </div>

        </div>
      </div>
    </section><!-- End Courses Section -->

</main>
<!-- End #main -->

@endsection
