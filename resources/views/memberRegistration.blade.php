@extends('layouts.app')

@section('title', 'Member Registration')

@section('head')
  <meta property="og:title" content="MEMBER REGISTRATION" />
  {{-- <meta property="og:description" content="{!! Str::limit( strip_tags($Notice->description, 150) ) !!}" /> --}}
  <meta property="og:image" content="{{ asset('assets/img/memberRegThambalin.jpg') }}" />
  <meta property="og:url" content="{{ url()->current() }}" />
  <meta property="og:type" content="article" />
@endsection

@section('content')

<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>MEMBER REGISTRATION</h2>
        <p>New Member Registration. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Registration Section ======= -->
    <section id="courses" class="courses">
      <div class="container" >

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="container mt-5">

            {{-- flash Message [Error] --}}
            <span id="form_result"></span>
            {{-- flash Message [Error] --}}
            {{-- <hr> --}}
            {{-- flash Message [Success] --}}
              <div id="success_message" class="alert alert-success alert-dismissible fade" role="alert"></div>
            {{-- flash Message [Success] --}}

            {{-- <h2 class="mb-4">Member Registration Form</h2> --}}
            <form  id="AddMemberForm" enctype="multipart/form-data laravel" file="false" class="row g-3 needs-validation" novalidate>
              @csrf
          
              <!-- Member Information -->
              <div class="card mb-4">
                <div class="card-header text-primary"><strong>Member Information</strong></div>
                <div class="card-body row g-3">

                  <div class="col-md-6">
                    <label for="memberName" class="form-label text-secondary">Member Name ( সদস্যের নাম )</label>
                    <input type="text" class="form-control" id="memberName" name="name" required>
                  </div>
                  <div class="col-md-6">
                    
                    <div class="row">
                      <div class="col-md-6">
                        <label for="photo" class="form-label text-secondary">Photo ( ছবি *2 MB Max* )</label>
                        <input type="file" class="form-control uplodeImage" id="photo" name="photo" required>
                      </div>
                      <div class="col-md-6">
                        {{-- Preview an image before  --}}
                          <img src="assets/img/imagePlaceholder.jpg" class="w-100 imgPreview" style="padding-bottom: 18px; width: 266px; height: 190px;" id="imgPreview" hidden>
                        {{-- Preview an image before  --}}
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6">
                    <label for="fatherName" class="form-label text-secondary">Father's Name ( পিতার নাম )</label>
                    <input type="text" class="form-control" id="fatherName" name="father_name">
                  </div>
                  <div class="col-md-6">
                    <label for="motherName" class="form-label text-secondary">Mother's Name ( মাতার নাম )</label>
                    <input type="text" class="form-control" id="motherName" name="mother_name">
                  </div>
                  <div class="col-md-6">
                    <label for="nid" class="form-label text-secondary">NID Number ( জাতীয় পরিচয়পত্র নম্বর )</label>
                    <input type="text" class="form-control" pattern="^\d{10}|\d{17}$" minlength="10" maxlength="17" id="nid" name="nid" required>
                  </div>
                  <div class="col-md-6">
                    <label for="dob" class="form-label text-secondary">Date of Birth ( জন্ম তারিখ )</label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                  </div>

                </div>
              </div>
          
              <!-- Address Section -->
              <div class="card mb-4">
                <div class="card-header text-primary"><strong>Address Information</strong></div>
                <div class="card-body row g-3">
                  <div class="col-md-6">
                    <label for="zila" class="form-label text-secondary">Zila ( জেলা )</label>
                    <select class="form-select" id="zilaSelect" onchange="populateUpazilas()"  name="zila" required></select>
                  </div>
                  <div class="col-md-6">
                    <label for="upazila" class="form-label  text-secondary">Upazila ( উপজেলা )</label>
                    <select class="form-select" id="upazilaSelect" onchange="populateUnions()"  name="upazila" required></select>
                  </div>
                  <div class="col-md-6">
                    <label for="union" class="form-label text-secondary">Union ( ইউনিয়ন )</label>
                    <select class="form-select" id="unionSelect" name="union_parishad" required></select>
                  </div>
                  <div class="col-md-6">
                    <label for="village" class="form-label text-secondary">Village ( গ্রাম )</label>
                    <input type="text" class="form-control" id="village" name="village" required>
                  </div>
                </div>
              </div>
          
              <!-- Contact Section -->
              <div class="card mb-4">
                <div class="card-header text-primary"><strong>Contact Information</strong></div>
                <div class="card-body row g-3">
                  <div class="col-md-6">
                    <label for="phone" class="form-label text-secondary">Phone Number ( ফোন নম্বর )</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                  </div>
                  <div class="col-md-6">
                    <label for="email" class="form-label text-secondary">Email ( ইমেইল )</label>
                    <input type="email" class="form-control" id="email" name="email">
                  </div>
                </div>
              </div>
          
              <!-- Tea Garden Info -->
              <div class="card mb-4">
                <div class="card-header text-primary"><strong>Tea Garden Information</strong></div>
                <div class="card-body row g-3">
                  <div class="col-md-6">
                    <label for="amount" class="form-label text-secondary">Amount of Tea Garden (in acres) ( চা বাগানের পরিমাণ (একর) )</label>
                    <input type="number" step="0.01" class="form-control" id="amount" name="amount_of_tea_garden">
                  </div>
                  <div class="col-md-6">
                    <label for="tgAddress" class="form-label text-secondary">Tea Garden Address ( চা বাগানের ঠিকানা )</label>
                    <input type="text" class="form-control" id="tgAddress" name="tea_garden_address">
                  </div>
                  <div class="col-md-6">
                    <label for="dagNo" class="form-label text-secondary">Dag Number ( দাগ নম্বর )</label>
                    <input type="text" class="form-control" id="dagNo" name="dag_number">
                  </div>
                  <div class="col-md-6">
                    <label for="mouja" class="form-label text-secondary">Mouja Name ( মৌজা নাম )</label>
                    <input type="text" class="form-control" id="mouja" name="mouja_name">
                  </div>
                  <div class="col-md-6">
                    <label for="tea_board_registration_number" class="form-label text-secondary">Tea Board Registration Number ( চা বোর্ডের নিবন্ধন নম্বর *যদি  থাকে* )</label>
                    <input type="text" class="form-control" id="tea_board_registration_number" name="tea_board_registration_number">
                  </div>
                  <div class="col-md-6">
                    <label for="phone" class="form-label text-secondary">Reference Code ( রেফারেন্স কোড (সম্মেলন আইডি / সদস্য ফি প্রদানের শেষ ৩ সংখ্যা) )</label>
                    <input type="text" class="form-control" id="reference" name="reference" required>
                  </div>
                </div>
              </div>
          
            </form>
              <!-- Submit Button -->
              <div class="text-center">
                <button type="button" onclick="register()" class="btn btn-primary registerBtn">Submit</button>
              </div>
          </div>

        </div>

      </div>
    </section><!-- End Registration Section -->

