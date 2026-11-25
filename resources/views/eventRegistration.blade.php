@extends('layouts.app')

@section('title', 'CCS-26 Registration')

@section('head')
  <meta property="og:title" content="CCS-26 REGISTRATION" />
  <meta name="description" content="চা চাষি সম্মেলন ২০২6 রেজিস্ট্রেশন, আয়োজনে চা বাগান মালিক সমিতি পঞ্চগড় ।">
  {{-- <meta property="og:description" content="{!! Str::limit( strip_tags($Notice->description, 150) ) !!}" /> --}}
  <meta property="og:image" content="{{ asset('assets/img/CCS26-RegThambalin.png') }}" />
  <meta property="og:url" content="{{ url()->current() }}" />
  <meta property="og:type" content="article" />
@endsection

@section('css')

  <style>
          body {
              background: #f3f5f9;
              font-family: Arial, sans-serif;
          }

          .form-card {
              max-width: 650px;
              margin: 35px auto;
              background: #fff;
              border-radius: 15px;
              box-shadow: 0 4px 20px rgba(0,0,0,.08);
              overflow: hidden;
          }

          .form-header {
              background: #0d6efd;
              color: white;
              padding: 22px;
              text-align: center;
          }

          .form-body {
              padding: 25px;
          }

          .photo-preview {
              width: 110px;
              height: 110px;
              object-fit: cover;
              border-radius: 50%;
              border: 3px solid #dee2e6;
              display: none;
              margin-top: 12px;
          }

          .size-option {
              border: 1px solid #dee2e6;
              padding: 10px 16px;
              border-radius: 8px;
              cursor: pointer;
          }

          .size-option:has(input:checked) {
              border-color: #0d6efd;
              background: #eaf2ff;
          }

          
  </style>

  <style>
    
    #printArea {
        width: 100%;
        height: 450px;
        position: relative;
        overflow: hidden;

        background-image: url("{{ asset('assets/img/CCS26-IDCard.png') }}");
        background-size: 100% 100%;
        background-position: center;
        background-repeat: no-repeat;

        padding: 30px;
    }

    /* Profile Image */
    .profile-area {
        position: absolute;
        left: 30.5%;
        top: 30.5%;
        width: 36.5%;
        aspect-ratio: 1 / 1;
        border-radius: 50%;
        overflow: hidden;
        background: #fff;
    }

    .profile-area img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
    }

    /* ID Number on Green Leaf */
    .id-number {
        position: absolute;
        left: 62.5%;
        top: 22%;
        width: 10%;
        text-align: center;
        color: #fff;
        font-size: 14px;
        font-weight: bold;
        text-shadow: 1px 2px 3px #164000;
        transform: rotate(-33deg);
        white-space: nowrap;
    }


    @media print {
      
        .noprint {
            display: none;
        }

        .control-panel {
            display: none !important;
        }

        /* .id-card {
            width: 495px;
            margin: 0;
        } */
        #printArea {
            /* width: 495px; */
            width: 100%;
            height: 100%;
            margin: 0;
        }
    }
  </style>

@endsection

@section('content')

