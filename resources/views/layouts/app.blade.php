<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="title" content="{{ config('app.name', 'চা বাগান মালিক সমিতি') }} – চা বাগানের মালিকদের জন্য স্মার্ট সফটওয়্যার">
    <meta name="keywords" content="চা বাগান মালিক সমিতি পঞ্চগড়, চা বাগান পঞ্চগড়, মালিক সমিতি পঞ্চগড়, CBMSPG, Tea Garden Panchagarh,Tea Garden, Owners Association, Bangladesh, cbmspg, Tea Garden Owners Association, saas, project tracking" />
    <meta name="author" content="চা বাগান মালিক সমিতি" />
    <meta name="description" content="চা বাগান মালিক সমিতির অফিসিয়াল ওয়েবসাইটে আপনাকে স্বাগতম। আমাদের লক্ষ্য, পরিষেবা এবং কার্যক্রম সম্পর্কে জানুন।">

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

    @yield('hero')
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