</main>
<!-- End #main -->

@endsection

@section('script')

<script>

  const administrativeData = {
    "Panchagarh": {
        "Atwari": ['Alowakhowa', 'Balarampur', 'Dhamor', 'Mirzapur', 'Radhanagar', 'Toria'],
        "Boda": ['Benghari', 'Boda', 'Boroshoshi', 'Chandanbari', 'Jholaishal Shiri', 'Kajoldighi Kaligonj', 'Marea', 'Moidan Dighi', 'Pachpir', 'Sakoa'],
        "Debiganj": ['Chengthi Hazradanga', 'Chilahati', 'Dandopal', 'Debiduba', 'Debiganj', 'Pamuli', 'Sonahar Mollikadaha', 'Sundardighi', 'Tepriganj'],
        "Panchagarh Sadar": ['Amarkhana', 'Chaklahat', 'Dhakkamara', 'Garinabari', 'Hafizabad', 'Haribhasa', 'Kamat Kajal Dighi', 'Magura', 'Panchagarh Sadar', 'Satmara'],
        "Tetulia": ['Banglabandha', 'Bhajanpur', 'Buraburi', 'Devnagar', 'Shalbahan', 'Tetulia', 'Tirnaihat']
    },
    "Thakurgaon": {
        "Thakurgaon Sadar": ['Thakurgaon Paurashava', 'Akcha', 'Akhanagar', 'Auliapur', 'Balia', 'Baragaon', 'Begunbari', 'Chilarang', 'Debipur', 'Dholarhat', 'Gareya', 'Jagannathpur', 'Mohammadpur', 'Nargun', 'Rahimanpur', 'Rajagaon', 'Raypur', 'Ruhia', 'Ruhia Pashchim', 'Salandar', 'Senua', 'Shukhan'],
        "Baliadangi": ['Amjankhore', 'Bara Palashbari', 'Barabari', 'Bhanor', 'Charol', 'Dhantala', 'Duosuo', 'Paria'],
        "Haripur": ['Gedura', 'Amgaon', 'Bakua', 'Dangipara', 'Haripur'],
        "Ranisankail": ['Dharmagarh', 'Nekmarad', 'Hossaingaon', 'Lehemba', 'Bachor', 'Kashipur', 'Ratore', 'Nanduar'],
        "Pirganj": ['Chaitrakol', 'Bhendabari', 'Baradargah', 'Kumedpur', 'Madankhali', 'Tukuria', 'Bara Alampur', 'Raipur', 'Pirganj', 'Shanerhat', 'Panchgachhi', 'Ramnathpur', 'Chatra', 'Kabilpur']
    },
    "Nilphamari": {
        "Dimla": ['Balapara', 'Dimla', 'Gayabari', 'Jhunagachh Chapani', 'Khoga Kharibari', 'Khalisha Chapani', 'Nautara', 'Paschim Chhatnay', 'Purba Chhatnay', 'Tepa Kharibari'],
        "Domar": ['Bamunia', 'Bhogdaburi', 'Boragari', 'Domar', 'Gomnati', 'Harinchara', 'Jorabari', 'Ketkibari', 'Panga Motukpur', 'Sonaray'],
        "Jaldhaka": ['Balagram', 'Dharmapal', 'Douabari', 'Golna', 'Golmunda', 'Kaimari', 'Kathali', 'Khutamara', 'Mirganj', 'Shaulmari', 'Shimulbari'],
        "Kishoreganj": ['Bahagili', 'Barabhita', 'Chandkhana', 'Garagram', 'Kishoreganj', 'Magura', 'Nitai', 'Putimari', 'Ranachandi'],
        "Nilphamari Sadar": ['Chaora Bargacha', 'Chapra Saranjani', 'Charaikhola', 'Gorgram', 'Itakhola', 'Kachukata', 'Khoksabari', 'Kundapukur', 'Lakshmichap', 'Palasbari', 'Ramnagar', 'Songalsi', 'Sonaray', 'Tupamari'],
        "Saidpur": ['Bangalipur', 'Botlagari', 'Kamarpukur', 'Kasirambelpukur', 'Khatamadhupur', 'Saidpur Cantonment']
    }
    // Add more Zilas, Upazilas, and Unions
  };

  function populateZilas() {
      const zilaSelect = document.getElementById('zilaSelect');
      zilaSelect.innerHTML = '<option value="">Select Zila</option>'; // Default option
      for (const zila in administrativeData) {
          const option = document.createElement('option');
          option.value = zila;
          option.textContent = zila;
          zilaSelect.appendChild(option);
      }
      populateUpazilas(); // Call to populate Upazilas based on initial Zila (if any)
  }

  function populateUpazilas() {
      const zilaSelect = document.getElementById('zilaSelect');
      const upazilaSelect = document.getElementById('upazilaSelect');
      const selectedZila = zilaSelect.value;

      upazilaSelect.innerHTML = '<option value="">Select Upazila</option>'; // Clear and add default
      document.getElementById('unionSelect').innerHTML = '<option value="">Select Union</option>'; // Clear unions

      if (selectedZila) {
          const upazilas = administrativeData[selectedZila];
          for (const upazila in upazilas) {
              const option = document.createElement('option');
              option.value = upazila;
              option.textContent = upazila;
              upazilaSelect.appendChild(option);
          }
      }
      populateUnions(); // Call to populate Unions based on initial Upazila (if any)
  }

  function populateUnions() {
      const zilaSelect = document.getElementById('zilaSelect');
      const upazilaSelect = document.getElementById('upazilaSelect');
      const unionSelect = document.getElementById('unionSelect');
      const selectedZila = zilaSelect.value;
      const selectedUpazila = upazilaSelect.value;

      unionSelect.innerHTML = '<option value="">Select Union</option>'; // Clear and add default

      if (selectedZila && selectedUpazila) {
          const unions = administrativeData[selectedZila][selectedUpazila];
          unions.forEach(union => {
              const option = document.createElement('option');
              option.value = union;
              option.textContent = union;
              unionSelect.appendChild(option);
          });
      }
  }

  // Initialize on page load
  document.addEventListener('DOMContentLoaded', populateZilas);
        
</script>

<script>
  //Add Table Data
  function register() {

    $('.registerBtn').prop('disabled', true).html('Processing...'); // Disable and change text of button

    var form = $('#AddMemberForm')[0];
    var formdata = new FormData(form);
    $.ajax({
            url:"{{ route('memberRegistration.store') }}",
            method:"POST",
            data:formdata,
            dataType:'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success:function(response)
            {
              console.log(response.errors);

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
              $('.registerBtn').prop('disabled', false).html('Submit'); //enable and change text of button

              //success
              if (response.success) {
                
                $('.imgPreview').attr('hidden', true);
                $("#AddMemberForm").trigger("reset");

                $('html, body').animate({ scrollTop: 0 }, 'slow'); //scrollTop
                $("#success_message").text(response.success);
                
                // alert(response.success);
                // location.reload();
                SuccessMsg();

                $('.registerBtn').prop('disabled', false).html('Submit'); //enable and change text of button
              }

            },
            error: function(response) {
                // console.log(response);
            }
    })

  }
</script>

@endsection