<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>🌿☕ চা চাষি সম্মেলন ২০২6 ☕🌿</h2>
        <p> Member Registration. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Registration Section ======= -->
    <section id="courses" class="courses">

        <div class="form-card">

            <!-- Header -->
            <div class="form-header">
                <!-- Search by Phone -->
                <div class="mb-4">
                    <label class="form-label fw-bold">
                          Download ID by Phone
                    </label>

                    <div class="input-group">
                        <input type="tel"
                              class="form-control"
                              id="searchPhone"
                              value=""
                              placeholder="ফোন নাম্বার দিয়ে সার্চ করুন">

                        <button class="btn btn-dark"
                                type="button"
                                onclick="SearchData($('#searchPhone').val())">
                            Search
                        </button>
                        
                    </div>
                </div>
            </div>

            <div class="form-body">

                {{-- flash Message [Error] --}}
                <span id="form_result"></span>
                {{-- flash Message [Error] --}}
        
                {{-- flash Message --}}
                <div id="success_message" class="alert alert-success alert-dismissible fade" role="alert"></div>
                {{-- flash Message --}}

                <hr>
                <h6 class="text-center text-success">***🌿 নতুন রেজিস্ট্রেশন ফরম নিচে ☕ ***</h6>
                <hr>

                <!-- Main Form -->
                <!-- <form id="eventRegistrationForm"> -->
                <form  id="EventRegistrationForm" enctype="multipart/form-data laravel" file="false" class="row g-3 needs-validation" novalidate>
                  @csrf
                    <!-- Name -->
                    <div class="mb-3">
                        <label class="form-label">নাম</label>
                        <input type="text"
                              class="form-control"
                              name="name"
                              placeholder="আপনার নাম লিখুন"
                              required>
                    </div>

                    <!-- Photo -->
                    <div class="mb-3">

                    <div class="row">
                        <div class="col-md-6">
                          <label for="photo" class="form-label text-secondary">Photo ( ছবি *2 MB Max* )</label>
                          <input type="file" class="form-control uplodeImage" id="photo" name="photo" required>
                        </div>
                        <div class="col-md-6">
                          {{-- Preview an image before  --}}
                            <img src="assets/img/imagePlaceholder.jpg" class="w-100 imgPreview" style="padding-bottom: 18px; width: 170px; height: 200px;" id="imgPreview" hidden>
                          {{-- Preview an image before  --}}
                        </div>
                      </div>
                    
                    </div>

                    <!-- Phone -->
                    <div class="mb-3">
                        <label class="form-label">ফোন নাম্বার</label>
                        <input type="tel"
                              class="form-control"
                              name="phone"
                              placeholder="01XXXXXXXXX"
                              pattern="01[0-9]{9}"
                              required>
                    </div>

                    <!-- Address -->
                    <div class="mb-3">
                        <label class="form-label">ঠিকানা</label>
                        <textarea class="form-control"
                                  name="address"
                                  rows="3"
                                  placeholder="আপনার ঠিকানা লিখুন"
                                  required></textarea>
                    </div>

                    <!-- Bkash Code -->
                    <div class="mb-3">
                        <label class="form-label">বিকাশ কোড ( ফি প্রদানের বিকাশ নাম্বারের শেষ ৩ সংখ্যা )</label>
                        <input type="text"
                              class="form-control"
                              name="bkash_code"
                              placeholder="বিকাশ কোড লিখুন"
                              required>
                    </div>

                    <!-- Shirt Size -->
                    <div class="mb-4">
                        <label class="form-label ">
                            টি শার্টের সাইজ নির্বাচন করুন
                        </label>

                        <div class="d-flex flex-wrap gap-2">

                            <label class="size-option">
                                <input type="radio"
                                      name="shirt_size"
                                      value="L"
                                      required>
                                L
                            </label>

                            <label class="size-option">
                                <input type="radio"
                                      name="shirt_size"
                                      value="M">
                                M
                            </label>

                            <label class="size-option">
                                <input type="radio"
                                      name="shirt_size"
                                      value="XL">
                                XL
                            </label>

                            <label class="size-option">
                                <input type="radio"
                                      name="shirt_size"
                                      value="XXL">
                                XXL
                            </label>

                        </div>
                    </div>

                    <div class="row justify-content-center">
                      <div class="col-lg-12">
                        <h5 class="mt-3 text-center">----রেফারেন্স কোডের বিবরণ----</h5>
                        <p>১.ফি ৭০০/= টাকা , বিকাশ নাম্বার ( 01717-154890 , 01770-724788 ) ।</p>
                        <p>২.যে নাম্বার থেকে রেজিস্ট্রেশন ফি বিকাশ করবেন সেই নাম্বারের শেষের তিনটি সংখ্যা বিকাশ কোড ঘরে দিন ।</p>
                      </div>
                  </div>

                    
                    <!-- Submit Button -->
                    <div class="text-center">
                      <button type="button" onclick="registerEvent()" class="btn btn-success eventRegisterBtn">Submit</button>
                    </div>

                </form>

            </div>

        </div>

        <!-- ID Card Modal [start] -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-light">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">CCS-26 ID Card</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                  
                    <div class="container py-4" id="printArea" >

                      <!-- ID Card Preview -->
                      <div class="id-card" id="idCard">
                  
                          <!-- Profile Image -->
                          <div class="profile-area">
                              <img id="profilePreview"
                                  src=""
                                  alt="Profile Photo">
                          </div>
                  
                          <!-- ID Number -->
                          <div class="id-number" id="idNumberPreview">
                            <span style="margin-left: 40px; font-size: 17px;"> CCS26 - <span id="ccsid"></span> </span><br>
                            <span style="font-size: 12px;" id="name"></span>
                             <input type="hidden" id="member_name" >
                          </div>
                  
                      </div>

                    </div>
                    
                    <div class="d-flex justify-content-center">
                      <button type="button" onclick="downloadImage($('#member_name').val())"  id="download-btn" class="btn btn-success">ডাউনলোড করুন</button>
                    </div>

                </div>
              
            </div>
          </div>

        </div>
        <!-- ID Card Modal [end] -->

    </section><!-- End Registration Section -->

</main>
<!-- End #main -->

@endsection

