<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="{{ route('home') }}" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      <h6 class="logo me-auto">CB<strong class="text-success fs-1">M</strong>SP</h6>
      <!-- Uncomment below if you prefer to use an image logo -->
      {{-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.jpg" alt="" class="img-fluid"></a> --}}

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="{{ (Route::currentRouteName() == 'home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
          <li><a class="{{ (Route::currentRouteName() == 'events') ? 'active' : '' }}" href="{{ route('events') }}">Events</a></li>
          <li><a class="{{ (Route::currentRouteName() == 'notice') || (Route::currentRouteName() == 'noticeDetails') ? 'active' : '' }}" href="{{ route('notice') }}">Notice</a></li>
          
          <li class="dropdown"><a href="#"><span>Cha Seba</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('treatment', ['type'=>'insect'] ) }}" >পোকামাকড় ব্যবস্থাপনা</a></li>
              <li><a href="{{ route('treatment', ['type'=>'disease'] ) }}">অন্যান্য রোগ (ছত্রাক ও অন্যন্য)</a></li>
              
              <li class="dropdown"><a href="#"><span>সার ও মাটি</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{ route('fertilizer') }}" class="{{ (Route::currentRouteName() == 'fertilizer') ? 'active' : '' }}">সার প্রয়োগের সুপারিশমালা</a></li>
                  <li><a href="{{ route('foliarSpray') }}" class="{{ (Route::currentRouteName() == 'foliarSpray') ? 'active' : '' }}">ফলিয়ার স্প্রে</a></li>
                  <li><a href="{{ route('dolomite') }}" class="{{ (Route::currentRouteName() == 'dolomite') ? 'active' : '' }}">ডলোমাইট প্রয়োগ</a></li>
                </ul>
              </li>

              <li class="dropdown"><a href="#"><span>চা বাগান পরিচর্যা </span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{ route('shadeTree') }}" class="{{ (Route::currentRouteName() == 'shadeTree') ? 'active' : '' }}">ছায়া তরুর চারা রোপন </a></li>
                  <li><a href="{{ route('gardenPruning') }}" class="{{ (Route::currentRouteName() == 'gardenPruning') ? 'active' : '' }}">অপরিপত চা গাছ কর্তন/ছাঁটাই </a></li>
                  <li><a href="{{ route('matureGardenPruning') }}" class="{{ (Route::currentRouteName() == 'matureGardenPruning') ? 'active' : '' }}">পরিণত চা গাছ কর্তন/ছাঁটাই </a></li>
                  <li><a href="{{ route('afterPruning') }}" class="{{ (Route::currentRouteName() == 'afterPruning') ? 'active' : '' }}">গাছ কর্তন/ছাঁটাই সময়ে করণীয় </a></li>
                </ul>
              </li>

            </ul>
          </li>

          <li><a class="{{ (Route::currentRouteName() == 'blog') || (Route::currentRouteName() == 'blogDetails') ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a></li>
          <li><a class="{{ (Route::currentRouteName() == 'about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a></li>
          <li><a class="{{ (Route::currentRouteName() == 'contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
          <li><a class="{{ (Route::currentRouteName() == 'memberRegistration') ? 'active' : '' }}" href="{{ route('memberRegistration') }}">Register</a></li>
          {{-- <li><a href="{{ route('testPage') }}">testPage</a></li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{ route('login') }}" class="get-started-btn">Log In</a>

    </div>
  </header>
  <!-- End Header -->