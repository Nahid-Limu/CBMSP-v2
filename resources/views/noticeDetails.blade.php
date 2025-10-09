@extends('layouts.app')

@section('title', 'Notice Details')

@section('head')
  <meta property="og:title" content="{{ ucwords($Notice->title) }}" />
  <meta property="og:description" content="{!! Str::limit( strip_tags($Notice->description, 150) ) !!}" />
  <meta property="og:image" content="{{ asset('assets/img/noticeThumbnail.jpg') }}" />
  <meta property="og:url" content="{{ url()->current() }}" />
  <meta property="og:type" content="article" />
@endsection

@section('content')

<!-- start #main -->
<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
        <h2>NOTICE</h2>
        <p>Notice Details</p>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- notice details -->
    <section class="section-sm bg-light">
        <div class="container">
            <div class="row">
                <div class="d-flex">
                    <div class="text-center mr-4">
                        <div class="p-4 bg-primary text-white">
                            <p class="text-warning">Publish Date</p>
                            <i class='bx bxs-chevron-down bx-tada' ></i>
                            <span class="h2 d-block">{{ date('j', strtotime($Notice->pulish_date)) }}</span> {{ date('F  Y', strtotime($Notice->pulish_date)) }}
                        </div>
                    </div>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <!-- notice content -->
                    <div>
                        <h4 class="mb-4"> <kbd class="">বিষয়ঃ</kbd> {{ucwords($Notice->title) }}</h4>
                        <hr>
                        <kbd>বিস্তারিত:</kbd>
                        <p>{!! $Notice->description !!}</p>

                        @php
                            $url= asset('assets/file/notice').'/'.$Notice->document; 
                        @endphp
                        
                        <a href="{{ $url }}" type="button" target="_blank" class="btn btn-sm btn-outline-info" title=""> <i class='bx bx-download'></i> Download ( {{$Notice->document}} )</a>
                        <hr>
                    </div>
                </div>

                <!-- Social Share -->
                <div id="social-links" class="text-center">
                    {!! 
                        Share::page(url()->current(), $Notice->title)
                            ->facebook()
                            ->twitter()
                            ->linkedin('Extra linkedin summary can be passed here')
                            ->whatsapp(); 
                    !!}
                    <span >Share This On Social Media</span>
                </div>
            </div>
        </div>
    </section>
    <!-- /notice details -->

</main>
<!-- End #main -->

@endsection
