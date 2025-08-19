@extends('layouts.app')

@section('title', 'Member Registration')

@section('content')

<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Member Registration</h2>
        <p>New Member Registration. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Registration Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="container mt-5">

            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" id="success_message" role="alert">
                  {{ session('success') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- <h2 class="mb-4">Member Registration Form</h2> --}}
            <form action="{{ route('memberRegistration.store') }}" method="post" enctype="multipart/form-data">
              @csrf
          
              <!-- Member Information -->
              <div class="card mb-4">
                <div class="card-header">Member Information</div>
                <div class="card-body row g-3">
                  <div class="col-md-6">
                    <label for="memberName" class="form-label">Member Name</label>
                    <input type="text" class="form-control" id="memberName" name="name" required>
                  </div>
                  <div class="col-md-6">
                    <label for="photo" class="form-label">Photo</label>
                    
                    <div class="row">
                      <div class="col-md-6">
                        <input type="file" class="form-control uplodeImage" id="photo" name="photo" required>
                      </div>
                      <div class="col-md-6">
                        {{-- Preview an image before  --}}
                          <img src="assets/img/imagePlaceholder.jpg" class="w-50 imgPreview" style="padding-bottom: 18px; width: 266px; height: 190px;" id="imgPreview" hidden>
                        {{-- Preview an image before  --}}
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6">
                    <label for="nid" class="form-label">NID Number</label>
                    <input type="text" class="form-control" pattern="^\d{10}|\d{17}$" minlength="10" maxlength="17" id="nid" name="nid" required>
                  </div>
                  <div class="col-md-6">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                  </div>
                  <div class="col-md-6">
                    <label for="fatherName" class="form-label">Father's Name</label>
                    <input type="text" class="form-control" id="fatherName" name="father_name">
                  </div>
                  <div class="col-md-6">
                    <label for="motherName" class="form-label">Mother's Name</label>
                    <input type="text" class="form-control" id="motherName" name="mother_name">
                  </div>
                </div>
              </div>
          
              <!-- Address Section -->
              <div class="card mb-4">
                <div class="card-header">Address Information</div>
                <div class="card-body row g-3">
                  <div class="col-md-6">
                    <label for="village" class="form-label">Village</label>
                    <input type="text" class="form-control" id="village" name="village">
                  </div>
                  <div class="col-md-6">
                    <label for="union" class="form-label">Union Parishad</label>
                    <input type="text" class="form-control" id="union" name="union_parishad">
                  </div>
                  <div class="col-md-6">
                    <label for="upazila" class="form-label">Upazila</label>
                    <input type="text" class="form-control" id="upazila" name="upazila">
                  </div>
                  <div class="col-md-6">
                    <label for="zila" class="form-label">Zila</label>
                    <input type="text" class="form-control" id="zila" name="zila">
                  </div>
                </div>
              </div>
          
              <!-- Contact Section -->
              <div class="card mb-4">
                <div class="card-header">Contact Information</div>
                <div class="card-body row g-3">
                  <div class="col-md-6">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                  </div>
                  <div class="col-md-6">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email">
                  </div>
                </div>
              </div>
          
              <!-- Tea Garden Info -->
              <div class="card mb-4">
                <div class="card-header">Tea Garden Information</div>
                <div class="card-body row g-3">
                  <div class="col-md-6">
                    <label for="amount" class="form-label">Amount of Tea Garden (in acres/hectares)</label>
                    <input type="number" step="0.01" class="form-control" id="amount" name="amount_of_tea_garden">
                  </div>
                  <div class="col-md-6">
                    <label for="tgAddress" class="form-label">Tea Garden Address</label>
                    <input type="text" class="form-control" id="tgAddress" name="tea_garden_address">
                  </div>
                  <div class="col-md-6">
                    <label for="dagNo" class="form-label">Dag Number</label>
                    <input type="text" class="form-control" id="dagNo" name="dag_number">
                  </div>
                  <div class="col-md-6">
                    <label for="mouja" class="form-label">Mouja Name</label>
                    <input type="text" class="form-control" id="mouja" name="mouja_name">
                  </div>
                </div>
              </div>

              <!-- class="form-control" -->
              <div class="card mb-4 text-center">
                <div class="card-header">Terms and conditions</div>
                <div class="card-body row g-3">
                  <div class="col-md-12 ">
                    <label for="amount" class="form-label">I agree to the terms</label>
                    <input type="checkbox"  name="i_agree" value="1" required>
                  </div>
                </div>
              </div>
          
              <!-- Submit Button -->
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Registration Section -->

</main>
<!-- End #main -->

@endsection
