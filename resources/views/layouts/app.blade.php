<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="title" content="{{ config('app.name', 'চা বাগান মালিক সমিতি') }} – চা বাগানের মালিকদের জন্য স্মার্ট সফটওয়্যার">
    <meta name="keywords" content="চা বাগান মালিক সমিতি পঞ্চগড়, চা বাগান পঞ্চগড়, মালিক সমিতি পঞ্চগড়, CBMSPG, Tea Garden Panchagarh, Tea Garden Owners Association, saas, project tracking" />
    <meta name="author" content="চা বাগান মালিক সমিতি" />
    <meta name="description" content="চা বাগানের মালিকদের জন্য স্মার্ট সফটওয়্যার.">

    <meta name="google-adsense-account" content="ca-pub-1779671886822617">

    <link rel="icon" type="image/png" href="{!! asset('assets/img/favicon.png') !!}"/>
    {{-- <link rel="apple-touch-icon" type="image/png" href="{!! asset('assets/img/apple-touch-icon.png') !!}"/> --}}

    <title>চা বাগান মালিক সমিতি - @yield('title')</title>
    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    @yield('head')
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    
    @include('include.css')
    @yield('css')

</head>

<body>

    @include('include.nav')
    
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
      <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        <h1 class="text-danger">চা-এর স্বর্গ, পঞ্চগড়,<br><span class="text-success"> যেখানে সবুজ স্বপ্ন বোনা হয়.</span></h1>
        <h2>চা বাগান মালিক সমিতি, পঞ্চগড়.</h2>
        {{-- <a href="courses.html" class="btn-get-started">Get Started</a> --}}
        <br>
        @php
            $RecentDiseases = \App\Models\InsectAndDisease::orderBy('updated_at', 'desc')->where('pinned', 1)->get('name'); // Example: Fetch all users
        @endphp

        @if ($RecentDiseases->isNotEmpty())
            <marquee class="marq" onmouseout="this.start()" onmouseover="this.stop()" direction="right" loop="">
              <a href="{{ route('treatment') }}" class="btn btn-md btn-outline-warning rounded-pill">
                চা বাগানের সাম্প্রতিক রোগসমূহ <i class="bi bi-arrow-right-circle-fill text-danger"></i>
                @foreach ($RecentDiseases as $RD)
                    {{-- {{ $RD->name }} --}}
                    {{ $RD->name }}@unless($loop->last) , @endunless
                @endforeach
                <i class="bi bi-arrow-left-circle-fill text-danger"></i>
              </a>
            </marquee>
        @endif

        {{-- advertisement [Start] --}}
        <marquee class="marq" onmouseout="this.start()" onmouseover="this.stop()" direction="left" loop="">
          <a href="{{ route('memberRegistration') }}" class="btn btn-md btn-outline-success rounded-pill">
            <strong>🌿☕ চা চাষি সম্মেলন ২০২৫ ☕🌿</strong> <i class="bi bi-arrow-right-circle-fill text-danger"></i>
            ফি ছাড়াই সমিতির ওয়েবসাইটে সদস্যপদ নিবন্ধন
            <i class="bi bi-arrow-left-circle-fill text-danger"></i>
          </a>
        </marquee>
        {{-- advertisement [END] --}}
        
      </div>
    </section>
    <!-- End Hero -->
  
    @yield('content')
  
    @include('include.footer')
  
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
</body>
@include('include.js')
@yield('script')
{{-- Mentor Template --}}
</html>
