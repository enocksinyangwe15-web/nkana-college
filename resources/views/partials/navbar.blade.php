<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{ asset('assets/index.html') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{ asset('assets/assets/img/logo.webp') }}" alt=""> -->
        <i class="bi bi-buildings"></i>
        <h1 class="sitename">NiceSchool</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ asset('assets/index.html') }}" class="active">Home</a></li>
          <li class="dropdown"><a href="{{ asset('assets/about.html') }}"><span>About</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ asset('assets/about.html') }}">About Us</a></li>
              <li><a href="{{ asset('assets/admissions.html') }}">Admissions</a></li>
              <li><a href="{{ asset('assets/academics.html') }}">Academics</a></li>
              <li><a href="{{ asset('assets/faculty-staff.html') }}">Faculty &amp; Staff</a></li>
              <li><a href="{{ asset('assets/campus-facilities.html') }}">Campus &amp; Facilities</a></li>
            </ul>
          </li>

          <li><a href="{{ asset('assets/students-life.html') }}">Students Life</a></li>
          <li><a href="{{ asset('assets/news.html') }}">News</a></li>
          <li><a href="{{ asset('assets/events.html') }}">Events</a></li>
          <li><a href="{{ asset('assets/alumni.html') }}">Alumni</a></li>
          <li class="dropdown"><a href="{{ asset('assets/#') }}"><span>More Pages</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ asset('assets/news-details.html') }}">News Details</a></li>
              <li><a href="{{ asset('assets/event-details.html') }}">Event Details</a></li>
              <li><a href="{{ asset('assets/privacy.html') }}">Privacy</a></li>
              <li><a href="{{ asset('assets/terms-of-service.html') }}">Terms of Service</a></li>
              <li><a href="{{ asset('assets/404.html') }}">Error 404</a></li>
              <li><a href="{{ asset('assets/starter-page.html') }}">Starter Page</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="{{ asset('assets/#') }}"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ asset('assets/#') }}">Dropdown 1</a></li>
              <li class="dropdown"><a href="{{ asset('assets/#') }}"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="{{ asset('assets/#') }}">Deep Dropdown 1</a></li>
                  <li><a href="{{ asset('assets/#') }}">Deep Dropdown 2</a></li>
                  <li><a href="{{ asset('assets/#') }}">Deep Dropdown 3</a></li>
                  <li><a href="{{ asset('assets/#') }}">Deep Dropdown 4</a></li>
                  <li><a href="{{ asset('assets/#') }}">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="{{ asset('assets/#') }}">Dropdown 2</a></li>
              <li><a href="{{ asset('assets/#') }}">Dropdown 3</a></li>
              <li><a href="{{ asset('assets/#') }}">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="{{ asset('assets/contact.html') }}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>