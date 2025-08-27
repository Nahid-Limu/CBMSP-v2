<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="{{ (Route::currentRouteName() == 'dashboard') ? 'nav-link ' : 'nav-link collapsed' }}" href="{{ route('dashboard') }}">
          <i class="bi bi-columns-gap {{ request()->routeIs('dashboard') ? ' bx-md' : '' }}"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Modules</li>
      
      <li class="nav-item">
        <a class="{{ (Route::currentRouteName() == 'MemberList' || Route::currentRouteName() ==  'pendingMemberList' ) ? 'nav-link' : 'nav-link collapsed' }}" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people {{ request()->routeIs('MemberList') || request()->routeIs('pendingMemberList') ? ' bx-md' : '' }}"></i>
          <span>Member</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="{{ (Route::currentRouteName() == 'MemberList' || Route::currentRouteName() ==  'pendingMemberList' ) ? 'nav-content collapse show' : 'nav-content collapse' }}" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('MemberList') }}" class="{{ (Route::currentRouteName() == 'MemberList') ? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Member List</span>
            </a>
          </li>       
          <li>
            <a href="{{ route('pendingMemberList') }}" class="{{ (Route::currentRouteName() == 'pendingMemberList') ? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Pending Member List</span>
            </a>
          </li>
        </ul>
      </li><!-- End Member Nav -->

      
      <li class="nav-item">
        <a class="{{ (Route::currentRouteName() == 'eventList') ? 'nav-link ' : 'nav-link collapsed' }}" href="{{ route('eventList') }}">
          <i class='bi bi-calendar2-day {{ request()->routeIs('eventList') ? ' bx-md' : '' }}'></i>
          <span>Event</span>
        </a>
      </li><!-- End Event Page Nav -->

      <li class="nav-item">
        <a class="{{ (Route::currentRouteName() == 'noticeList') ? 'nav-link ' : 'nav-link collapsed' }}" href="{{ route('noticeList') }}">
          <i class='bi bi-bell {{ request()->routeIs('noticeList') ? ' bx-md' : '' }}'></i>
          <span>Notice</span>
        </a>
      </li><!-- End Notice Page Nav -->

      <li class="nav-item">
        <a class="{{ (Route::currentRouteName() == 'insectAndDiseaseList') ? 'nav-link ' : 'nav-link collapsed' }}" href="{{ route('insectAndDiseaseList') }}">
          <i class="bi bi-bug {{ request()->routeIs('insectAndDiseaseList') ? ' bx-md' : '' }}"></i>
          <span>Insects And Diseases</span>
        </a>
      </li><!-- End Insects and other diseases Page Nav -->

      <li class="nav-item">
        <a class="{{ (Route::currentRouteName() == 'teacherList') ? 'nav-link ' : 'nav-link collapsed' }}" href="{{ route('teacherList') }}">
          <i class="bx bxs-user-detail"></i>
          <span>Test</span>
        </a>
      </li><!-- End Teacher Page Nav -->

      <li class="nav-item">
        <a class="{{ (Route::currentRouteName() == 'resultList') ? 'nav-link ' : 'nav-link collapsed' }}" href="{{ route('resultList') }}">
          <i class='bx bx-spreadsheet' ></i>
          <span>Result</span>
        </a>
      </li><!-- End Notice Page Nav -->

      <li class="nav-item">
        <a class="{{ (Route::currentRouteName() == 'careerList') ? 'nav-link ' : 'nav-link collapsed' }}" href="{{ route('careerList') }}">
          <i class='bx bxs-graduation'></i>
          <span>Career</span>
        </a>
      </li><!-- End Career Page Nav -->

      

    </ul>

  </aside><!-- End Sidebar-->
