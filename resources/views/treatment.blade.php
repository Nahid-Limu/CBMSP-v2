@extends('layouts.app')

@section('title', 'Treatment')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>TREATMENT</h2>
        <p>Treatment of insects and fungal diseases in Tea Garden</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container-fluid" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-3 shadow-lg p-3 mb-5 bg-body rounded">
            <kbd class="form-control bg-info text-center"><i class="bi bi-list-ol"></i> <strong>Insects & Diseases</strong></kbd>
            
            <div class="list-group">
              @foreach ($TreatmentsList as $Treatment)
                  <a href="{{ route('treatment', ['type'=>$Treatment->type,'id'=>$Treatment->id] ) }}" class="list-group-item list-group-item-action">{{ $loop->index + 1 }}<i class="bi bi-dot"></i> {{ucwords($Treatment->name)}}</a>
              @endforeach
            </div>

            <hr>
            <hr>

            <kbd class="form-control bg-warning text-center"><i class="bi bi-list-ol"></i> Recent Diseases List <i class="bi bi-fire text-danger"></i><br>সাম্প্রতিক রোগসমূহ</kbd>
            <div class="list-group">
              @foreach ($RecentDiseases as $rd)
                  <a href="{{ route('treatment', ['type'=>$rd->type,'id'=>$rd->id] ) }}" class="list-group-item list-group-item-action text-danger">{{ $loop->index + 1 }}<i class="bi bi-dot"></i> {{ucwords($rd->name)}} <i class="bi bi-pin-angle" style="padding-left: 20px;"></i></a>
              @endforeach
            </div>

          </div>

          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          
          <div class="col-lg-8 mt-5 mt-lg-0 shadow-lg p-3 mb-5 bg-body rounded">

            @if (isset($TreatmentDetails))
                
                <div class="container">
                  <h2 class="mb-4 text-center">Disease Information</h2>

                  <div class="card mb-3" style="max-width: 800px; margin: auto;">
                    <div class="row g-0">
                      {{-- <div class="col-md-4">
                        <img src="{{ asset('assets/img/insectAndDisease').'/'.$TreatmentDetails->image }}" class="img-fluid rounded-start" alt="Disease Image">
                      </div> --}}
                      <div class="col-md-12">
                        <div class="card-body">
                          <h5 class="card-title text-center">Name: <strong class="text-danger">{{ucwords($TreatmentDetails->name)}}</strong></h5><hr>
                          <img src="{{ asset('assets/img/insectAndDisease').'/'.$TreatmentDetails->image }}" class="w-100" style="height: 250px;" alt="Disease Image">
                          <p class="card-text">
                            {!! $TreatmentDetails->description !!}
                          </p>
                          <p class="card-text"><small class="text-muted">Last updated: {{ $TreatmentDetails->updated_at->format('F j, Y') }}</small></p>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
            @else
                <div class="container my-5 text-center">
                  <h2 class="mb-4 text-center">Please select from Disease list to see details</h2>
                  <i class="bi bi-arrow-left-circle bx-md text-info"></i>
                </div>
            @endif

          </div>

        </div>
      </div>
    </section><!-- End Contact Section -->

</main>
<!-- End #main -->

@endsection