@section('script')

  {{-- // Download Image Script [start] --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
  <script>
      // function downloadImage(name) {
      //     // alert(name);
      //     // যে div টি ক্যাপচার করতে চান সেটি সিলেক্ট করুন
      //     const element = document.getElementById('printArea');

      //     // html2canvas দিয়ে div টিকে ক্যানভাসে রূপান্তর
      //     html2canvas(element, { useCORS: true }).then(canvas => {
      //     // ক্যানভাসকে ইমেজ ডেটায় (Base64) রূপান্তর করুন
      //     const image = canvas.toDataURL('image/png');

      //     // একটি অস্থায়ী <a> ট্যাগ (Link) তৈরি করুন
      //     const link = document.createElement('a');
      //     link.href = image;
      //     link.download = name +' CCS-26 ID.png'; // ছবির নাম

      //     // লিঙ্কে ভার্চুয়াল ক্লিক করে ডাউনলোড শুরু করুন
      //     link.click();
      //     });
      // }

      function downloadImage(name) {
          const element = document.getElementById('printArea');
          
          if (!element) {
              console.error("printArea খুঁজে পাওয়া যায়নি!");
              return;
          }

          // ফাইলের নাম নিরাপদ করা
          const safeName = (name || 'ID_Card').trim().replace(/[\/\\?%*:|"<>]/g, '-');

          html2canvas(element, { 
              useCORS: true,
              allowTaint: false,
              scale: 4, // রেজোলিউশন ৩ গুণ বাড়িয়ে HD করবে (প্রয়োজনে 4 দিতে পারেন)
              backgroundColor: '#ffffff', // ব্যাকগ্রাউন্ড সাদা রাখবে (চাইলে অন্য রঙের কোড বা null দিতে পারেন)
              logging: false,
              imageTimeout: 0 // ব্যাকগ্রাউন্ড ইমেজ লোড হওয়ার জন্য পর্যাপ্ত সময় দেবে
          }).then(canvas => {
              // 1.0 মানে সর্বোচ্চ কোয়ালিটি (১০০%)
              const image = canvas.toDataURL('image/png', 1.0);

              const link = document.createElement('a');
              link.href = image;
              link.download = `${safeName} CCS-26 ID.png`;

              document.body.appendChild(link);
              link.click();
              document.body.removeChild(link);
          }).catch(err => {
              console.error("ডাউনলোড করতে সমস্যা হয়েছে:", err);
          });
      }



      
  </script>
  {{-- // Download Image Script [end] --}}
  

  <script>
    //Add Data
    function registerEvent() {

      $('.eventRegisterBtn').prop('disabled', true).html('Processing...'); // Disable and change text of button
      
      var form = $('#EventRegistrationForm')[0];
      var formdata = new FormData(form);
      $.ajax({
              url:"{{ route('eventMemberAdd') }}",
              method:"POST",
              data:formdata,
              dataType:'JSON',
              contentType: false,
              cache: false,
              processData: false,
              success:function(response)
              {
                
                console.log(response);

                // validation
                var html = '';
                if(response.errors)
                {
                  $('html, body').animate({ scrollTop: 0 }, 'slow'); //scrollTop

                  html = '<div class="alert alert-danger alert-dismissible fade show">';
                  for(var count = 0; count < response.errors.length; count++)
                  {
                  html += '<p>' + response.errors[count] + '</p>';
                  }
                  html += '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                  
                }
                $('#form_result').html(html);
                $('.eventRegisterBtn').prop('disabled', false).html('Submit'); //enable and change text of button

                //success
                if (response.success) {
                  
                  $('.imgPreview').attr('hidden', true);
                  $("#EventRegistrationForm").trigger("reset");

                  $('html, body').animate({ scrollTop: 0 }, 'fast'); //scrollTop
                  // $("#success_message").text(response.success);
                  
                  // alert(response.success);
                  // location.reload();
                  // SuccessMsg();

                  $('.alert').addClass('show');
                  $('#success_message').text(response.success);
                  SuccessMsg();

                  $('.eventRegisterBtn').prop('disabled', false).html('Submit'); //enable and change text of button
                }

              },
              error: function(response) {
                  // console.log(response);
              }
      })

    }

    //Search Data
    function SearchData(phone) {
      
      // alert(phone);
      $.ajax({
          type: 'GET',
          url: "{{url('SearchData')}}"+"/"+phone,
          // dataType: "html",
          success: function (response) {
              // console.log(response);
              if (response.nodata) {

                // $('.alert').removeClass('show');
                // console.log(response.nodata);
                // $('.alert').addClass('show');
                // $('#success_message').text(response.nodata);

                $('#searchPhone').val('');
                $('#success_message').text(response.nodata);
                SuccessMsg();
                
              }
              if (response.success) {
                console.log(response.success.name);
                let originalText = response.success.name;
                let uppercaseText = originalText.toUpperCase(response.success.name); 

                $('#member_name').val(uppercaseText);

                $('#ccsid').text(response.success.id);
                $('#name').text(uppercaseText);
                $("#profilePreview").attr("src", "assets/img/EventMembers/"+ response.success.photo);
                $('#searchPhone').val('');
                $('#staticBackdrop').modal('toggle');

              }
              

          },error:function(){ 
              console.log(response);
          }
      });
    }

  </script>

@endsection