<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="{{ (Route::currentRouteName() == 'dashboard') ? 'nav-item ' : 'nav-link collapsed' }} " href="{{ route('dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Pages</li>
      
      <li class="nav-item">
        <a class="{{ (Route::currentRouteName() == 'teacherList') ? 'nav-item ' : 'nav-link collapsed' }}" href="{{ route('teacherList') }}">
          <i class="bx bxs-user-detail"></i>
          <span>Teacher</span>
        </a>
      </li><!-- End Teacher Page Nav -->

      <li class="nav-item">
        <a class="{{ (Route::currentRouteName() == 'eventList') ? 'nav-item ' : 'nav-link collapsed' }}" href="{{ route('eventList') }}">
          <i class='bx bx-calendar-event'></i>
          <span>Event</span>
        </a>
      </li><!-- End Event Page Nav -->

      <li class="nav-item">
        <a class="{{ (Route::currentRouteName() == 'noticeList') ? 'nav-item ' : 'nav-link collapsed' }}" href="{{ route('noticeList') }}">
          <i class='bx bx-bell'></i>
          <span>Notice</span>
        </a>
      </li><!-- End Notice Page Nav -->

      <li class="nav-item">
        <a class="{{ (Route::currentRouteName() == 'resultList') ? 'nav-item ' : 'nav-link collapsed' }}" href="{{ route('resultList') }}">
          <i class='bx bx-spreadsheet' ></i>
          <span>Result</span>
        </a>
      </li><!-- End Notice Page Nav -->

      <li class="nav-item">
        <a class="{{ (Route::currentRouteName() == 'careerList') ? 'nav-item ' : 'nav-link collapsed' }}" href="{{ route('careerList') }}">
          <i class='bx bxs-graduation'></i>
          <span>Career</span>
        </a>
      </li><!-- End Career Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Member</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('MemberList') }}">
              <i class="bi bi-circle"></i><span>Member List</span>
            </a>
          </li>
          <li>
            <a href="{{ route('pendingMemberList') }}">
              <i class="bi bi-circle"></i><span>Pending Member List</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

    </ul>

  </aside><!-- End Sidebar-->
