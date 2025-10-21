@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>CONTACT US</h2>
        {{-- <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p> --}}
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d265.77611749865486!2d88.55552293865631!3d26.331584423752574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e48ba3ae3e02cf%3A0x51113613e93d73e7!2z4Kai4Ka-4KaV4Ka-IOCmnOCmv-Cmrg!5e0!3m2!1sbn!2sbd!4v1756140731771!5m2!1sbn!2sbd" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="container my-5">
          <div class="card shadow-sm">
            <div class="card-body">
              <h4 class="card-title mb-4 text-center text-primary">Contact Details</h4>
              <div class="row g-4">

                <!-- Association Info -->
                <div class="col-md-6">
                  <h5 class="mb-3">Association Info</h5>
                  <p><strong>Name:</strong> Tea Garden Owners Association, Panchagarh</p>
                  <p><i class="bi bi-geo-alt-fill me-2 text-primary"></i>Emma Shopping Center (2nd Flor), Panchagarh Bazar, Panchagarh</p>
                  <p><i class="bi bi-envelope-fill me-2 text-primary"></i>contact@cbmspg.com</p>
                  <p><i class="bi bi-telephone-fill me-2 text-primary"></i> <a href="tel:+880 1737-369190"> +880 1737-369190</a></p>
                  <p><i class="bi bi-telephone-fill me-2 text-primary"></i> <a href="tel:+880 1750-580725"> +880 1750-580725</a></p>
                  <p><i class="bi bi-telephone-fill me-2 text-primary"></i> <a href="tel:+880 163-6150770"> +880 163-6150770</a></p>
                  <p><i class="bi bi-telephone-fill me-2 text-primary"></i> <a href="tel:+880 1717-154890"> +880 1717-154890</a></p>
                  
                </div>

                <!-- Office Hours / Other -->
                <div class="col-md-6">
                  <h5 class="mb-3">Office Hours</h5>
                  <p><i class="bi bi-clock-fill me-2 text-primary"></i>Mon – Fri: 10:00 AM – 6:00 PM</p>
                  <p><i class="bi bi-globe me-2 text-primary"></i><a href="https://cbmspg.com" target="_blank">www.cbmspg.com</a></p>
                  <p><i class="bi bi-facebook me-2 text-primary"></i><a href="https://www.facebook.com/groups/chabaganmaliksomity.panchagarh" target="_blank">Facebook Page</a></p>
                  {{-- <p><i class="bi bi-twitter-x me-2 text-primary"></i><a href="#" target="_blank">X (Twitter)</a></p> --}}
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

</main>
<!-- End #main -->

@endsection
