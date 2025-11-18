@extends('layouts.app')

@section('title', 'Events')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
        <h2>EVENTS</h2>
        <p>All Events Of CBMSP. </p>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
        <div class="container" data-aos="fade-up">

                        <div class="row">
                            @php
                                $date_now = date("Y-m-d");
                            @endphp
                            
                            @foreach ($Events as $Event)    
                                @if ( $date_now < $Event->event_date )
                                    @once
                                        <hr>
                                        <marquee direction="right" ><h6 class="text-success">Up Comming Event</h6></marquee>
                                        <hr>
                                    @endonce
                                    <div class="col-md-6 d-flex align-items-stretch">
                                        <div class="card">
                                            <div class="card-img">
                                            <img src="{{ asset('assets/img/events').'/'.$Event->image }}" alt="...">
                                            </div>
                                            <div class="card-body">
                                            <h5 class="card-title"><a href="">{{  ucwords($Event->title) }}</a></h5>
                                            <p class="fst-italic text-center">{{ date('l, F jS, Y', strtotime($Event->event_date)) }} at {{ date('h:i A', strtotime($Event->event_time)) }}</p>
                                            {{-- <p class="card-text">{{ $Event->description }}</p> --}}
                                            <p class="card-text"> {!! $Event->description !!} </p>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    @once
                                        <hr>
                                        <marquee direction="left" ><h6 class="text-danger">Old Event</h6></marquee>
                                        <hr> 
                                    @endonce
                                                   
                                    <div class="col-md-6 d-flex align-items-stretch">
                                        <div class="card">
                                            <div class="card-img">
                                            <img src="{{ asset('assets/img/events').'/'.$Event->image }}" alt="...">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title"><a href="">{{ $Event->title }}</a></h5>
                                                <p class="fst-italic text-center">{{ date('l, F jS, Y', strtotime($Event->event_date)) }} at {{ date('h:i A', strtotime($Event->event_time)) }}</p>
                                                <p class="card-text">{!! $Event->description !!}</p>
                                            </div>
                                        </div>
                                    </div>

                                @endif
                            @endforeach

                            
                        </div>

            {{-- <div class="row">
                @php
                    $date_now = date("Y-m-d");
                @endphp
                <hr>
                <marquee direction="right" ><h6 class="text-success">Up Comming Event</h6></marquee>
                <hr>
                @foreach ($Events as $Event)
                    @if ($date_now < $Event->event_date )
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="card">
                                <div class="card-img">
                                <img src="{{ asset('assets/img/events').'/'.$Event->image }}" alt="...">
                                </div>
                                <div class="card-body">
                                <h5 class="card-title"><a href="">{{  ucwords($Event->title) }}</a></h5>
                                <p class="fst-italic text-center">{{ date('l, F jS, Y', strtotime($Event->event_date)) }} at {{ date('h:i A', strtotime($Event->event_time)) }}</p>
                                <p class="card-text">{{ $Event->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

                <hr>
                <marquee direction="left" ><h6 class="text-danger">Old Event</h6></marquee>
                <hr>
                @foreach ($Events as $Event)
                    @if ($date_now > $Event->event_date )
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="card">
                                <div class="card-img">
                                <img src="{{ asset('assets/img/events').'/'.$Event->image }}" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="">{{ $Event->title }}</a></h5>
                                    <p class="fst-italic text-center">{{ date('l, F jS, Y', strtotime($Event->event_date)) }} at {{ date('h:i A', strtotime($Event->event_time)) }}</p>
                                    <p class="card-text">{{ $Event->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                
            </div> --}}
            
             {{ $Events->links('pagination::bootstrap-5') }}
             {{-- {!! $Events->withQueryString()->links('pagination::bootstrap-5') !!} --}}

        </div>
    </section><!-- End Events Section -->

</main>
<!-- End #main -->

@endsection
